<!DOCTYPE html>
<html>
<head>
    <title>Login site</title>
</head>
<body>


<form action="login.php" method="post">

<input type="text" name="username" placeholder="username"><br><br>
<input type="text" name="email" placeholder="Enter Your Email"><br><br>
<input type="password" name="password" placeholder="password"><br><br>
<input type="submit" value="submit">
</form>




<?php
if (isset($_REQUEST['wrongpass'])){
    echo $_REQUEST['wrongpass'];
}




?>
</body>
</html>