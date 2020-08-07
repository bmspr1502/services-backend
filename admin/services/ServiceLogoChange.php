<?php
//include 'DB.php';
include(dirname(__FILE__) . '/../DB.php');
include 'servicedetails.php';

$id=$_POST['id'];
//echo $id;
$query="SELECT `logo` FROM `servicepage` WHERE id=$id";

$result = $con->query($query);
if(!$result){
    echo "Try Again";

}
else {
$row = $result->fetch_assoc();
$previousFilename=$row['logo'];
$previousFileLocation="../../services_logo/".$previousFilename;

$filename = $_FILES['file']['name'];



$location = "../../services_logo/".$filename;
$fileerror=$_FILES['file']['error'];
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($location,PATHINFO_EXTENSION));

/* Valid Extensions */
$valid_extensions = array("svg","png");
/* Check file extension */
if( !in_array(strtolower($imageFileType),$valid_extensions) ) {
   $uploadOk = 0;
}

if($uploadOk == 0){
   echo "Image must be in svg/png format";
}
else{
   if($fileerror===0){
    $filenamenew = uniqid('', true) . "." . $imageFileType;
    $NewLocation="../../services_logo/".$filenamenew;
      if(move_uploaded_file($_FILES['file']['tmp_name'],$NewLocation)){
        //$file=$_FILES['file']['tmp_name'];
        //echo $filename;
        //echo $filenamenew;
    
        $query1="UPDATE `servicepage` SET `logo`='$filenamenew' WHERE id='$id'";
        $result1 = $con->query($query1);
        
        //echo $id;
        //echo $result1;
        if($result1){
        //    echo "Successful,";
        //    echo $filenamenew;
        if(file_exists($previousFileLocation)){
           unlink($previousFileLocation);
        }
        //    $query="SELECT 'logo' FROM 'servicepage' WHERE 'id'";
        //    $result = $con->query($query);
        //     $row = $result->fetch_assoc();
        echo "Successful,";
        echo $filenamenew;
          //echo $row['logo'];
          //echo $result;

               
           
        }
        else{
          echo $result1;
        }
       } 
      else{
      echo "File not updated";
       }
      }
    else{
     echo $fileerror;
    }
}

}

































// $id=$_POST['id'];
// $logoName=$_POST['logoName'];
// $query="UPDATE `servicepage` SET `logo`='$logoName' WHERE id=$id";
// $result = $con->query($query);
// if($result){
//    echo $id;
// }
// else{
//     echo 'Title Not Updated';
// }
?>