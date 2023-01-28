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

//echo "<pre>"; print_r( $_POST ); echo "</pre>";
//echo "<pre>"; print_r( $_FILES ); echo "</pre>"; ay vabe  value ki ki paya  jai  ta  chak kora  dakhta hobe


if(isset($_POST['submit'])){
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $gander = isset($_POST['gander']) ? $_POST['gander'] : '';
    $country = isset($_POST['country']) ? $_POST['country'] : '';

    $rec_file = $_FILES['profile_pik'] ? $_FILES['profile_pik'] : '';
    $image_name =  $rec_file['name'];
    $image_tmp_name =  $rec_file['tmp_name'];

    //image uplodete 
    if(!empty($image_name)){
       $loc = "profile_pik/";
       if(move_uploaded_file($image_tmp_name,  $loc.$image_name)){
        
       }
    }else{
        echo "Your file is empty";
    }

$sql_command = "INSERT INTO user_info ( `profile_pik`, `username`, `email`, `password`, `gander`, `country`) VALUES ( '{$image_name}','{$username}', '{$email}', '{$password}', '{$gander}', '{$country}' )";

//$sql_command = "INSERT INTO `user_info`( `profile_pik`, `username`, `email`, `password`, `gander`, `country`) VALUES ('$image_name','$username','$email','$password','$gander','$country')";



//echo "<pre>"; print_r( $sql_command  ); echo "</pre>"; sql commden chack kora  dakher  jonno  

if (mysqli_query($connection, $sql_command)) {
     header("location:index.php");
    }else {
    echo "SQL ERROE" . mysqli_error($connection);
    }
}

?>