<?php
include "../DB_INCLUDE_DY/db_connect_dy.php";

include "../DB_WORK_DY/ADD/doAdd_orders_dy.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Order</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../CSS_DY/styles_dy.css">
 
</head>
<body>
<?php include "../MAIN_INCLUDE_DY/navbar_dy.php"?>
<?php include ("../MAIN_INCLUDE_DY/intro_dy.php") ?>  

    <div class="container mt-5 col-4">
        <h2 class="mb-4">Add New Order</h2>
        <!-- Order insertion form -->
        <form method="POST" action="">
            <div class="form-group">
                <label for="customer_id">Select Customer</label>
                <select class="form-control" id="customer_id" name="customer_id" required>
                    <?php foreach ($customers as $customer): ?>
                        <option value="<?php echo $customer['customer_id']; ?>"><?php echo $customer['name']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="total_amount">Total Amount</label>
                <input type="text" class="form-control" id="total_amount" name="total_amount" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Order</button>
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>
