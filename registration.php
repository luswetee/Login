<?php

session_start();
header('location:index.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'friday_db');

$name=$_POST['rname'];
$pass=$_POST['rpass'];

$s="SELECT * FROM `users` WHERE username = '$name'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if ($num == 1) {
    echo"username already taken";
}else{
    $reg="INSERT INTO `users`(`username`, `password`) VALUES ('$name','$pass')";
    mysqli_query($con,$reg);
    echo"Registration successful";
}


