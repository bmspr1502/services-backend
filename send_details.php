<?php
session_start();
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
                $_SESSION['data'] = $_POST;
                echo "<script>";
                echo "alert('Image not uploaded...try again!!');";
                echo "window.location.href = 'contact.php';";
                echo "</script>";
                die('Not Uploaded');
            }
        } else {
            $_SESSION['data'] = $_POST;
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
        
            $subject = "Thankyou for contacting us!!";
            $message = "<!doctype html><html><head>";
            $message = $message . "<style>
            table {
            border-collapse: collapse;
            width: 100%;
            }
            th, td {
            text-align: left;
            padding: 8px;
            }
            tr:nth-child(even){background-color: #f2f2f2}
            th {
            background-color: #4CAF50;
            color: white;
            }
            </style>";
            $message = $message . "</head><body><p style='text-align: center'>Your Ad details has been added to our database, to confirm it\'s visibility reply to this mail.</p><table><thead><tr><th>Label</th><th>Your Response</th></tr></thead><tbody>";
            $message = $message . "<tr><td>Name</td><td>" . $name . "</td></tr>";
            $message = $message . "<tr><td>Email</td><td>" . $email . "</td></tr>";
            $message = $message . "<tr><td>Phone</td><td>" . $phone . "</td></tr>";
            $message = $message . "<tr><td>Product</td><td>" . $product . "</td></tr>";
            $message = $message . "<tr><td>Brand</td><td>" . $brand . "</td></tr>";
            $message = $message . "<tr><td>Description</td><td>" . $description . "</td></tr>";
            $message = $message . "<tr><td>Youtube</td><td><a href='" . $youtube ."' target='_blank'>Youtube Link</a></td></tr>";
            $message = $message . "<tr><td>Website</td><td><a href='" . $website ."' target='_blank'>Website Link</a></td></tr>";
            $message = $message . "</tbody></table></body></html>";
            
            
             $headers = "From: ratchabala@gmail.com";
            if(mail($email, $subject, $message, $headers)){
                echo "Mail sent successfully";
            }
            else{
                echo "Cannot send the mail";
            }
        echo "<script>";
        echo "alert('Details sent to database successfully!!');";
        echo "window.location.href = 'index.php';";
        echo "</script>";
    } else {
        echo "Error: ". $con->error;
        $_SESSION['data'] = $_POST;
        echo "<script>";
        echo "alert('Oops, details not sent, email already exists...try again!!');";
        echo "window.location.href = 'contact.php';";
        echo "</script>";
    }

    $con->close();
}

?>