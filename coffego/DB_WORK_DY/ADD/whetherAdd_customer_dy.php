<?php
// Check if a customer with the same email already exists
$check_sql = "SELECT * FROM Customers_DY WHERE email = '$email'";
$check_result = $conn->query($check_sql);
if ($check_result->num_rows > 0) {
echo '<div class="alert alert-danger" role="alert">Error: A customer with the same email already exists.</div>';
exit();
}
