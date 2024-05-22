<?php
if ($result->num_rows > 0) {
    echo '<table class="table table-striped">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Order Item ID</th>';
    echo '<th>Order ID</th>';
    echo '<th>Product Name</th>';
    echo '<th>Quantity</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["order_item_id"] . '</td>';
        echo '<td>' . $row["order_id"] . '</td>';
        echo '<td>' . $row["product_name"] . '</td>';
        echo '<td>' . $row["quantity"] . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
} else {
    echo '<div class="alert alert-warning" role="alert">No order items found.</div>';
}
