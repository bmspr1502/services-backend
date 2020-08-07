<?php
//echo 'HELLO';
//include '../DB.php';
include(dirname(__FILE__).'/../DB.php');
$title=$con->real_escape_string($_POST['HomeTitle']);
//$title='serve';
$query="UPDATE `homepage` SET `title`='$title' WHERE 1";
$result = $con->query($query);
if($result){
    setcookie('home', '', time()-3600, '/');
    header('Location:../homepage.php');
}
else{
    echo 'Title Not Updated';
}
?>
