<?php


if(isset($_POST['refresh'])){
    unset($_COOKIE['ads1']);
    unset($_COOKIE['ads2']);
    setcookie('ads1', '', time()-3600);
    setcookie('ads2', '', time()-3600);
}

if(!isset($_COOKIE['ads1'])) {

include(dirname(__FILE__) . '/../DB.php');
$query = "SELECT * FROM contact WHERE VISIBILITY = 1 LIMIT 12";
$result = $con->query($query);
$i=0;
$ads = array();
$rows = $result->num_rows;
$min = (6<$rows)?6:$rows;
while($data = $result->fetch_assoc()){
    array_push($ads, $data);
    $i++;
    if($i==$min){
        setcookie('ads1', json_encode($ads), time()+86400);
        $ads = array();
    }else if($i==$rows){
        setcookie('ads2', json_encode($ads), time()+86400);

    }
}

$con->close();
header('Location: index.php');
}else{
$ads = json_decode($_COOKIE['ads1'], true);
if(isset($_COOKIE['ads2'])){
    $ads2 = json_decode($_COOKIE['ads2'], true); 
    $ads = array_merge($ads, $ads2);

    
}
}
?>