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
    if(isset($file)) {
        $filename = $_FILES['image']['name'];
        $filetmp = $_FILES['image']['tmp_name'];
        $filesize = $_FILES['image']['size'];
        $fileerror = $_FILES['image']['error'];
        $filetype = $_FILES['image']['type'];

        $fileext = explode('.', $filename);
        $fileactualext = strtolower(end($fileext));

        $allowed = array('jpg', 'jpeg', 'png');
        if (in_array($fileactualext, $allowed)) {
            if ($fileerror === 0) {
                $filenamenew = uniqid('', true) . "." . $fileactualext;
                $filedestination = 'uploaded_images/' . $filenamenew;
                move_uploaded_file($filetmp, $filedestination);
            } else {
                echo "<script>";
                echo "alert('Image not uploaded...try again!!');";
                echo "window.location.href = 'contact.php';";
                echo "</script>";
                die('Not Uploaded');
            }
        } else {
            echo "<script>";
            echo "alert('File type not supported...try again!!');";
            echo "window.location.href = 'contact.php';";
            echo "</script>";
            die('Not Uploaded');
        }
    }

    $query = "INSERT INTO contact (name,email,phone,image,product,brand,description,youtube,website)" .
            " VALUES ('$name', '$email', '$phone', '$filenamenew', '$product', '$brand', '$description', '$youtube', '$website')";
    if ($con->query($query)) {
        echo "<script>";
        echo "alert('Details sent to database successfully!!');";
        echo "window.location.href = 'index.php';";
        echo "</script>";
    } else {
        echo "Error: ". $con->error;
        echo "<script>";
        echo "alert('Oops, details not sent, email already exists...try again!!');";
        echo "window.location.href = 'contact.php';";
        echo "</script>";
    }

    $con->close();
}

?>