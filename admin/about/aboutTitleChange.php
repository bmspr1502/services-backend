<?php
//include 'DB.php';
include(dirname(__FILE__) . '/../DB.php');
$title=$con->real_escape_string($_POST['text']);
$query="UPDATE `aboutus` SET `title`='$title' WHERE 1";
$result = $con->query($query);
if($result){
    setcookie('about', '', time()-3600, '/');
    echo stripslashes($title);
}
else{
    echo "unsuccess";
}
?>