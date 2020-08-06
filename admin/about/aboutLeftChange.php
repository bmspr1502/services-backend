<?php
//include 'DB.php';
include(dirname(__FILE__) . '/../DB.php');
$left=$_POST['text'];
$query="UPDATE `aboutus` SET `leftcontent`='$left' WHERE 1";
$result = $con->query($query);
if($result){
    echo $left;
}
else{
    echo "unsuccess";
}
?>