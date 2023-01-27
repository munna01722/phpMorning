



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


 while ($row = mysqli_fetch_assoc($adanprodan)){
    //Start

   // echo "<pre>";
   // print_r($row);
   // echo "<pre>";

    //End

    //variable  niya  kora jabe  ar  << echo "{$row['id']}"; >>  ay vabe nilao hobe  2 vabe  kora  jabe ,,,,
 $username = $row['username'];   
 $id = $row['id'];

 echo "$id";
 echo "<br>";
 echo "$username";
 echo "<br>";
 }
?>