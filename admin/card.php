<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
</head>

<body>

<div class="container">
    <h1>
        The Datas visible
    </h1>
    <div class="card" id="data" style="overflow-x: auto">
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
        xmlhttp.open('GET', 'tabledata.php', true);
        xmlhttp.send();
    }

    function changeVisibility(id, visibility){
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if(this.readyState == 4 && this.status){
                document.getElementById('message').innerHTML = this.responseText;
            }
        };
        xmlhttp.open('GET', 'visibility.php?id='+id+'&visibility='+visibility, true);
        xmlhttp.send();
        setTimeout(
            function () {
                getTable();
            }, 500);
    }
</script>
</body>
</html>