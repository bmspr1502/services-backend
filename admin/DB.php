<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "services_new";

$con = new mysqli($host, $username, $password, $database);

if($con->connect_error){
    die("connection error" . $con->error);
}
