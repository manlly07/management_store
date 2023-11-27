<?php
    include '../config.php';

    if($_POST['action'] && $_POST['action'] == 'view') {
        $sql = "SELECT Products.name as productname, price, image, Categories.name as categoryname, Products.id as id, Categories.id as categoryid, Products.is_active, Products.created_at FROM Products JOIN Categories ON Products.category_id = Categories.ID";
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
        if($productname == '' || $price == '' || $categoryid == '' || $image == '') {
            echo json_encode([
                'status' => 400,
                'message' => 'All fields must be required'
            ]);
            return;
        }

        $time = time();
        $filename = $time."-".$image['name'];
        $tmp_path = $image['tmp_name'];
        $destination = '../../uploads/' . $filename;
        move_uploaded_file($tmp_path, $destination);


        $sql = "INSERT INTO Products (`name`, `price`, `image`, `category_id`)
        VALUES ('$productname', '$price', '$filename', '$categoryid')";
        $data  = Query($sql, db());

        if(count($data) == 0) {
            echo json_encode([
                'status' => 200,
                'message' => 'Successfully'
            ]);
        }else {
            echo json_encode([
                'status' => 400,
                'message' => 'Something went wrong'
            ]);
        }

    }

    if($_POST['action'] && $_POST['action'] == 'update') {
        $productname = $_POST['productname'];
        $price = $_POST['price'];      
        $categoryid = $_POST['categoryid'];
        $id = $_POST['id'];
        if($productname == '' || $price == '' || $categoryid == '') {
            echo json_encode([
                'status' => 400,
                'message' => 'All fields must be required'
            ]);
            return;
        }
        if(isset($_FILES['image'])) {
            $image = $_FILES['image'];
            $time = time();
            $filename = $time."-".$image['name'];
            $tmp_path = $image['tmp_name'];
            $destination = '../../uploads/' . $filename;
            move_uploaded_file($tmp_path, $destination);
            $updateImage = "image='$filename,'";
        }else {
            $updateImage = "";
        }
        
        $sql = "UPDATE Products SET name='$productname', price=$price,".$updateImage ." category_id=$categoryid WHERE id=$id";
        $data = Query($sql, db());
        if(count($data) == 0) {
            echo json_encode([
                'status' => 200,
                'message' => 'Successfully'
            ]);
        }else {
            echo json_encode([
                'status' => 400,
                'message' => 'Something went wrong'
            ]);
        }
    }

    if($_POST['action'] && $_POST['action'] == 'getbyid') {
        $id = $_POST['id'];
        $sql = "SELECT * FROM Products WHERE id = $id";
        $data = Query($sql, db());
        echo json_encode($data);
    }

?>