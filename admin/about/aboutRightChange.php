<?php
//include 'DB.php';
include(dirname(__FILE__) . '/../DB.php');
$right=$con->real_escape_string($_POST['text']);
$query="UPDATE `aboutus` SET `rightcontent`='$right' WHERE 1";
$result = $con->query($query);
if($result){
   
    setcookie('about', '', time()-3600, '/');
    echo stripslashes($right);
}
else{
    echo "unsuccess";
}
?>