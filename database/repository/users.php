<?php
    include '../config.php';
    if($_POST['action'] && $_POST['action'] == 'view') {
        $sql = "SELECT * FROM Customers";
        $data = Query($sql, db());
        $output = '';
        $action = ' <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-sm btn-success mr-2">Enable</button>
                        <button type="button" class="btn btn-sm btn-danger">Disable</button>
                    </div>';
        foreach($data as $row) {
            if($row['is_active'] == 1) {
                $button = '<button type="button" class="m-auto d-block btn-sm btn btn-outline-success">Active</button>';
            }
            $output .= '<tr>
                                <td>'.$row['name'].'</td>
                                <td>'.$row['address'].'</td>
                                <td>'.$row['phone'].'</td>
                                <td>'.$row['phone'].'</td>
                                <td>'.$button.'</td>
                                <td>'.$row['created_at'].'</td>
                                <td>'.$action.'</td>
                            </tr>';
        }
        echo $output;
    }
?>