<?php
// Fetch all customers
$customers_sql = "SELECT * FROM Customers_DY";
$customers_result = $conn->query($customers_sql);
$customers = array();
if ($customers_result->num_rows > 0) {
    while ($row = $customers_result->fetch_assoc()) {
        $customers[] = $row;
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_id = $_POST['customer_id'];
    $total_amount = $_POST['total_amount'];

    include "./whetherAdd_orders_dy.php";

    // Insert new order
    $insert_sql = "INSERT INTO Orders_DY (customer_id, total_amount) VALUES ('$customer_id', '$total_amount')";
    if ($conn->query($insert_sql) === TRUE) {
        header("Location: addOrders_dy.php?success=1");
        exit();
    } else {
        echo '<div class="alert alert-danger" role="alert">Error: ' . $conn->error . '</div>';
    }
}

$conn->close();