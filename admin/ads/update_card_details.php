<?php
if(isset($_POST['update'])) {
    include(dirname(__FILE__) . '/../DB.php');
    $id = intval($_POST['id']);
    $name = $con->real_escape_string($_POST["name"]);
    $phone = $con->real_escape_string($_POST["phone"]);
    $product = $con->real_escape_string($_POST["product"]);
    $brand = $con->real_escape_string($_POST["brand"]);
    $description = $con->real_escape_string($_POST["description"]);
    $youtube = $con->real_escape_string($_POST["youtube"]);
    $website = $con->real_escape_string($_POST["website"]);
    $earlier_image = $_POST['earlier_image'];

    $query = "UPDATE contact SET name='$name', phone = '$phone', brand = '$brand', description = '$description', " .
            "youtube = '$youtube', website = '$website' WHERE id = $id";
    $file = $_FILES["image"];
    
    if(is_uploaded_file($file['tmp_name'])) {
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
                $filedestination = '../../uploaded_images/' . $filenamenew;
                if(move_uploaded_file($filetmp, $filedestination)) {
                    $query = "UPDATE contact SET name='$name',phone = '$phone', brand = '$brand', description = '$description', " .
                        "image = '$filenamenew', youtube = '$youtube', website = '$website' WHERE id = $id";
                    unlink('../../uploaded_images/' . $earlier_image);
                }else{
                    echo "<script>";
                    echo "alert('Image not uploaded...try again!!');";
                    echo "window.location.href = '../card.php';";
                    echo "</script>";
                    die('Not Uploaded');
                }
            } else {
                echo "<script>";
                echo "alert('Image not uploaded...try again!!');";
                echo "window.location.href = '../card.php';";
                echo "</script>";
                die('Not Uploaded');
            }
        } else {
            echo "<script>";
            echo "alert('File type not supported...try again!!');";
            echo "window.location.href = '../card.php';";
            echo "</script>";
            die('Not Uploaded');
        }
    }


    if ($con->query($query)) {
        echo "<script>";
        echo "alert('Data updated successfully!!');";
        echo "window.location.href = '../card.php';";
        echo "</script>";
    } else {
        echo "Error: ". $con->error;
        echo "<script>";
        echo "alert('Oops, not updated...try again!!');";
        echo "window.location.href = '../card.php';";
        echo "</script>";
    }

    $con->close();
}

?>