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

  echo $rcv = $_REQUEST['id'];


  $query = "DELETE FROM user_info WHERE id =$rcv";

  
$ran_delete_query = mysqli_query($connection,$query);

if($ran_delete_query){
    header("location:index.php?deleted");
 }



?>