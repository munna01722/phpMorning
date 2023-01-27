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

    if(isset($_REQUEST['deleted'])){
        echo "<font color='green'>Data Update</font>";
    }
        
    
    //php ay  ay khane   close  kora hoyaca 
?> 
  <table style="width:100%">
    <thead>
        <tr>
           <th>Serial No..</th>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>ACTION</th>
        </tr>
   </thead>
<?php
//php   aber  soru kora  hoyaca ,  ay  khane  php vag  korar karon  ta  hoccha , tabil  ar  hadding tar jonno
$serial_namber =0; 
while ($row = mysqli_fetch_assoc($adanprodan)){
    
    $db_id = $row['id'];
    $username = $row['username'];
    $email = $row['email'];
    $password = $row['password'];
    $serial_namber++;

    //aber  php close kora  hoyaca
?>
   
   <tbody>
        <tr>
            <td><?php echo $serial_namber; ?></td>
            <td><?php echo $db_id; ?></td>
            <td><?php echo $username; ?></td>
            <td><?php echo $email; ?></t>
            <td><?php echo $password; ?></td>
            <td> <a href="single_data_edit.php?edit_id=<?php echo  $db_id?>">Edit</a> -- <a href="delete.php?id=<?php echo $db_id?>">Delete</a></td>
        </tr>
   </tbody>


<?php //ay khane  aber    php    open  kora  hoyaca 
 }
 ?>
</table>
 <?php
 
}else{
    echo "You don't have any data on your database.";
}
?>