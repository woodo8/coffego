<?php
if ($result->num_rows > 0) {
            echo '<table class="table table-striped">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Order ID</th>';
            echo '<th>Customer Name</th>';
            echo '<th>Order Date</th>';
            echo '<th>Total Amount</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';

            while($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row["order_id"] . '</td>';
                echo '<td>' . $row["customer_name"] . '</td>';
                echo '<td>' . $row["order_date"] . '</td>';
                echo '<td>' . $row["total_amount"] . '</td>';
                echo '</tr>';
            }

            echo '</tbody>';
            echo '</table>';
        } else {
            echo '<div class="alert alert-warning" role="alert">No orders found.</div>';
        }
