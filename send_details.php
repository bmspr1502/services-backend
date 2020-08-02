<?php
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$product = $_POST["product"];
$brand = $_POST["brand"];
$description = $_POST["description"];
$youtube = $_POST["youtube"];
$website = $_POST["website"];

$con = mysqli_connect("localhost", "root", "", "services");
$sql = "INSERT INTO contact (name,email,phone,product,brand,description,youtube,website)VALUES ('$name','$email','$phone','$product','$brand','$description','$youtube','$website')";
$query = mysqli_query($con,$sql);
if (mysqli_connect_errno()){
    echo "<script>";
	echo "alert('Oops, message not sent...try again!!');";
	echo "window.location.href = 'contact.php';";
	echo "</script>";
}
else{
    echo "<script>";
	echo "alert('Message sent successfully!!');";
	echo "window.location.href = 'index.php';";
	echo "</script>";
}

mysqli_close($con);
?>