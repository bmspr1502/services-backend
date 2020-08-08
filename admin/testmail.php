<?php
$name = "PRANAV";
$email = "bmspr010502@gmail.com";
$phone = "9443501317";
$product = "Fast Track Watch";
$brand = "Fast Track";
$description = "Get The best deal on Fast track watches, under 1.5kRs.";
$youtube = "https://www.youtube.com/watch?v=C4J3QREiuJ0";
$website = "http://hideous-cave.000webhostapp.com/";
ini_set('display_errors', 1);
error_reporting( E_ALL );

$from = 'bmspr1502@gmail.com';
$to = $email;
$subject = 'Checking PHP mail';
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
$message = $message . "</head><body><table><thead><tr><th>Label</th><th>Your Response</th></tr></thead><tbody>";
$message = $message . "<tr><td>Name</td><td>" . $name . "</td></tr>";
$message = $message . "<tr><td>Email</td><td>" . $email . "</td></tr>";
$message = $message . "<tr><td>Phone</td><td>" . $phone . "</td></tr>";
$message = $message . "<tr><td>Product</td><td>" . $product . "</td></tr>";
$message = $message . "<tr><td>Brand</td><td>" . $brand . "</td></tr>";
$message = $message . "<tr><td>Description</td><td>" . $description . "</td></tr>";
$message = $message . "<tr><td>Youtube</td><td><a href='" . $youtube ."' target='_blank'>Youtube Link</a></td></tr>";
$message = $message . "<tr><td>Website</td><td><a href='" . $website ."' target='_blank'>Website Link</a></td></tr>";
$message = $message . "</tbody></table></body></html>";
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.strip_tags($from)."\r\n".
    'Reply-To: '.strip_tags($from)."\r\n" .
    'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers)){
    echo "The Email was sent successfully";
}else{
    echo $message;
}
