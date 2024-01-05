<?php
include '../config.php';

if ($_POST['action'] && $_POST['action'] == 'view') {
        $sql = "SELECT o.id AS order_id, o.order_date, o.fullname, c.email, c.phone, o.total, o.status, o.payment_method, o.note
                FROM Orders o
                INNER JOIN Customers c ON o.customer_id = c.id";
        $data = Query($sql, db());
        echo json_encode($data);
    
}
if ($_POST['action'] && $_POST['action'] == 'count') {
    $sql1 = "SELECT COUNT(*) AS quantity
            FROM orders";
    $data1 = Query($sql1, db());

    $sql2 = "SELECT
                payment_method,
                COUNT(*) AS count
            FROM
                orders
            GROUP BY
            payment_method";
    $data2 = Query($sql2, db());
    echo json_encode([
        'total' => $data1[0],
        'totalbymetod' => $data2
    ]);

}
if ($_POST['action'] && $_POST['action'] == 'viewByUserId'){
    $id = $_POST['id'];
    $sql1 = "SELECT o.id AS order_id, o.order_date, o.total, o.status, o.payment_method, o.note
            FROM Orders o
            WHERE o.customer_id = $id
            ORDER BY order_id DESC";
    $data = Query($sql1, db());
    echo json_encode($data);
}
if ($_POST['action'] && $_POST['action'] == 'create') {
    try {
        // Get data from POST
        $customer_id = $_POST['customer_id'];
        $order_date = $_POST['order_date'];
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $total = $_POST['total'];
        $note = $_POST['note'];
        $payment_method = $_POST['payment_method'];

        // Insert data into Orders table
        $sql = "INSERT INTO Orders (customer_id, order_date, fullname, email, phone, address, total, note, payment_method)
                VALUES ($customer_id, '$order_date', '$fullname', '$email', '$phone', '$address', $total, '$note', '$payment_method')";
        // Query($sql, db());

        // Get the ID of the newly inserted record
        $order_id = QueryGetId($sql, db());

        // Get order details data
        $data = $_POST['data'];

        // Insert data into OrderDetails table
        $sql1 = "INSERT INTO OrderDetails (order_id, product_id, quantity, price)
                VALUES (:order_id, :product_id, :quantity, :price)";
        $stmt = db()->prepare($sql1);
        foreach ($data as $item) {
            $product_id = $item['itemDetails'];
            $quantity = $item['itemQty'];
            $price = $item['itemCost'];

            $stmt->bindParam(':order_id', $order_id);
            $stmt->bindParam(':product_id', $product_id);
            $stmt->bindParam(':quantity', $quantity);
            $stmt->bindParam(':price', $price);

            $stmt->execute();

            // Update quantity_in_stock in Products table
            $updateStock = "UPDATE Products SET quantity_in_stock = quantity_in_stock - :quantity WHERE id = :product_id";
            $updateStmt = db()->prepare($updateStock);
            $updateStmt->bindParam(':quantity', $quantity);
            $updateStmt->bindParam(':product_id', $product_id);
            $updateStmt->execute();
        }

        echo json_encode([
            'status' => 200,
            'message' => 'Successfully',
            'order_id' => $order_id
        ]);
    } catch (PDOException $e) {
        echo json_encode([
            'status' => 400,
            'message' => 'Something went wrong'
        ]);
    }
}

if ($_POST['action'] && $_POST['action'] == 'update') {
    try{
        $id = $_POST['id'];
        $status = $_POST['status'];
    
        $sql = "UPDATE Orders SET status = '$status' WHERE id = '$id'";
        $data = Query($sql, db());

        if ($status == 'cancelled') {
            $sql1 = "SELECT product_id, quantity FROM OrderDetails WHERE order_id = $id";
            $orderDetails = Query($sql1, db());
 
            foreach ($orderDetails as $item) {
                $product_id = $item['product_id'];
                $quantity = $item['quantity'];
                $updateStock = "UPDATE Products SET quantity_in_stock = quantity_in_stock + $quantity WHERE id = $product_id";
                Query($updateStock, db());
            }
        }
    
        if (count($data) == 0) {
            echo json_encode([
                'status' => 200,
                'message' => 'Product quantity updated successfully'
            ]);
        } 
    } catch(PDOException $e){
        echo json_encode([
            'status' => 400,
            'message' => 'Something went wrong while updating quantity'
        ]);
    }
}

