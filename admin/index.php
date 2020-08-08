<?php
session_start();
if(isset($_SESSION['user'])){
    if($_SESSION['user']=='admin'){
        header('Location: card.php');
    }else{
        unset($_SESSION['user']);
        header('Location: index.php');
    }
}
if(isset($_POST['signed'])){
    $email = "admin@test.com";
    $password = "testing";

    if($_POST['email']==$email && $_POST['pwd']==$password){
        $_SESSION['user'] = 'admin';
        header('Location: card.php');
    }else{
        echo "UserName or Password is wrong";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Into Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
        body{
            height: 100vh;
            width: 100%;
        }
        #form{
            top: 30vh;
        }
    </style>
</head>
<body>
<div class="container" >
    <div class="card text-center" id="form">
    <h1>Admin Page Sign In</h1>

        <form action="index.php" method="post">
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" placeholder="Enter email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="pwd" required>
            </div>

            <input type="submit" class="btn btn-primary" name="signed">
        </form>
    </div>
</div>
</body>
</html>