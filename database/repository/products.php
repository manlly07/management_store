<?php
    include '../config.php';

    if($_POST['action'] && $_POST['action'] == 'viewAdmin'){
        $sql = "SELECT  Products.name as productname, Products.price, image, Categories.name as categoryname, Products.id as id, Categories.id as categoryid, Products.is_active, Products.created_at, Products.quantity_in_stock as qis,
        IFNULL(quantity,0) AS quantity_sold 
        FROM Products JOIN Categories ON Products.category_id = Categories.ID
        LEFT JOIN orderDetails ON Products.id = orderDetails.product_id 
        LEFT JOIN orders ON orders.id = orderdetails.order_id AND orders.status = 'đã giao'
        GROUP BY Products.id";
        $data = Query($sql, db());
        echo json_encode($data);
    }

    if($_POST['action'] && $_POST['action'] == 'bestseller'){
        $sql = "SELECT  Products.name as productname, Products.price, image, Categories.name as categoryname, Products.id as id, Categories.id as categoryid, Products.is_active, Products.created_at, Products.quantity_in_stock as qis,
        IFNULL(quantity,0) AS quantity_sold 
        FROM Products JOIN Categories ON Products.category_id = Categories.ID
        LEFT JOIN orderDetails ON Products.id = orderDetails.product_id 
        LEFT JOIN orders ON orders.id = orderdetails.order_id AND orders.status = 'đã giao'
        GROUP BY Products.id
        HAVING quantity_sold >= 10";
        $data = Query($sql, db());
        echo json_encode($data);
    }

    if($_POST['action'] && $_POST['action'] == 'almostoutofstock'){
        $sql = "SELECT  Products.name as productname, Products.price, image, Categories.name as categoryname, Products.id as id, Categories.id as categoryid, Products.is_active, Products.created_at, Products.quantity_in_stock as qis,
        IFNULL(quantity,0) AS quantity_sold 
        FROM Products JOIN Categories ON Products.category_id = Categories.ID
        LEFT JOIN orderDetails ON Products.id = orderDetails.product_id 
        LEFT JOIN orders ON orders.id = orderdetails.order_id AND orders.status = 'đã giao'
        WHERE Products.quantity_in_stock <= 20
        GROUP BY Products.id";
        $data = Query($sql, db());
        echo json_encode($data);
    }

    if($_POST['action'] && $_POST['action'] == 'view') {
            
            $page = $_POST['page'];
            $productsPerPage = 8 * ($page - 1);
            $searchQuery = $_POST['search'];

            $sql = "SELECT  Products.name as productname, price, image, Categories.name as categoryname, Products.id as id, Categories.id as categoryid, Products.is_active, Products.created_at 
            FROM Products JOIN Categories ON Products.category_id = Categories.ID 
            WHERE Products.name LIKE '%$searchQuery%'
            LIMIT 8 OFFSET $productsPerPage";
            $data = Query($sql, db());
            
            $sql2 = "SELECT COUNT(*) AS count FROM Products";
            $totalProducts = Query($sql2, db());
            echo json_encode([
                'products' => $data,
                'count' => $totalProducts[0]['count'],
                'page' => $page
            ]);
        
    }

    if($_POST['action'] && $_POST['action'] == 'related') {
        $categoryId = $_POST['categoryId'];
        $sql = "SELECT  Products.name as productname, price, image, Categories.name as categoryname, Products.id as id, Categories.id as categoryid, Products.is_active, Products.created_at 
                FROM Products JOIN Categories ON Products.category_id = Categories.ID
                WHERE  Categories.id = $categoryId
                LIMIT 4";
        $data = Query($sql, db());
        echo json_encode($data);
    }

    if($_POST['action'] && $_POST['action'] == 'disable') {
        $id =  $_POST['id'];
        $sql = "UPDATE Products SET is_active = 0 WHERE id = '$id'";

        $data = Query($sql, db());
        if(count($data) == 0) {
            echo json_encode([
                'status' => 200
            ]);
        }else {
            echo json_encode([
                'status' => 400
            ]);
        }
    }

    if($_POST['action'] && $_POST['action'] == 'enable') {
        $id =  $_POST['id'];
        $sql = "UPDATE Products SET is_active = 1 WHERE id = '$id'";

        $data = Query($sql, db());
        if(count($data) == 0) {
            echo json_encode([
                'status' => 200
            ]);
        }else {
            echo json_encode([
                'status' => 400
            ]);
        }
    }

    if($_POST['action'] && $_POST['action'] == 'create') {
        $productname = $_POST['productname'];
        $price = $_POST['price'];      
        $categoryid = $_POST['categoryid'];
        $image = $_FILES['image'];
        $description = $_POST['description'];
        if($productname == '' || $price == '' || $categoryid == '' || $image == '' || $description == '') {
            echo json_encode([
                'status' => 400,
                'message' => 'Tất cả các trường phải điền'
            ]);
            return;
        }

        $time = time();
        $filename = $time."-".$image['name'];
        $tmp_path = $image['tmp_name'];
        $destination = '../../uploads/' . $filename;
        move_uploaded_file($tmp_path, $destination);


        $sql = "INSERT INTO Products (`name`, `price`, `image`, `category_id`, `description`)
        VALUES ('$productname', '$price', '$filename', '$categoryid', '$description')";
        $data  = Query($sql, db());

        if(count($data) == 0) {
            echo json_encode([
                'status' => 200,
                'message' => 'Successfully'
            ]);
        }else {
            echo json_encode([
                'status' => 404,
                'message' => 'Máy chủ lỗi'
            ]);
        }

    }

    if($_POST['action'] && $_POST['action'] == 'update') {
        $productname = $_POST['productname'];
        $price = $_POST['price'];      
        $categoryid = $_POST['categoryid'];
        $id = $_POST['id'];
        $description = $_POST['description'];
        $oldImg = $_POST['oldImg'];

        if($productname == '' || $price == '' || $categoryid == '' || $description == '') {
            echo json_encode([
                'status' => 400,
                'message' => 'Tất cả các trường phải điền'
            ]);
            return;
        }
        if(isset($_FILES['image'])) {
            $image = $_FILES['image'];
            $time = time();
            $filename = $time."-".$image['name'];
            $tmp_path = $image['tmp_name'];
            $destination = '../../uploads/'.$filename;
            move_uploaded_file($tmp_path, $destination);
            $updateImage = "image='$filename',";

            if (file_exists('../../uploads/'.$oldImg)) {
                unlink('../../uploads/'.$oldImg);
            }
        }else {
            $updateImage = "";
        }
        
        $sql = "UPDATE Products SET name='$productname', price=$price, description='$description',".$updateImage ." category_id=$categoryid WHERE id=$id";
        $data = Query($sql, db());
        if(count($data) == 0) {
            echo json_encode([
                'status' => 200,
                'message' => 'Successfully'
            ]);
        }else {
            echo json_encode([
                'status' => 404,
                'message' => 'Máy chủ lỗi'
            ]);
        }
    }

    if($_POST['action'] && $_POST['action'] == 'getbyid') {
        $id = $_POST['id'];
        $sql = "SELECT p.id, p.name AS productName, c.name AS categoryName, c.id AS categoryid,
        p.price, p.description AS productDescription, 
        p.image, p.quantity_in_stock as qis
        FROM Products AS p
        INNER JOIN Categories AS c
        ON p.category_id = c.id
        WHERE p.is_active = TRUE AND c.is_active = TRUE AND p.id = $id;
        ";
        $data = Query($sql, db());
        echo json_encode($data[0]);
    }

?>