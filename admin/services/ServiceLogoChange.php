<?php
//include 'DB.php';
include(dirname(__FILE__) . '/../DB.php');
$id=$_POST['id'];
$logoName=$_POST['logoName'];
$query="UPDATE `servicepage` SET `logo`='$logoName' WHERE id=$id";
$result = $con->query($query);
if($result){
   echo $id;
}
else{
    echo 'Title Not Updated';
}
?>