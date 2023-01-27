



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
   // echo "Connection successfull ";
 }

 $query = "SELECT * FROM user_info";

 $adanprodan = mysqli_query($connection,$query);


 while ($row = mysqli_fetch_row($adanprodan)){
    echo "<pre>";
    print_r($row);
    echo "<pre>";
 }
?>