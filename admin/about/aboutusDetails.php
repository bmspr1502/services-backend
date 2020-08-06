<?php
//include 'DB.php';
include(dirname(__FILE__) . '/../DB.php');
$query="SELECT * FROM `aboutus` WHERE 1";
$result = $con->query($query);
$row = $result->fetch_assoc();
//echo $row['title'];

?>