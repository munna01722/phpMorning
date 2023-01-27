<?php

$userName = $_POST['username'];
$userEmail = $_POST['email'];
$userPassword = $_POST['password'];

 
 $countpass = strlen($userPassword) ;//koto sonkher  password  ta janar jonno 

 if (!($countpass >= 6 && $countpass <= 10)){
     header("location: index.php?wrongpass=Your enterd this passeord =  $userPassword."); //password  ki aca ta  dakhar jonno  ay  ta use kora hoyaca 
 }else{
     echo "perfact";
}

?>