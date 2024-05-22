<?php
if ($result->num_rows > 0) {
    echo '<table class="table table-striped">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>Name</th>';
    echo '<th>Email</th>';
    echo '<th>Phone</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["customer_id"] . '</td>';
        echo '<td>' . $row["name"] . '</td>';
        echo '<td>' . $row["email"] . '</td>';
        echo '<td>' . $row["phone"] . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
} else {
    echo '<div class="alert alert-warning" role="alert">No customers found.</div>';
}
