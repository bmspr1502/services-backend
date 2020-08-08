<?php
//include 'DB.php';
include(dirname(__FILE__) . '/../DB.php');
$id=$_POST['id'];
$ImageQuery="SELECT `logo` FROM `servicepage` WHERE id=$id";
$result1=$con->query($ImageQuery);
$row=$result1->fetch_assoc();
$imageFile=$row['logo'];
$location="../../services_logo".$imageFile;
if(file_exists($location)){
    unlink($location);
}
$query="DELETE FROM `servicepage` WHERE id=$id";
$result = $con->query($query);
if($result){
    setcookie('services', '', time()-3600, '/');
    echo "deleted";
    
}
else{
    echo "not deleted";
}
?>