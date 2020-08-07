<?php

    include( dirname(__FILE__) . '/../DB.php');
    $query='SELECT * FROM homepage';
    $result = $con->query($query);
    $row = $result->fetch_assoc();

if($row ){
    $title=$row['title'];
    $heading=$row['heading'];
    $content=$row['content'];
}


?>