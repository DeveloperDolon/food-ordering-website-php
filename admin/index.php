
<?php 
    include("../config/constants.php");
?>

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


        <section class="add-user-container">

            <div class="add-user-title">
                <h2>Add User : </h2>
            </div>
            <form action="index.php" method="post">
                <div>
                    <label class="input-label" for="full-name">Full Name*</label> 
                    <br>
                    <input class="user-input" required type="text" name="full-name" placeholder="Enter full name">
                </div>

                <div>
                    <label class="input-label" for="username">Username*</label>
                    <br>
                    <input class="user-input" type="text" required name="username" placeholder="Enter username">
                </div>

                <div>
                    <label class="input-label" for="password">Password*</label>
                    <br>
                    <input class="user-input" required type="password" name="password" placeholder="Enter password">
                </div>
                
                <button type="submit" class="add-user-btn">Add</button>
            </form>
        </section>
    </main>

    <?php include("./partials/footer.php") ?>

    <?php
        // $fullName = "";
        // $username = "";
        // $password = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fullName = $_POST["full-name"];
            $username = $_POST["username"];
            $password = $_POST["password"];

            // Add user to the database
            $query = "INSERT INTO tbl_admin (full_name, username, password) VALUES ('$fullName', '$username', '$password')";
            $result = mysqli_query($conn, $query);

            if ($result) {
                echo "<script>alert('User added successfully')</script>";
            } else {
                echo "<script>alert('Failed to add user')</script>";
            }
        }

    ?>
</body>
</html>