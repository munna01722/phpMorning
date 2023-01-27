<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "user";


$connection = mysqli_connect($server, $user, $password, $database);

//chech connection

 if (!$connection) {
    die("Total Fail" . mysqli_connect_error());
 } else {
   //echo "Connection successfull ";
 }

if(isset($_REQUEST['submit'])){
   $user = $_REQUEST['username'];
   $email = $_REQUEST['email'];
   $pass = $_REQUEST['password'];

   $hidden_id = $_REQUEST['hidden_update_id'];


$update_query = "UPDATE user_info SET username='$user', email='$email', password=' $pass' WHERE id=$hidden_id";

$fainal_update_query =  mysqli_query($connection,$update_query);

if($fainal_update_query){
   header("location:index.php?update");
}
}


?>