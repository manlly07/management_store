<?php
    include '../config.php';
    if($_POST['action'] && $_POST['action'] == 'view') {
        $sql = "SELECT * FROM Suppliers";
        $data = Query($sql, db());
        // $output = '';
        // foreach($data as $row) {
        //     $action = ' <div class="btn-group" role="group" aria-label="Basic example">
        //                     <button onclick="EnableSupplier(\'' . $row['id'] . '\')" type="button" class="btn btn-sm btn-success mr-2">Enable</button>
        //                     <button onclick="DisableSupplier(\'' . $row['id'] . '\')" type="button" class="btn btn-sm btn-danger mr-2">Disable</button>
        //                     <button onclick="EditSupplier(\'' . $row['id'] . '\')" type="button" class="btn btn-sm btn-warning">Edit</button>
        //                 </div>';
        //     if($row['is_active'] == 1) {
        //         $button = '<button type="button" class="m-auto d-block btn-sm btn btn-outline-success">Enable</button>';
        //     }else {
        //         $button = '<button type="button" class="m-auto d-block btn-sm btn btn-outline-danger">Disable</button>';
        //     }
        //     $output .= '<tr>
        //                         <td>'.$row['id'].'</td>
        //                         <td>'.$row['name'].'</td>
        //                         <td>'.$row['address'].'</td>
        //                         <td>'.$row['phone'].'</td>
        //                         <td>'.$button.'</td>
        //                         <td>'.$row['created_at'].'</td>
        //                         <td>'.$action.'</td>
        //                     </tr>';
        // }
        // echo $output;
        echo json_encode($data);
    }

    if($_POST['action'] && $_POST['action'] == 'disable') {
        $id =  $_POST['id'];
        $sql = "UPDATE Suppliers SET is_active = 0 WHERE id = '$id'";

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
        $sql = "UPDATE Suppliers SET is_active = 1 WHERE id = '$id'";

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
        $suppliername = $_POST['suppliername'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];  
        if($suppliername == '' || $address == '' || $phone == '') {
            echo json_encode([
                'status' => 400,
                'message' => 'Tất cả các trường phải điền'
            ]);
            return;
        }

        $pattern = '/^[a-zA-Z\s]+$/';
        // Biểu thức chính quy kiểm tra xem chuỗi chỉ bao gồm chữ thường và chữ hoa.

        if (!preg_match($pattern, $suppliername)) {
            echo json_encode([
                'status' => 400,
                'message' => 'Name must not contain numbers and special characters'
            ]);
            return;
        }
        
        $pattern = '/^(03|05|07|08|09)+([0-9]{8})$/';
        if (!preg_match($pattern, $phone)) {
            echo json_encode([
                'status' => 400,
                'message' => 'Số điện thoại không hợp lệ'
            ]);
            return;
        }


        $sql = "INSERT INTO `Suppliers` (`name`, `address`, `phone`)
                VALUES ('$suppliername', '$address', '$phone')";

        $data = Query($sql, db());
        if(count($data) == 0) {
            echo json_encode([
                'status' => 200,
                'message' => 'Successfully'
            ]);
        }else {
            echo json_encode([
                'status' => 400,
                'message' => 'Máy chủ lỗi'
            ]);
        }
    }

    if($_POST['action'] && $_POST['action'] == 'update') {
        $suppliername = $_POST['suppliername'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];  
        $id = $_POST['id'];
        if($suppliername == '' || $address == '' || $phone == '') {
            echo json_encode([
                'status' => 400,
                'message' => 'Tất cả các trường phải điền'
            ]);
            return;
        }

        $pattern = '/^[a-zA-Z\s]+$/';
        // Biểu thức chính quy kiểm tra xem chuỗi chỉ bao gồm chữ thường và chữ hoa.

        if (!preg_match($pattern, $suppliername)) {
            echo json_encode([
                'status' => 400,
                'message' => 'Name must not contain numbers and special characters'
            ]);
            return;
        }
        
        $pattern = '/^(03|05|07|08|09)+([0-9]{8})$/';
        if (!preg_match($pattern, $phone)) {
            echo json_encode([
                'status' => 400,
                'message' => 'Số điện thoại không hợp lệ'
            ]);
            return;
        }

        $sql = "SELECT * FROM Suppliers WHERE id = '$id'";
        $supplier = Query($sql, db());
        $sql = "SELECT * FROM Suppliers WHERE phone = '$phone'";
        $existPhone = Query($sql, db());
        if($supplier[0]['phone'] != $phone && count($existPhone) != 0) {
            echo json_encode([
                'status' => 400,
                'message' => 'Số điện thoại đã tồn tại'
            ]);
            return;
        }

        $sql = "UPDATE `Suppliers`
                SET `name` = '$suppliername', `address` = '$address', `phone` = '$phone'
                WHERE `id` = $id";

        $data = Query($sql, db());
        if(count($data) == 0) {
            echo json_encode([
                'status' => 200,
                'message' => 'Successfully'
            ]);
        }else {
            echo json_encode([
                'status' => 400,
                'message' => 'Máy chủ lỗi'
            ]);
        }

    }

    if($_POST['action'] && $_POST['action'] == 'getbyid') {
        $id = $_POST['id'];
        $sql = "SELECT * FROM Suppliers WHERE id = $id";
        $data = Query($sql, db());
        echo json_encode($data);
    }

?>