<?php
include "../DB_INCLUDE_DY/db_connect_dy.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    include ("./whetherAdd_customer_dy.php");

    // Insert new customer
    $insert_sql = "INSERT INTO Customers_DY (name, email, phone) VALUES ('$name', '$email', '$phone')";
    if ($conn->query($insert_sql) === TRUE) {
        header("Location: addCustomers_dy.php?success=1");
        exit();
    } else {
        echo '<div class="alert alert-danger" role="alert">Error: ' . $conn->error . '</div>';
    }
}

$conn->close();
