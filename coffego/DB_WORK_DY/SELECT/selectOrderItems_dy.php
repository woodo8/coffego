<?php
$sql = "SELECT OrderItems_DY.*, Orders_DY.order_id, Products_DY.name AS product_name FROM OrderItems_DY 
JOIN Orders_DY ON OrderItems_DY.order_id = Orders_DY.order_id
JOIN Products_DY ON OrderItems_DY.product_id = Products_DY.product_id";
$result = $conn->query($sql);
