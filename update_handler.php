<?php
//CHeck if the update btn has been clicked
if (isset($_POST["btn_update"])){
    //Receive the updated data from the form
    $userid=$_POST["uid"];
    $updatedName=$_POST["uname"];
    $updatedPassword=$_POST["upass"];
    //connect to the database to return the data
    require_once "db_connection.php";
    //create the update query
    $updateQuery="UPDATE `users` SET `username`='$updatedName',`password`='$updatedPassword' WHERE id='$userid'";
    //finally execute the update query by use of mysqli_query() method
    $update=mysqli_query($connection,$updateQuery);
    //check if connection was successful
    if (isset($update)){
        //redirect users to users.php to see changes
        header("location:users.php");
    }else{
        echo "updating failed";
    }
}
