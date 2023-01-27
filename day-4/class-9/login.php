<?php

$userName = $_REQUEST['username'];
$userEmail = $_REQUEST['email'];
$userPassword = $_REQUEST['password'];

$hast_format = "$2y$50$";
 $salt = "munnaisthaback";

 $conC = $hast_format . $salt;
 echo $userPassword;
 echo "<br>";
 echo crypt($userPassword, $conC);

?>