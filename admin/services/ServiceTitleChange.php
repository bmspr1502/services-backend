<?php
//include 'DB.php';
include(dirname(__FILE__) . '/../DB.php');
$title=$con->real_escape_string($_POST['title']);
$id=$_POST['id'];
$query="UPDATE `servicepage` SET `title`='$title' WHERE id=$id";
$result = $con->query($query);
if($result){
   echo $id;
   setcookie('services', '', time()-3600, '/');
}
else{
    echo 'Title Not Updated';
}
?>