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

    $rcv = $_REQUEST['id'];
    $rcv_file = $_REQUEST['profile_pik'];

  $query = "DELETE FROM user_info WHERE id =$rcv";

  
$ran_delete_query = mysqli_query($connection,$query);

if($ran_delete_query){
   unlink("profile_pik/$rcv_file");
    header("location:index.php?deleted");
 }



?>