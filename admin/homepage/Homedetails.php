<?php
//include '../DB.php';
include( dirname(__FILE__) . '/../DB.php');
$query='SELECT * FROM homepage';
$result = $con->query($query);
if($row = $result->fetch_assoc()){
    $title=$row['title'];
    $heading=$row['heading'];
    $content=$row['content'];
}


?>