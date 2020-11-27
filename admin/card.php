<?php
session_start();
if(isset($_POST['signout'])){
  unset($_SESSION['user']);
}
if(!isset($_SESSION['user'])){
    header('Location: index.php');
}else if($_SESSION['user']=='admin'){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CARDS</title>
    <style>

.header {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
}

#navbar {
  overflow: hidden;
  background-color: #333;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}

#navbar a.active {
  background-color: #4CAF50;
  color: white;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}
.w3-right{
  float: right;
  padding: 5px;
  background-color: #ddd;
}
</style>
</head>

<body>
<div id="navbar">
    <a href="homepage.php" class="w3-bar-item w3-button w3-hover-none w3-hover-text-green w3-large w3-myfont">Home</a>
    <a href="aboutus.php" class="w3-bar-item w3-button w3-hover-none w3-hover-text-green w3-large w3-myfont">About Us</a>
    <a href="servicepage.php" class="w3-bar-item w3-button w3-hover-none w3-hover-text-green w3-large w3-myfont">Services</a>
    <a href="card.php" class="w3-bar-item w3-button w3-hover-none w3-hover-text-green w3-large w3-myfont">Advertisement</a>
    <form action="card.php" method="post">
    <input type="submit" class="w3-bar-item w3-button w3-green w3-right" value="Sign Out" name="signout">
    </form>
</div>

<div class="container-fluid">
    <h1>
        The Datas visible
    </h1>
    <div id="data" style="overflow-x: auto">
    </div>
    <p id="message"></p>
</div>

<script type="text/javascript">
    window.onload = function () {
        getTable();
    }
    function getTable() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if(this.readyState == 4 && this.status){
                document.getElementById('data').innerHTML = this.responseText;
            }
        };
        xmlhttp.open('GET', 'ads/tabledata.php', true);
        xmlhttp.send();
    }

    function changeVisibility(id, visibility){
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if(this.readyState == 4 && this.status){
                document.getElementById('message').innerHTML = this.responseText;
            }
        };
        xmlhttp.open('GET', 'ads/visibility.php?id='+id+'&visibility='+visibility, true);
        xmlhttp.send();
        setTimeout(
            function () {
                getTable();
            }, 500);
    }
</script>
</body>
</html>
<?php
}