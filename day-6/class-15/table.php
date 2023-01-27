<!DOCTYPE html>
<html>
<head>
    <title>Database  CRUD system</title>
</head>
<body>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>ACTION</th>
        </tr>
   </thead>

   <tbody>
    <tr>
        <th>1</th>
        <th>Munna</th>
        <th>munna@gmail.com</th>
        <th>abcde</th>
        <th><a href="#">Delete</a></th>
    </tr>
   </tbody>


</table>

</body>
</html>


<?php

$query = "DELETE FROM user_info WHERE id =  $recv";

$ran_delete_query = mysqli_query($connection,$query);

if($ran_delete_query){
  // header("location:index.php?deleted");
}
$_REQUEST['id'];
?>