<?php
  // Check if a product with the provided name exists
  $check_product_sql = "SELECT * FROM Products_DY WHERE name = '$name'";
  $check_product_result = $conn->query($check_product_sql);
  if ($check_product_result->num_rows > 0) {
      echo '<div class="alert alert-danger" role="alert">Error: Product with the provided name already exists.</div>';
      exit();
  }