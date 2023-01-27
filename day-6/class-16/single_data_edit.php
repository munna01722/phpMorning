<!DOCTYPE html>
<html>
<head>
</head>
<body>


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
   //echo "Connection successfull ";
 }

 if(isset($_REQUEST['edit_id'])){
     $recv_id = $_REQUEST['edit_id'];

     $get_info =  $query = "SELECT * FROM user_info WHERE id = $recv_id";

     $select_info = mysqli_query($connection,$get_info);

     while ($row = mysqli_fetch_assoc($select_info)) {
      
?>
<form action="update.php" method="post">
    <input type="text" name="username" value="<?php echo $row['username']; ?>" placeholder="username">
    <input type="text" name="email" value="<?php echo $row['email']; ?>" placeholder="email">
    <input type="text" name="password" value="<?php echo $row['password']; ?>" placeholder="password">
    <input type="submit" name="submit" value="Update-data">
    <input type="hidden" name="hidden_update_id" value="<?php echo  $recv_id; ?>">
</form>


<?php


     }
 }

?>


</form>
</body>
</html>