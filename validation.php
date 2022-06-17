<?php

session_start();

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'friday_db');

$name = $_POST['lname'];
$pass = $_POST['lpass'];

$s = "SELECT * FROM `users` WHERE username= '$name'&& password='$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1) {
    $_SESSION['username']=$name;
    header('location:home.php');
} else {
    header('location:index.php');
}

