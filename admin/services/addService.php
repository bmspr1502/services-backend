<?php
//include 'DB.php';
include(dirname(__FILE__) . '/../DB.php');
$logo=$_POST["logo"];
$title=$_POST["title"];
$descr=$_POST["descr"];
$query="INSERT INTO `servicepage`(`logo`, `title`, `description`) VALUES('$logo','$title','$descr')";
$result = $con->query($query);
if($result){
    echo "successful";
}
else{
    echo "$result";
}