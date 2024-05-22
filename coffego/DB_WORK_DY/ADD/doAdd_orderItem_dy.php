<?php
include "../DB_INCLUDE_DY/db_connect_dy.php";

// Fetch all orders and products
$orders_sql = "SELECT * FROM Orders_DY";
$orders_result = $conn->query($orders_sql);
$orders = array();
if ($orders_result->num_rows > 0) {
    while ($row = $orders_result->fetch_assoc()) {
        $orders[] = $row;
    }
}

$products_sql = "SELECT * FROM Products_DY";
$products_result = $conn->query($products_sql);
$products = array();
if ($products_result->num_rows > 0) {
    while ($row = $products_result->fetch_assoc()) {
        $products[] = $row;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $order_id = $_POST['order_id'];
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    include "./whetherAdd_orderItem_dy.php";
    // Insert new order item
    $insert_sql = "INSERT INTO OrderItems_DY (order_id, product_id, quantity) VALUES ('$order_id', '$product_id', '$quantity')";
    if ($conn->query($insert_sql) === TRUE) {
        header("Location: addOrderItem_dy.php?success=1");
        exit();
    } else {
        echo '<div class="alert alert-danger" role="alert">Error: ' . $conn->error . '</div>';
    }
}

$conn->close();
