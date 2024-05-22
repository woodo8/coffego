<?php

// Fetch all products
$products_sql = "SELECT * FROM Products_DY";
$products_result = $conn->query($products_sql);
$products = array();
if ($products_result->num_rows > 0) {
    while ($row = $products_result->fetch_assoc()) {
        $products[] = $row;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    include "./whetherAdd_product_dy.php";
    // Insert new product
    $insert_sql = "INSERT INTO Products_DY (name, price, description) VALUES ('$name', '$price', '$description')";
    if ($conn->query($insert_sql) === TRUE) {
        header("Location: addProduct_dy.php?success=1");
        exit();
    } else {
        echo '<div class="alert alert-danger" role="alert">Error: ' . $conn->error . '</div>';
    }
}