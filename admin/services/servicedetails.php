<?php

//include 'DB.php';
include(dirname(__FILE__) . '/../DB.php');
//include 'getServiceDetails.php';
$query='SELECT * FROM servicepage';
$result = $con->query($query);





$values=array();
while($row = $result->fetch_assoc()){
    $values[]=$row;
    
}
$len=count($values);
?>