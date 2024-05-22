<?php
if ($result->num_rows > 0) {
            echo '<table class="table table-striped">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Product ID</th>';
            echo '<th>Name</th>';
            echo '<th>Price</th>';
            echo '<th>Description</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';

            while($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row["product_id"] . '</td>';
                echo '<td>' . $row["name"] . '</td>';
                echo '<td>' . $row["price"] . '</td>';
                echo '<td>' . $row["description"] . '</td>';
                echo '</tr>';
            }

            echo '</tbody>';
            echo '</table>';
        } else {
            echo '<div class="alert alert-warning" role="alert">No products found.</div>';
        }