<?php
//include 'DB.php';
include(dirname(__FILE__) . '/../DB.php');
$left=$con->real_escape_string($_POST['text']);
$query="UPDATE `aboutus` SET `leftcontent`='$left' WHERE 1";
$result = $con->query($query);
if($result){
    
    setcookie('about', '', time()-3600, '/');
    echo stripslashes($left);
}
else{
    echo "unsuccess";
}
?>