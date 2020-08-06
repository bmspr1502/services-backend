<?php
//echo 'HELLO';
//include 'DB.php';
include(dirname(__FILE__) . '/../DB.php');
$heading=$_POST['HomeHeading'];
//$title='serve';
$query="UPDATE `homepage` SET `heading`='$heading' WHERE 1";
$result = $con->query($query);
//echo $result;
if($result){
    header('Location:../homepage.php');
}
else{
    echo 'Title Not Updated';
}
?>
