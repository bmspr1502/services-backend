<?php
//include 'DB.php';
include(dirname(__FILE__) . '/../DB.php');
$descr=$con->real_escape_string($_POST['descr']);
$id=$_POST['id'];
$query="UPDATE `servicepage` SET `description`='$descr' WHERE id=$id";
$result = $con->query($query);
if($result){
  
   setcookie('services', '', time()-3600, '/');
   echo $id;
}
else{
    echo 'Description Not Updated';
}
?>