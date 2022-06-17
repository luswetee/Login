<?php
$host="localhost";
$user="root";
$password="";
$dbName="friday_db";
$connection=mysqli_connect($host,$user,$password,$dbName);
if (!isset($connection)){
    die("DB connection failed");
}
