<?php
//include '../DB.php';
include(dirname(__FILE__) . '/../DB.php');
$image=$_POST['image'];
$query="UPDATE `aboutus` SET `image`='$image' WHERE 1";
$result = $con->query($query);
if($result){
    echo $image;
}
else{
    echo "unsuccess";
}
?>