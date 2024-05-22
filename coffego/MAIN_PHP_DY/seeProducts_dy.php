<?php include ("../DB_INCLUDE_DY/db_connect_dy.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>See Products</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../CSS_DY/styles_dy.css">
</head>
<body>
<?php include ("../MAIN_INCLUDE_DY/navbar_dy.php") ?>
<?php include ("../MAIN_INCLUDE_DY/intro_dy.php") ?>  
    <div class="container mt-5">
        <h2 class="mb-4">Products List</h2>
        <?php include ("../DB_WORK_DY/RS/resultSet_products.php") ?>    
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
