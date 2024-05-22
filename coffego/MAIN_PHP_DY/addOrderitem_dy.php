<?php
include "../DB_INCLUDE_DY/db_connect_dy.php";
include "../DB_WORK_DY/ADD/doAdd_orderItem_dy.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Order Item</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../CSS_DY/styles_dy.css">

</head>
<body>
<?php include "../MAIN_INCLUDE_DY/navbar_dy.php" ?>
<?php include ("../MAIN_INCLUDE_DY/intro_dy.php") ?>  

    <div class="container mt-5 col-4">
        <h2 class="mb-4">Add New Order Item</h2>
        <!-- Order item insertion form -->
        <form method="POST" action="">
            <div class="form-group">
                <label for="order_id">Select Order</label>
                <select class="form-control" id="order_id" name="order_id" required>
                    <?php foreach ($orders as $order): ?>
                        <option value="<?php echo $order['order_id']; ?>"><?php echo $order['order_id']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="product_id">Select Product</label>
                <select class="form-control" id="product_id" name="product_id" required>
                    <?php foreach ($products as $product): ?>
                        <option value="<?php echo $product['product_id']; ?>"><?php echo $product['name']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="number" class="form-control" id="quantity" name="quantity" min="1" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Order Item</button>
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>
