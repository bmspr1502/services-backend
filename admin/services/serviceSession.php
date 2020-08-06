<?php
//include 'DB.php';
include(dirname(__FILE__) . '/../DB.php');
// $dummy=array('qwert'=>$_POST['id']);
// echo json_encode($dummy);
//echo $_POST['id'];

if(isset($_POST['id'])){

    $serviceId=$_POST['id'];
    //echo $serviceId;
    $query="SELECT * FROM servicepage WHERE id='$serviceId'";
    $result = $con->query($query);
   //echo $result;
   $row = $result->fetch_assoc();
    //echo $row['id'];
    //echo $row['title'];
    $data=array(
        'id'=>$row['id'],
        'logo'=>$row['logo'],
        'title'=>$row['title'],
        'description'=>$row['description'],
    );
    echo json_encode($data);
    

}
?>



