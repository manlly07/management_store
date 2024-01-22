<?php
    include '../config.php';
    if($_POST['action'] && $_POST['action'] == 'view') {
        $sql = "SELECT * FROM Customers";
        $data = Query($sql, db());
        $output = '';
        foreach($data as $row) {
            $is_admin = $row['is_admin'] == 0? 'Cấp Admin': 'Admin';
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

    if($_POST['action'] && $_POST['action'] == 'view1') {
        // $id =  $_POST['id'];
        $sql = "SELECT * FROM customers WHERE 1";

        $data = Query($sql, db());
        echo json_encode($data);
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
                'message' => 'Tất cả các trường phải điền'
            ]);
            return;
        }

        if(strlen($password) < 7){
            echo json_encode([
                'status' => 400,
                'message' => 'Mật khẩu phải trên 6 ký tự'
            ]);
            return;
        }

        $pattern = '/^[a-zA-Z]+$/';
        // Biểu thức chính quy kiểm tra xem chuỗi chỉ bao gồm chữ thường và chữ hoa.

        if (!preg_match($pattern, $fname) || !preg_match($pattern, $lname)) {
            echo json_encode([
                'status' => 400,
                'message' => 'Tên không được chứa số hoặc ký tự đặc biệt'
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

        $sql = "SELECT * FROM customers WHERE phone = '$phone'";
        $existPhone = Query($sql, db());
        if(count($existPhone) > 0) {
            echo json_encode([
                'status' => 400,
                'message' => 'Số điện thoại đã tồn tại'
            ]);
            return;
        }

        $sql = "SELECT * FROM customers WHERE user_name = '$username'";
        $existUsername = Query($sql, db());
        if(count($existUsername) > 0) {
            echo json_encode([
                'status' => 400,
                'message' => 'Username đã tồn tại'
            ]);
            return;
        }

        $sql = "SELECT * FROM customers WHERE email = '$email'";
        $existEmail = Query($sql, db());
        if(count($existEmail) > 0) {
            echo json_encode([
                'status' => 400,
                'message' => 'Email đã tồn tại'
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
                'message' => 'Tất cả các trường phải điền'
            ]);
            return;
        }

        $sql = "SELECT * FROM customers WHERE email = '$email'";
        $existUsername = Query($sql, db());

        if ($existUsername[0]['is_active'] == 0) {
            echo json_encode([
                'status' => 400,
                'message' => 'Tài khoản đã bị khoá, vui lòng đăng nhập tài khoản khác'
            ]);
            return;
        }

        if(count($existUsername) == 0) {
            echo json_encode([
                'status' => 400,
                'message' => 'Email hoặc mật khẩu không đúng'
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
                    'message' => 'Email hoặc mật khẩu không đúng'
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
        $oldAvt = $_POST['oldAvt'];

        if($fname == '' || $lname == '' || $address == '' || $phone == '' || $email == '') {
            echo json_encode([
                'status' => 400,
                'message' => 'Tất cả các trường phải điền'
            ]);
            return;
        }

        $pattern = '/^[a-zA-Z]+$/';
        // Biểu thức chính quy kiểm tra xem chuỗi chỉ bao gồm chữ thường và chữ hoa.

        if (!preg_match($pattern, $fname) || !preg_match($pattern, $lname)) {
            echo json_encode([
                'status' => 400,
                'message' => 'Tên không được chứa số hoặc ký tự đặc biệt'
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

        $sql = "SELECT * FROM customers WHERE id = '$id'";
        $user = Query($sql, db());
        $sql = "SELECT * FROM customers WHERE phone = '$phone'";
        $existPhone = Query($sql, db());
        if($user[0]['phone'] != $phone && count($existPhone) != 0) {
            echo json_encode([
                'status' => 400,
                'message' => 'Số điện thoại đã tồn tại'
            ]);
            return;
        }

        if(isset($_FILES['avt'])) {
            $image = $_FILES['avt'];
            $time = time();
            $filename = $time."-".$image['name'];
            $tmp_path = $image['tmp_name'];
            $destination = '../../uploads/avt/' . $filename;
            move_uploaded_file($tmp_path, $destination);
            $updateImage = ",avt='$filename'";

            if (file_exists('../../uploads/avt/'.$oldAvt)) {
                unlink('../../uploads/avt/'.$oldAvt);
            }
        }else {
            $updateImage = "";
        }

        $sql = "UPDATE `Customers`
                SET `first_name` = '$fname', `last_name` = '$lname', `address` = '$address', `phone` = '$phone', `email` = '$email'
                ".$updateImage ."
                WHERE `id` = '$id'";

        $data = Query($sql, db());
        if(count($data) == 0) {
            echo json_encode([
                'status' => 200,
                'message' => ''
            ]);
        }else {
            echo json_encode([
                'status' => 400,
                'message' => 'Máy chủ lỗi'
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
                'message' => 'Tất cả các trường phải điền'
            ]);
            return;
        }
        
        if(strlen($newPassword) < 7 || strlen($cfNewPassword) < 7){
            echo json_encode([
                'status' => 400,
                'message' => 'Mật khẩu phải trên 6 ký tự '
            ]);
            return;
        }

        if($newPassword !== $cfNewPassword) {
            echo json_encode([
                'status' => 400,
                'message' => 'Mật khẩu nhập lại không khớp với mật khẩu mới!'
            ]);
            return;
        }

        $sql = "SELECT * FROM customers WHERE id = '$id'";
        $user = Query($sql, db());
        if(!password_verify($oldPassword, $user[0]['password'])) {
            echo json_encode([
                'status' => 400,
                'message' => 'Mật khẩu cũ không đúng!'
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
                'message' => 'Máy chủ lỗi'
            ]);
        }
    }
?>