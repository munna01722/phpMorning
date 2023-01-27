
<pre>
<?php



$pro = $_FILES['profile'];
 $name = $pro['name'];
 $type = $pro['type'];
  $tmp_name = $pro['tmp_name'];


   $size = $pro['size'];
   //echo floor($size/1000)."KB";
    ($size/1000). "KB";
 
    if(!empty($name)){
        $loc = "uploads-img/";

        if(move_uploaded_file($tmp_name, $loc.$name)){
            $img_show = $loc.$name;
            echo "File  upload successfull.<br>";
            echo "<img src='$img_show' width='200' height='200'>";
        } else {
            echo "Failed";
        }
    }else{
        echo "File not found.....";
    }

?>
</pre>