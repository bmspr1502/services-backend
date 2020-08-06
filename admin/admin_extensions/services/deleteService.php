<?php
//include 'DB.php';
include(dirname(__FILE__) . '/../DB.php');
$id=$_POST['id'];
$query="DELETE FROM `servicepage` WHERE id=$id";
$result = $con->query($query);
if($result){
    echo "deleted";
}
else{
    echo "not deleted";
}
?>