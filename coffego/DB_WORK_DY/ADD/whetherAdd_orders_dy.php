
  <?php
  // Check if a customer with the provided ID exists
    $check_customer_sql = "SELECT * FROM Customers_DY WHERE customer_id = '$customer_id'";
    $check_customer_result = $conn->query($check_customer_sql);
    if ($check_customer_result->num_rows == 0) {
        echo '<div class="alert alert-danger" role="alert">Error: Customer with the provided ID does not exist.</div>';
        exit();
    }
?>