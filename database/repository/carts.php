<?php
include '../config.php';

if ($_POST['action'] && $_POST['action'] == 'view') {
    $id = $_POST['id'];
    $sql = "SELECT c.*, p.name AS product_name, p.image AS image ,p.price FROM Carts c 
              INNER JOIN Products p ON c.product_id = p.id
              WHERE c.customer_id = $id";
    $data = Query($sql, db());

    echo json_encode($data);
}

if ($_POST['action'] && $_POST['action'] == 'add') {
    $customer_id = $_POST['customer_id'];
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    // Check if product already exists in cart
    $sql = "SELECT * FROM Carts WHERE customer_id = '$customer_id' AND product_id = '$product_id'";
    $check_data = Query($sql, db());

    if (count($check_data) > 0) {
        // Update existing quantity
        $existing_quantity = $check_data[0]['quantity'];
        $new_quantity = $existing_quantity + $quantity;

        $sql = "UPDATE Carts SET quantity = '$new_quantity' WHERE customer_id = '$customer_id' AND product_id = '$product_id'";
        $data = Query($sql, db());

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
    } else {
        // Add new product to cart
        $sql = "INSERT INTO Carts (customer_id, product_id, quantity) VALUES ('$customer_id', '$product_id', '$quantity')";
        $data = Query($sql, db());

        if (count($data) == 0) {
            echo json_encode([
                'status' => 200,
                'message' => 'Product added to cart successfully'
            ]);
        } else {
            echo json_encode([
                'status' => 400,
                'message' => 'Máy chủ lỗi while adding product to cart'
            ]);
        }
    }
}

if ($_POST['action'] && $_POST['action'] == 'update') {
    $id = $_POST['id'];
    $quantity = $_POST['quantity'];

    $sql = "UPDATE Carts SET quantity = '$quantity' WHERE id = '$id'";
    $data = Query($sql, db());

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

if ($_POST['action'] && $_POST['action'] == 'delete') {
    $id = $_POST['id'];

    $sql = "DELETE FROM Carts WHERE id = '$id'";
    $data = Query($sql, db());

    if (count($data) == 0) {
        echo json_encode([
            'status' => 200,
            'message' => 'Product removed from cart successfully'
        ]);
    } else {
        echo json_encode([
            'status' => 400,
            'message' => 'Máy chủ lỗi while removing product from cart'
        ]);
    }
}
