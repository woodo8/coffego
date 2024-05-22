<?php
include "../DB_INCLUDE_DY/db_connect_dy.php";

include "../DB_WORK_DY/ADD/doAdd_payment_dy.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Payment</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../CSS_DY/styles_dy.css">

</head>
<body>
<?php include "../MAIN_INCLUDE_DY/navbar_dy.php" ?>
<?php include ("../MAIN_INCLUDE_DY/intro_dy.php") ?>  

    <div class="container mt-5 col-4">
        <h2 class="mb-4">Add New Payment</h2>
        <!-- Payment insertion form -->
        <form method="POST" action="">
            <div class="form-group">
                <label for="order_id">Select Order</label>
                <select class="form-control" id="order_id" name="order_id" required>
                    <?php foreach ($orders as $order): ?>
                        <option value="<?php echo $order['order_id']; ?>"><?php echo $order['customer_name'] . ' - Order ' . $order['order_id']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="text" class="form-control" id="amount" name="amount" required>
            </div>
            <div class="form-group">
                <label for="method">Payment Method</label>
                <select class="form-control" id="method" name="method" required>
                    <option value="visa">Visa</option>
                    <option value="master">Master</option>
                    <option value="paypal">PayPal</option>
                    <option value="google_pay">Google Pay</option>
                    <option value="apple_pay">Apple Pay</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Add Payment</button>
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>
