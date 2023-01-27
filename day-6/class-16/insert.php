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

if(isset($_POST)){
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

$sql_command = "INSERT INTO user_info (id, username, email, password) VALUES (NULL, '{$username}', '{$email}', '{$password}')";


if (mysqli_query($connection, $sql_command)) {
    //echo "User created successfully";
    }else {
    echo "SQL ERROE" . mysqli_error($connection);
    }
}

?>