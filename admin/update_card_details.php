<?php
if(isset($_POST['update'])) {
    include 'DB.php';
    $id = intval($_POST['id']);
    $name = $con->real_escape_string($_POST["name"]);
    $email = $con->real_escape_string($_POST["email"]);
    $phone = $con->real_escape_string($_POST["phone"]);
    $product = $con->real_escape_string($_POST["product"]);
    $brand = $con->real_escape_string($_POST["brand"]);
    $description = $con->real_escape_string($_POST["description"]);
    $youtube = $con->real_escape_string($_POST["youtube"]);
    $website = $con->real_escape_string($_POST["website"]);
    /*
    $file = $_FILES["image"];

    $filename = $_FILES['image']['name'];
    $filetmp = $_FILES['image']['tmp_name'];
    $filesize = $_FILES['image']['size'];
    $fileerror = $_FILES['image']['error'];
    $filetype = $_FILES['image']['type'];

    $fileext = explode('.', $filename);
    $fileactualext = strtolower(end($fileext));

    $allowed = array('jpg', 'jpeg', 'png');
    if(in_array($fileactualext, $allowed)){
        if($fileerror === 0){
            $filenamenew = uniqid('', true).".".$fileactualext;
            $filedestination = 'uploaded_images/'.$filenamenew;
            move_uploaded_file($filetmp, $filedestination);
        }
        else{
            echo "There was an error uploading your file";
        }
    }
    else{
        echo "You cannot upload files of this type!";
    }
    */

    $query = "UPDATE contact SET name='$name', email = '$email', phone = '$phone', brand = '$brand', description = '$description', youtube = '$youtube', website = '$website' WHERE id = $id";
    if ($con->query($query)) {
        echo "<script>";
        echo "alert('Data updated successfully!!');";
        echo "window.location.href = 'card.php';";
        echo "</script>";
    } else {
        echo "Error: ". $con->error;
        echo "<script>";
        echo "alert('Oops, not updated...try again!!');";
        echo "window.location.href = 'card.php';";
        echo "</script>";
    }

    $con->close();
}

?>