<?php
// Fetch payments data
$sql = "SELECT Payments_DY.*, Orders_DY.order_id FROM Payments_DY 
        JOIN Orders_DY ON Payments_DY.order_id = Orders_DY.order_id";
$result = $conn->query($sql);