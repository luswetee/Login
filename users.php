<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
</head>
<body>
<h1 class="text-info text-center">All Users</h1>
<table class="table table-dark table-hover">
    <a class="btn btn-outline-secondary btn-block" href="index.php">Add user</a>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>
    <?php
    require_once "db_connection.php";
    $selectQuery="SELECT * FROM `users` WHERE 1";
    $users=mysqli_query($connection,$selectQuery);
    foreach ($users as $user){
        $name=$user["username"];
        $password=$user["password"];

        echo "<tr>
                        <td>$name</td>
                        <td>$password</td>
                        <td><a class='btn btn-danger' href='delete.php?lname=$name'>Delete</a></td>
                        <td><a class='btn btn-danger' href='update.php?lname=$name&lpass=$password'>Update</a></td>
                    </tr>";
    }
    ?>
</table>
<a href="home.php">Back</a>
</body>
</html>
