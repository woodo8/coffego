<?php
 $sql = "SELECT Orders_DY.*, Customers_DY.name AS customer_name FROM Orders_DY 
 JOIN Customers_DY ON Orders_DY.customer_id = Customers_DY.customer_id";
$result = $conn->query($sql);