<?php
    include '../config.php';
    if($_POST['action'] && $_POST['action'] == 'view') {
        $sql = "SELECT * FROM Customers";
        $data = Query($sql, db());
        $output = '';
        foreach($data as $row) {
            $is_admin = $row['is_admin'] == 0? 'Grant Admin': 'Admin';
            $class_button = $row['is_admin'] == 0? '<button onclick="Admin(\'' . $row['id'] . '\')" type="button" class="btn btn-sm btn-primary ml-2">'.$is_admin.'</button>': 
            '<button type="button" class="btn btn-sm btn-warning ml-2">'.$is_admin.'</button>';
            $action = ' <div class="btn-group" role="group" aria-label="Basic example">
                            <button onclick="EnableUser(\'' . $row['id'] . '\')" type="button" class="btn btn-sm btn-success mr-2">Enable</button>
                            <button onclick="DisableUser(\'' . $row['id'] . '\')" type="button" class="btn btn-sm btn-danger">Disable</button>
                            '.$class_button.'
                        </div>';
            if($row['is_active'] == 1) {
                $button = '<button type="button" class="m-auto d-block btn-sm btn btn-outline-success">Enable</button>';
            }else {
                $button = '<button type="button" class="m-auto d-block btn-sm btn btn-outline-danger">Disable</button>';
            }
            $fullname = $row['first_name'] . ' ' . $row['last_name'];
            $output .= '<tr>
                                <td><a href="http://localhost:3000/view/pages/admin/userInfor.php?id='.$row['id'].'">#'.$row['id'].'</a></td>
                                <td>'.$fullname.'</td>
                                <td>'.$row['address'].'</td>
                                <td>'.$row['phone'].'</td>
                                <td>'.$row['email'].'</td>
                                <td>'.$button.'</td>
                                <td>'.$row['created_at'].'</td>
                                <td>'.$action.'</td>
                            </tr>';
        }
        echo $output;
    }

    if($_POST['action'] && $_POST['action'] == 'disable') {
        $id =  $_POST['id'];
        $sql = "UPDATE customers SET is_active = 0 WHERE id = '$id'";

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
        $sql = "UPDATE customers SET is_active = 1 WHERE id = '$id'";

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


    if ($_POST['action'] && $_POST['action'] == 'grant_admin') {
        $id = $_POST['id'];
        
        // Update the `is_admin` field to 1
        $sql = "UPDATE customers SET is_admin = 1 WHERE id = '$id'";
    
        $data = Query($sql, db());
    
        if (count($data) == 0) {
            echo json_encode([
                'status' => 200,
                'message' => 'Customer granted admin privileges successfully.'
            ]);
        } else {
            echo json_encode([
                'status' => 400,
                'message' => 'There was an error granting admin privileges to the customer.'
            ]);
        }
    }
    
    
    if($_POST['action'] && $_POST['action'] == 'create') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];        

        if($username == '' || $password == '' || $fname == '' || $lname == '' || $address == '' || $phone == '' || $email == '') {
            echo json_encode([
                'status' => 400,
                'message' => 'All fields must be required'
            ]);
            return;
        }

        if(strlen($password) < 7){
            echo json_encode([
                'status' => 400,
                'message' => 'Password must be more than 6 characters '
            ]);
            return;
        }

        $pattern = '/^[a-zA-Z]+$/';
        // Biểu thức chính quy kiểm tra xem chuỗi chỉ bao gồm chữ thường và chữ hoa.

        if (!preg_match($pattern, $fname) || !preg_match($pattern, $lname)) {
            echo json_encode([
                'status' => 400,
                'message' => 'Firstname or Lastname must not contain numbers and special characters'
            ]);
            return;
        }
        
        $pattern = '/^(03|05|07|08|09)+([0-9]{8})$/';
        if (!preg_match($pattern, $phone)) {
            echo json_encode([
                'status' => 400,
                'message' => 'Phone number is invalid'
            ]);
            return;
        }

        $sql = "SELECT * FROM customers WHERE phone = '$phone'";
        $existPhone = Query($sql, db());
        if(count($existPhone) > 0) {
            echo json_encode([
                'status' => 400,
                'message' => 'Phone number existed'
            ]);
            return;
        }

        $sql = "SELECT * FROM customers WHERE user_name = '$username'";
        $existUsername = Query($sql, db());
        if(count($existUsername) > 0) {
            echo json_encode([
                'status' => 400,
                'message' => 'Username existed'
            ]);
            return;
        }

        $sql = "SELECT * FROM customers WHERE email = '$email'";
        $existEmail = Query($sql, db());
        if(count($existEmail) > 0) {
            echo json_encode([
                'status' => 400,
                'message' => 'Email existed'
            ]);
            return;
        }

        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        $sql = "INSERT INTO `Customers` (`user_name`, `password`, `first_name`, `last_name`, `address`, `phone`, `email`)
        VALUES ('$username', '$hashed_password', '$fname', '$lname', '$address', '$phone', '$email')";

        $result = QueryGetId($sql, db());

        $sql1 = "SELECT * FROM Customers WHERE id = '$result'";
        $data = Query($sql1, db());

        echo json_encode([
            'status' => 200,
            'message' => 'Successfully',
            'data' => $data[0]
        ]);
    }

    if($_POST['action'] && $_POST['action'] == 'login'){
        $email = $_POST['email']; 
        $password = $_POST['password'];

        if($password == ''|| $email == '') {
            echo json_encode([
                'status' => 400,
                'message' => 'All fields must be required'
            ]);
            return;
        }

        $sql = "SELECT * FROM customers WHERE email = '$email'";
        $existUsername = Query($sql, db());
        if(count($existUsername) == 0) {
            echo json_encode([
                'status' => 400,
                'message' => 'Email or password is incorrect'
            ]);
            return;
        }else{
            $hashed_password = $existUsername[0]['password'];
            if(password_verify($password, $hashed_password)){
                echo json_encode([
                    'status' => 200,
                    'message' => 'Successfully',
                    'data' => $existUsername
                ]);
            }else {
                echo json_encode([
                    'status' => 400,
                    'message' => 'Email or password is incorrect'
                ]);
            }
        }
    }

    if($_POST['action'] && $_POST['action'] == 'getbyid') {
        $id = $_POST['id'];
        $sql = "SELECT * FROM customers WHERE id = $id";
        $data = Query($sql, db());
        echo json_encode($data);
    }

    if($_POST['action'] && $_POST['action'] == 'update') {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];       
        $id = $_POST['id']; 

        if($fname == '' || $lname == '' || $address == '' || $phone == '' || $email == '') {
            echo json_encode([
                'status' => 400,
                'message' => 'All fields must be required'
            ]);
            return;
        }

        $pattern = '/^[a-zA-Z]+$/';
        // Biểu thức chính quy kiểm tra xem chuỗi chỉ bao gồm chữ thường và chữ hoa.

        if (!preg_match($pattern, $fname) || !preg_match($pattern, $lname)) {
            echo json_encode([
                'status' => 400,
                'message' => 'Firstname or Lastname must not contain numbers and special characters'
            ]);
            return;
        }
        
        $pattern = '/^(03|05|07|08|09)+([0-9]{8})$/';
        if (!preg_match($pattern, $phone)) {
            echo json_encode([
                'status' => 400,
                'message' => 'Phone number is invalid'
            ]);
            return;
        }

        $sql = "SELECT * FROM customers WHERE id = '$id'";
        $user = Query($sql, db());
        $sql = "SELECT * FROM customers WHERE phone = '$phone'";
        $existPhone = Query($sql, db());
        if($user[0]['phone'] != $phone && count($existPhone) != 0) {
            echo json_encode([
                'status' => 400,
                'message' => 'Phone number existed'
            ]);
            return;
        }

        $sql = "UPDATE `Customers`
                SET `first_name` = '$fname', `last_name` = '$lname', `address` = '$address', `phone` = '$phone', `email` = '$email'
                WHERE `id` = $id";

        $data = Query($sql, db());
        if(count($data) == 0) {
            echo json_encode([
                'status' => 200,
                'message' => ''
            ]);
        }else {
            echo json_encode([
                'status' => 400,
                'message' => 'Something went wrong'
            ]);
        }
    }

    if($_POST['action'] && $_POST['action'] == 'updatePassword') {
        $oldPassword = $_POST['oldPassword'];
        $newPassword = $_POST['newPassword'];
        $cfNewPassword = $_POST['cfNewPassword'];       
        $id = $_POST['id']; 

        if($oldPassword == '' || $newPassword == '' || $cfNewPassword == '') {
            echo json_encode([
                'status' => 400,
                'message' => 'All fields must be required'
            ]);
            return;
        }
        
        if(strlen($newPassword) < 7 || strlen($cfNewPassword) < 7){
            echo json_encode([
                'status' => 400,
                'message' => 'Password must be more than 6 characters '
            ]);
            return;
        }

        if($newPassword !== $cfNewPassword) {
            echo json_encode([
                'status' => 400,
                'message' => 'New password and cofirm new password are not in the same!'
            ]);
            return;
        }

        $sql = "SELECT * FROM customers WHERE id = '$id'";
        $user = Query($sql, db());
        if(!password_verify($oldPassword, $user[0]['password'])) {
            echo json_encode([
                'status' => 400,
                'message' => 'Old password is incorrect!'
            ]);
            return;
        }
        $new_hasded_password = password_hash($newPassword, PASSWORD_BCRYPT);
        $sql = "UPDATE `Customers`
                SET `password` = '$new_hasded_password'
                WHERE `id` = $id";

        $data = Query($sql, db());
        if(count($data) == 0) {
            echo json_encode([
                'status' => 200,
                'message' => 'Sucess'
            ]);
        }else {
            echo json_encode([
                'status' => 400,
                'message' => 'Something went wrong'
            ]);
        }
    }
?>