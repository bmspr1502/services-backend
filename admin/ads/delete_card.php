<?php
if(isset($_POST['delete'])){
    $id = $_POST['id'];
    $image = $_POST['image'];
    include '../DB.php';
    $query = "DELETE FROM contact WHERE id = $id";

    if(file_exists('../uploaded_images/'.$image)){
        unlink('../uploaded_images/'.$image);
    }

    if($con->query($query)){
        echo "<script>";
        echo "alert('Data deleted successfully!!');";
        echo "window.location.href = 'card.php';";
        echo "</script>";
    } else{
        echo "Error: ". $con->error;
        echo "<script>";
        echo "alert('Oops, not deleted...try again!!');";
        echo "window.location.href = 'card.php';";
        echo "</script>";
    }
}