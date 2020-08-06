<?php
//echo 'HELLO';
//include '../DB.php';
include(dirname(__FILE__).'/../DB.php');
$title=$_POST['HomeTitle'];
//$title='serve';
$query="UPDATE `homepage` SET `title`='$title' WHERE 1";
$result = $con->query($query);
if($result){
    header('Location:../homepage.php');
}
else{
    echo 'Title Not Updated';
}
?>
