<?php
//include 'DB.php';
include(dirname(__FILE__) . '/../DB.php');
$title=$_POST['text'];
$query="UPDATE `aboutus` SET `title`='$title' WHERE 1";
$result = $con->query($query);
if($result){
    echo $title;
}
else{
    echo "unsuccess";
}
?>