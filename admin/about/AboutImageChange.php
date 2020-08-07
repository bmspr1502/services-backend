<?php
//include '../DB.php';
include(dirname(__FILE__) . '/../DB.php');
include 'aboutusDetails.php';




$previousFilename=$row['image'];
$previousFileLocation="../../about_usImage/".$previousFilename;

$filename = $_FILES['file']['name'];



$location = "../../about_usImage/".$filename;
$fileerror=$_FILES['file']['error'];
$uploadOk = 1;
$imageFileType = pathinfo($location,PATHINFO_EXTENSION);

/* Valid Extensions */
$valid_extensions = array("jpg","jpeg","png");
/* Check file extension */
if( !in_array(strtolower($imageFileType),$valid_extensions) ) {
   $uploadOk = 0;
}

if($uploadOk == 0){
   echo "Image must be in jpg/jpeg/png format";
}
else{
   if($fileerror===0){
    $filenamenew = uniqid('', true) . "." . $imageFileType;
    $NewLocation=$location = "../../about_usImage/".$filenamenew;
      if(move_uploaded_file($_FILES['file']['tmp_name'],$NewLocation)){
        $file=$_FILES['file']['tmp_name'];
        //echo $filename;
    
        $query="UPDATE `aboutus` SET `image`='$filenamenew' WHERE 1";
        $result = $con->query($query);
        if($result){
           echo "Successful,";
           echo $filenamenew;
           unlink($previousFileLocation);
        }
        else{
          echo $result;
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
?>