<?php
  // Check if the provided order ID exists
  $check_order_sql = "SELECT * FROM Orders_DY WHERE order_id = '$order_id'";
  $check_order_result = $conn->query($check_order_sql);
  if ($check_order_result->num_rows == 0) {
      echo '<div class="alert alert-danger" role="alert">Error: Order with the provided ID does not exist.</div>';
      exit();
  }
