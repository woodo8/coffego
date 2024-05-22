<?php
// Check if the provided order and product IDs exist
    $check_order_sql = "SELECT * FROM Orders_DY WHERE order_id = '$order_id'";
    $check_order_result = $conn->query($check_order_sql);
    $check_product_sql = "SELECT * FROM Products_DY WHERE product_id = '$product_id'";
    $check_product_result = $conn->query($check_product_sql);
    if ($check_order_result->num_rows == 0 || $check_product_result->num_rows == 0) {
        echo '<div class="alert alert-danger" role="alert">Error: Order or product with the provided IDs does not exist.</div>';
        exit();
    }