if ($_POST['action'] && $_POST['action'] == 'getbyid') {
    $id = $_POST['id'];
    $sql = "SELECT o.id AS order_id, o.order_date, o.fullname, o.email, o.phone, o.address, o.total, o.note, o.status, o.payment_method
            FROM Orders o
            INNER JOIN Customers c ON o.customer_id = c.id
            WHERE o.id = $id";
        
    $data = Query($sql, db());
    echo json_encode($data[0]);
}

if ($_POST['action'] && $_POST['action'] == 'getdetailbyid') {
    $id = $_POST['id'];
    $sql = "SELECT od.order_id AS order_id, od.id AS order_detail_id, od.quantity, od.price, 
            Products.name as productname, image, Categories.name as categoryname, Products.id as id, Categories.id as categoryid 
            FROM OrderDetails od
            LEFT JOIN Products ON od.product_id = Products.id
            INNER JOIN Categories ON Products.category_id = Categories.ID
            WHERE od.order_id = $id;
            ";
    $data = Query($sql, db());
    echo json_encode($data);
}


if ($_POST['action'] && $_POST['action'] == 'revenue_annual'){
    $sql = "SELECT
            SUM(total) AS total_revenue 
            FROM orders
            WHERE orders.status = 'delivered'
            AND YEAR(order_date) = YEAR(CURDATE())
            ";
    $data = Query($sql, db());
    echo json_encode($data[0]);
}

if ($_POST['action'] && $_POST['action'] == 'revenue_monthly'){
    $sql = "SELECT
        MONTH(order_date) AS month,
        SUM(total) AS total_revenue
        FROM orders
        WHERE orders.status = 'delivered'
        AND YEAR(order_date) = YEAR(CURDATE())
        GROUP BY MONTH(order_date)";
    $data = Query($sql, db());
    echo json_encode($data);
}

if ($_POST['action'] && $_POST['action'] == 'revenue_currentMonth'){
    $sql = "SELECT
            SUM(total) AS total_revenue 
            FROM orders
            WHERE orders.status = 'delivered'
            AND MONTH(order_date) = MONTH(CURDATE())";
    $data = Query($sql, db());
    echo json_encode($data[0]);
}

if ($_POST['action'] && $_POST['action'] == 'revenue_currentDate'){
    $sql = "SELECT SUM(total) AS total_revenue
        FROM orders
        WHERE orders.status = 'delivered'
        AND DATE_FORMAT(order_date, '%Y-%m-%d') = CURDATE()";
    $data = Query($sql, db());
    echo json_encode($data[0]);
}

if ($_POST['action'] && $_POST['action'] == 'number_customer_currentDate'){
    $sql = "SELECT COUNT(DISTINCT customer_id) AS number_customer
        FROM orders
        WHERE orders.status = 'delivered'
        AND DATE_FORMAT(order_date, '%Y-%m-%d') = CURDATE()
        ";
    $data = Query($sql, db());
    echo json_encode($data[0]);
}
if ($_POST['action'] && $_POST['action'] == 'number_customer_currentMonth'){
    $sql = "SELECT COUNT(DISTINCT customer_id) AS number_customer
        FROM orders
        WHERE orders.status = 'delivered'
        AND MONTH(order_date) = MONTH(CURDATE())";
    $data = Query($sql, db());
    echo json_encode($data[0]);
}
if ($_POST['action'] && $_POST['action'] == 'number_customer_currentYear'){
    $sql = "SELECT COUNT(DISTINCT customer_id) AS number_customer
        FROM orders
        WHERE orders.status = 'delivered'
        AND YEAR(order_date) = YEAR(CURDATE())";
    $data = Query($sql, db());
    echo json_encode($data[0]);
}
