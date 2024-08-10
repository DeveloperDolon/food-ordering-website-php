<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <title>User management - Admin Portal</title>
</head>

<body>
    <header class="container">
        <?php
        include("./partials/menu.php");
        ?>
    </header>

    <section class="container">
        <h1 style="padding: 20px 0px;">User management</h1>

        <table class="table-of-users">
            <tr>
                <th>Full name</th>
                <th>Username</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>Dolon Chandra Roy</td>
                <td>dolonroy</td>
                <td class="action-row">
                    <button class="delete-user-btn">Delete</button>
                    <button class="edit-usr-btn">Edit</button>
                </td>
            </tr>
        </table>

        <div class="modal">
            <div class="modal-content">
                Hello world form bangladesh.
            </div>
        </div>
    </section>


    <script src="../js/userModal.js"></script>
</body>

</html>