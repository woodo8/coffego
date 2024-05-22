<?php
// Fetch all orders with associated customer names
$orders_sql = "SELECT Orders_DY.order_id, Customers_DY.name AS customer_name FROM Orders_DY INNER JOIN Customers_DY ON Orders_DY.customer_id = Customers_DY.customer_id";
$orders_result = $conn->query($orders_sql);
$orders = array();
if ($orders_result->num_rows > 0) {
    while ($row = $orders_result->fetch_assoc()) {
        $orders[] = $row;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $order_id = $_POST['order_id'];
    $amount = $_POST['amount'];
    $method = $_POST['method'];

    include "./whetherAdd_payment_dy.php";
    // Insert new payment
    $insert_sql = "INSERT INTO Payments_DY (order_id, amount, method) VALUES ('$order_id', '$amount', '$method')";
    if ($conn->query($insert_sql) === TRUE) {
        header("Location: addPayments_dy.php?success=1");
        exit();
    } else {
        echo '<div class="alert alert-danger" role="alert">Error: ' . $conn->error . '</div>';
    }
}

$conn->close();