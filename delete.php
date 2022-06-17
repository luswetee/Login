<?php
if (isset($_GET["lname"])){
    $username=$_GET["lname"];
    require_once "db_connection.php";
    $deleteQuery="DELETE FROM `users` WHERE username='$username'";
    $delete=mysqli_query($connection,$deleteQuery);
    if (isset($delete)){
        header("location:users.php");
    }else{
        echo "deletion failed";
    }
}
