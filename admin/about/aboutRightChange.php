<?php
//include 'DB.php';
include(dirname(__FILE__) . '/../DB.php');
$right=$_POST['text'];
$query="UPDATE `aboutus` SET `rightcontent`='$right' WHERE 1";
$result = $con->query($query);
if($result){
    echo $right;
}
else{
    echo "unsuccess";
}
?>