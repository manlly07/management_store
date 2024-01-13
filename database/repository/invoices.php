<?php
    include '../config.php';
    if($_POST['action'] && $_POST['action'] == 'view') {
        $sql = "SELECT invoiceshipments.id AS id, invoiceshipments.name AS name, invoiceshipments.phone AS phone, invoiceshipments.total, invoiceshipments.status, invoiceshipments.shipping_method, invoiceshipments.shipment_date
        FROM invoiceshipments
        JOIN suppliers ON invoiceshipments.supplier_id = suppliers.id";
        $data = Query($sql, db());
        echo json_encode($data);
    }

    if ($_POST['action'] && $_POST['action'] == 'count') {
        $sql = "SELECT COUNT(*) AS total_invoice,
        SUM(total) AS total_revenue
        FROM invoiceshipments
        WHERE InvoiceShipments.status = 'đã giao'
        -- AND YEAR(shipment_date) = YEAR(CURDATE())
        ";
        $data = Query($sql, db());
        echo json_encode($data[0]);
    
    }

    if($_POST['action'] && $_POST['action'] == 'create') {
        try {
            // Lấy dữ liệu từ POST
            $supplier_id = $_POST['Supplier_id'];
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $shipment_date = $_POST['shipment_date'];
            $total = $_POST['total'];
            $shipping_method = $_POST['shipping_method'];
            $data = $_POST['data'];
            $total = str_replace(" đ", "", $total);
            // Chèn dữ liệu vào bảng InvoiceShipments

            $sql = "INSERT INTO InvoiceShipments (Supplier_id, name, phone, shipment_date, total,shipping_method)
                    VALUES ($supplier_id, '$name', '$phone', '$shipment_date', '$total', '$shipping_method')";
            
            // Query($sql, db());
            $shipment_id = QueryGetId($sql, db());
            // echo $shipment_id;
            // Lấy ID của bản ghi vừa chèn
            // Chèn dữ liệu vào bảng InvoiceShipmentDetails
            $sql = "INSERT INTO InvoiceShipmentDetails (shipment_id, product_id, quantity, purchase_price)
                    VALUES (:shipment_id, :product_id, :quantity, :purchase_price)";
            $stmt = db()->prepare($sql);
            foreach ($data as $item) {
                $product_id = $item['itemDetails'];
                $quantity = $item['itemQty'];
                $purchase_price = $item['itemCost'];
                
                $stmt->bindParam(':shipment_id', $shipment_id);
                $stmt->bindParam(':product_id', $product_id);
                $stmt->bindParam(':quantity', $quantity);
                $stmt->bindParam(':purchase_price', $purchase_price);
                $stmt->execute();

                // Update quantity_in_stock in Products table
                $updateStock = "UPDATE Products SET quantity_in_stock = quantity_in_stock + :quantity WHERE id = :product_id";
                $updateStmt = db()->prepare($updateStock);
                $updateStmt->bindParam(':quantity', $quantity);
                $updateStmt->bindParam(':product_id', $product_id);
                $updateStmt->execute();
            }
        
            echo json_encode([
                'status' => 200,
                'message' => 'Successfully'
            ]);
        } catch (PDOException $e) {
            echo json_encode([
                'status' => 400,
                'message' => 'Máy chủ lỗi'
            ]);
        }
    }

    if($_POST['action'] && $_POST['action'] == 'update') {
        $id = $_POST['id'];
        $status = $_POST['status'];

        $sql = "UPDATE InvoiceShipments SET status = '$status' WHERE id = '$id'";
        $data = Query($sql, db());

        if ($status == 'đã huỷ') {
            $sql1 = "SELECT product_id, quantity FROM InvoiceShipmentDetails WHERE shipment_id = $id";
            $orderDetails = Query($sql1, db());
 
            foreach ($orderDetails as $item) {
                $product_id = $item['product_id'];
                $quantity = $item['quantity'];
                $updateStock = "UPDATE Products SET quantity_in_stock = quantity_in_stock - $quantity WHERE id = $product_id";
                Query($updateStock, db());
            }
        }

        if (count($data) == 0) {
            echo json_encode([
                'status' => 200,
                'message' => 'Product quantity updated successfully'
            ]);
        } else {
            echo json_encode([
                'status' => 400,
                'message' => 'Máy chủ lỗi while updating quantity'
            ]);
        }
    }

    if($_POST['action'] && $_POST['action'] == 'getbyid') {
        $id = $_POST['id'];
        $sql = "SELECT 
            ISD.id AS shipment_detail_id,
            ISD.shipment_id,
            ISD.product_id,
            ISD.quantity,
            ISD.purchase_price,
            ISD.is_active AS shipment_detail_is_active,
            ISM.id AS shipment_id,
            ISM.Supplier_id,
            ISM.name,
            ISM.phone,
            ISM.email,
            ISM.shipment_date,
            ISM.total,
            ISM.status,
            ISM.shipping_method,
            ISM.is_active AS shipment_is_active,
            S.id AS supplier_id,
            S.name AS supplier_name,
            S.address AS supplier_address,
            S.phone AS supplier_phone,
            S.created_at AS supplier_created_at,
            S.is_active AS supplier_is_active,
            P.id AS product_id,
            P.name AS product_name,
            P.price AS product_price,
            P.image AS product_image,
            P.category_id,
            P.created_at AS product_created_at,
            P.is_active AS product_is_active
        FROM
            InvoiceShipmentDetails ISD
            JOIN InvoiceShipments ISM ON ISD.shipment_id = ISM.id
            JOIN Suppliers S ON ISM.Supplier_id = S.id
            JOIN Products P ON ISD.product_id = P.id
        WHERE
            ISM.id = $id";
        $data = Query($sql, db());
        echo json_encode($data);
    }

    if ($_POST['action'] && $_POST['action'] == 'revenue_monthly'){
        $sql = "SELECT
            MONTH(shipment_date) AS month,
            SUM(total) AS total
            FROM InvoiceShipments
            WHERE InvoiceShipments.status = 'đã giao'
            AND YEAR(shipment_date) = YEAR(CURDATE())
            GROUP BY MONTH(shipment_date)";
        $data = Query($sql, db());
        echo json_encode($data);
    }
?>