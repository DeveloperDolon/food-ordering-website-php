<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/admin.css">
    <title>Admin panel menus</title>
</head>

<body>

    <?php
        $currentRoute = $_SERVER['REQUEST_URI'];
    ?>

    <ul class="menu-wrapper">
        <li class="<?php echo $currentRoute === "/phpLearning/food-order-website/admin/index.php" ? "menu-selected" : "menu" ?>"><a href="/phpLearning/food-order-website/admin/index.php">Home</a></li>

        <li class="<?php echo $currentRoute === "/phpLearning/food-order-website/admin/orders.php" ? "menu-selected" : "menu" ?>"><a href="/phpLearning/food-order-website/admin/orders.php">Orders</a></li>

        <li class="<?php echo $currentRoute === "/phpLearning/food-order-website/admin/products.php" ? "menu-selected" : "menu" ?>"><a href="/phpLearning/food-order-website/admin/products.php">Products</a></li>
    </ul>
</body>

</html>