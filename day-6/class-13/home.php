<!DOCTYPE html>
<html>
<head>
    <title>Mysqli database</title>
</head>
<body>




<form action="home.php" method="post">
    <input type="text" name="username" placeholder="username"><br><br>
    <input type="text" name="email" placeholder="email"><br><br>
    <input type="text" name="password" placeholder="password"><br><br>
    <input type="submit" name="submit" placeholder="submit"><br>
</form>

</body>
</html>



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