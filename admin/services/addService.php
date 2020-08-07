<?php
//include 'DB.php';
include(dirname(__FILE__) . '/../DB.php');
//$logo=$_POST["logo"];

$title=$_POST["title"];
$descr=$_POST["desc"];
$filename=$_FILES['file']['name'];

$location = "../../services_logo/".$filename;
$fileerror=$_FILES['file']['error'];
$uploadOk = 1;
$imageFileType = pathinfo($location,PATHINFO_EXTENSION);


$valid_extensions = array("svg","png");

if( !in_array(strtolower($imageFileType),$valid_extensions) ) {
   $uploadOk = 0;
}

if($uploadOk == 0){
   echo "Image must be in svg/png format";
}
else{
   if($fileerror===0){
    $filenamenew = uniqid('', true) . "." . $imageFileType;
    $NewLocation=$location = "../../services_logo/".$filenamenew;
      if(move_uploaded_file($_FILES['file']['tmp_name'],$NewLocation)){
        $file=$_FILES['file']['tmp_name'];
        //echo $filename;
    
        $query="INSERT INTO `servicepage`(`logo`, `title`, `description`) VALUES('$filenamenew','$title','$descr')";
        $result = $con->query($query);
        if($result){
           echo "Successful,";
           setcookie('services', '', time()-3600, '/');
           //echo $filenamenew;
           //unlink($previousFileLocation);
        }
        else{
          echo $result;
        }
       } 
      else{
      echo "service not updated";
       }
      }
    else{
     echo $fileerror;
    }
}
?>







<