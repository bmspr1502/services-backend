<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
    include './admin/DB.php';

    $name = $con->real_escape_string($_POST["name"]);
    $email = $con->real_escape_string($_POST["email"]);
    $phone = $con->real_escape_string($_POST["phone"]);
    $product = $con->real_escape_string($_POST["product"]);
    $brand = $con->real_escape_string($_POST["brand"]);
    $description = $con->real_escape_string($_POST["description"]);
    $youtube = $con->real_escape_string($_POST["youtube"]);
    $website = $con->real_escape_string($_POST["website"]);

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


    $query = "INSERT INTO contact (name,email,phone,image,product,brand,description,youtube,website)VALUES (?,?,?,?,?,?,?,?,?)";
    $statement= $con->prepare($query);
    if ($statement) {
        $statement->bind_param('sssssssss', $name, $email, $phone, $filenamenew, $product, $brand, $description, $youtube, $website);
        $statement->execute();
        echo "<script>";
        echo "alert('Message sent successfully!!');";
        echo "window.location.href = 'index.php';";
        echo "</script>";
    } else {
        echo "Error: ". $con->error;
        echo "<script>";
        echo "alert('Oops, message not sent...try again!!');";
        echo "window.location.href = 'contact.php';";
        echo "</script>";
    }

    mysqli_close($con);
}

?>