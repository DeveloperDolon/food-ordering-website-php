<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Home - Admin Panel</title>
</head>
<body>
    <header class="container">
        <?php
            include("./partials/menu.php");
        ?>
    </header>

    <main class="container admin-panel-wrapper">
        <h1 class="title">Welcome to the Admin Panel</h1>
        <p class="description">This is the main dashboard for the admin area.</p>

        <section class="stat-container">
            <div class="stat stat-customer">
                <h2>Total Customers</h2>
                <p>1234</p>
            </div>

            <div class="stat stat-revenue">
                <h2>Total Revenue</h2>
                <p>1234</p>
            </div>

            <div class="stat stat-products">
                <h2>Total Products</h2>
                <p>1234</p>
            </div>
        </section>
    </main>

    <?php include("./partials/footer.php") ?>
</body>
</html>