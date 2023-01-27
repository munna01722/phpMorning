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

 $count = mysqli_num_rows($adanprodan);

 if ($count > 0){

 while ($row = mysqli_fetch_assoc($adanprodan)){
    //Start

   // echo "<pre>";
   // print_r($row);
   // echo "<pre>";

    //End

    //variable  niya  kora jabe  ar variable na nile.. << echo "{$row['id']}"; >>  ay vabe nilao hobe  2 vabe  kora  jabe ,,,,
 $username = $row['username'];   
 $id = $row['id'];

 echo "$id";
 echo "<br>";
 echo "$username";
 echo "<br>";
 }

 // echo "$count"; database  a koyta line  aca  mane<< ID >> ta  dakhar jonno  ay ta use  kora  hoyaca 
 
}else{
    echo "You don't have any data on your database.";
}
?>