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



    $query = "INSERT INTO contact (name,email,phone,product,brand,description,youtube,website)VALUES (?,?,?,?,?,?,?,?)";
    $statement= $con->prepare($query);
    if ($statement) {
        $statement->bind_param('ssssssss', $name, $email, $phone, $product, $brand, $description, $youtube, $website);
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