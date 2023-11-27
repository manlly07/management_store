<?php
    include '../config.php';
    if($_POST['action'] && $_POST['action'] == 'view') {
        $sql = "SELECT * FROM Categories";
        $data = Query($sql, db());
        // $output = '';
        // foreach($data as $row) {
        //     $action = ' <div class="btn-group" role="group" aria-label="Basic example">
        //                     <button onclick="EnableCategory(\'' . $row['id'] . '\')" type="button" class="btn btn-sm btn-success mr-2">Enable</button>
        //                     <button onclick="DisableCategory(\'' . $row['id'] . '\')" type="button" class="btn btn-sm btn-danger mr-2">Disable</button>
        //                     <button onclick="EditCategory(\'' . $row['id'] . '\')" type="button" class="btn btn-sm btn-warning">Edit</button>
        //                 </div>';
        //     if($row['is_active'] == 1) {
        //         $button = '<button type="button" class="m-auto d-block btn-sm btn btn-outline-success">Enable</button>';
        //     }else {
        //         $button = '<button type="button" class="m-auto d-block btn-sm btn btn-outline-danger">Disable</button>';
        //     }
        //     $output .= '<tr>
        //                         <td>'.$row['id'].'</td>
        //                         <td>'.$row['name'].'</td>
        //                         <td>'.$row['description'].'</td>
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
        $sql = "UPDATE Categories SET is_active = 0 WHERE id = '$id'";

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
        $sql = "UPDATE Categories SET is_active = 1 WHERE id = '$id'";

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
        $categoryname = $_POST['categoryname'];
        $description = $_POST['description'];      

        if($categoryname == '' || $description == '') {
            echo json_encode([
                'status' => 400,
                'message' => 'All fields must be required'
            ]);
            return;
        }


        $sql = "SELECT * FROM Categories WHERE name = '$categoryname'";
        $existName = Query($sql, db());
        if(count($existName) > 0) {
            echo json_encode([
                'status' => 400,
                'message' => 'Category name existed'
            ]);
            return;
        }

        $sql = "INSERT INTO `Categories` (`name`, `description`)
                VALUES ('$categoryname', '$description')";

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

    if($_POST['action'] && $_POST['action'] == 'update') {
        $categoryname = $_POST['categoryname'];
        $description = $_POST['description'];      
        $id = $_POST['id'];

        if($categoryname == '' || $description == '') {
            echo json_encode([
                'status' => 400,
                'message' => 'All fields must be required'
            ]);
            return;
        }


        $sql = "SELECT * FROM Categories WHERE id = '$id'";
        $category = Query($sql, db());
        
        $sql = "SELECT * FROM Categories WHERE name = '$categoryname'";
        $existName = Query($sql, db());
        if(strcmp($category[0]['name'], $categoryname) != 0 && count($existName) != 0) {
            echo json_encode([
                'status' => 400,
                'message' => 'Category name existed'
            ]);
            return;
        }

        $sql = "UPDATE `Categories`
                SET `name` = '$categoryname', `description` = '$description'
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
                'message' => 'Something went wrong'
            ]);
        }
    }

    if($_POST['action'] && $_POST['action'] == 'getbyid') {
        $id = $_POST['id'];
        $sql = "SELECT * FROM Categories WHERE id = $id";
        $data = Query($sql, db());
        echo json_encode($data);
    }

?>