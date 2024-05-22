<?php
if ($result->num_rows > 0) {
    echo '<table class="table table-striped">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Payment ID</th>';
    echo '<th>Order ID</th>';
    echo '<th>Payment Date</th>';
    echo '<th>Amount</th>';
    echo '<th>Method</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["payment_id"] . '</td>';
        echo '<td>' . $row["order_id"] . '</td>';
        echo '<td>' . $row["payment_date"] . '</td>';
        echo '<td>' . $row["amount"] . '</td>';
        echo '<td>' . $row["method"] . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
} else {
    echo '<div class="alert alert-warning" role="alert">No payments found.</div>';
}