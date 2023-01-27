<?php

$user = $_POST['username'];
$pass = $_POST['password'];

if($user == "google"){
 header("location: show.php?name=$user");
}

// if($user=="google"){
//    echo header('location: https://www.google.com');
// } elseif($user == "facebook"){
//     echo header('location: https://www.facebook.com');
// } else{
//     echo "You didn't redirect";
// }



?>