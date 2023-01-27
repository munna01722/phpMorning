<?php

//DB Save Infotmation:
$dbname = "Md Munna";
$bdpassword = "12345";
 echo "<hr>";
//Login Input Information"
$user = $_POST['uesrname'];
$pass = $_POST['password'];


echo $user;
echo "<br>";
echo $pass;
echo "<hr>";

//Login information

if($dbname == $user && $bdpassword == $pass){
     echo "Login succesfull";
} else {
    echo "Not mach your username and  password";
}





?>