<?php
session_start();
//include 'homepage/Homedetails.php';
include 'homepage/Homedetails.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="homepage/HomeTitle.js"></script>
    <script src="homepage/HomeHeading.js"></script>
    <script src=homepage/HomeContent.js></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
    
    input,input:focus{
        border-top-style: hidden;
        border-right-style: hidden;
        border-left-style: hidden;
        border-bottom-style:ridge;
        background:rgba(0,0,0,0);
        outline:none;

    }
    

    #txtHomeTitle{
        font-family: Georgia, serif;

    }
    textarea,textarea:focus{
        border-top-style: hidden;
        border-right-style: hidden;
        border-left-style: hidden;
        border-bottom-style:ridge;
        background:rgba(0,0,0,0);
        
        outline:none;
        
    }

    @media screen and (max-width: 600px) {
  div{
      display:block;
  }
}

    </style>
    <script>
    
    
        jQuery(function(){
            var $iframe = $('#iframe');
    

    function showIframe(){
    if (window.matchMedia("(min-width: 500px)").matches) {
        //alert("hurray");
        $iframe.attr('src', "../index.php");
    }
    }
    $(window).on('resize', showIframe);


    showIframe();

        
        function resizeInput() {
    $(this).attr('size', $(this).val().length);
}

$('input[type="text"]')
    // event handler
    .keyup(resizeInput)
    // resize on page load
    .each(resizeInput);
    
        });


    </script>
    
</head>

<body>
<div class="w3-sidebar w3-bar-block w3-black w3-collapse" style="width:10%">
  <a href="homepage.php" class="w3-bar-item w3-button w3-hover-none w3-hover-text-green w3-large w3-myfont">Home</a>
  <a href="aboutus.php" class="w3-bar-item w3-button w3-hover-none w3-hover-text-green w3-large w3-myfont">About Us</a>
  <a href="servicepage.php" class="w3-bar-item w3-button w3-hover-none w3-hover-text-green w3-large w3-myfont">Services</a>
  <a href="card.php" class="w3-bar-item w3-button w3-hover-none w3-hover-text-green w3-large w3-myfont">Advertisement</a>

</div>






<div class="w3-content" class="w3-display-topmiddle" class="w3-cell-row" class="parent">


<div class="w3-col w3-container" style="width:50%" class="child">

<div class="w3-container w3-section iframe-container" class="w3-mobile">
    <form action='homepage/HomeTitle.php' method=POST id='frmTitle'>
        <input type=text value=<?php echo $title?> id='txtHomeTitle' class='w3-xxlarge' placeholder='TITLE' name='HomeTitle' readonly><br><br>
        <input type=button class="w3-button w3-ripple w3-red" value='EDIT' id='btnEditHomeTitle'>
        <input type=button class="w3-button w3-ripple w3-cyan" value='COMMIT' id='btnSubmitHomeTitle' disabled>

</form>


</div>


<div class="w3-container w3-section" class="w3-mobile" >
    <form action='homepage/HomeHeading.php' method='POST' id='frmHeading'>
        <input type=text value="<?php echo $heading;?>" id='txtHomeHeading' class='w3-xlarge' placeholder='HEADING' name='HomeHeading' readonly><br><br>
        <input type=button class="w3-button w3-ripple w3-red" value='EDIT' id='btnEditHomeHeading'>
        <input type=button class="w3-button w3-ripple w3-cyan" value='COMMIT' id='btnSubmitHomeHeading' disabled>
</form>
</div>

<div class="w3-container w3-section" class="w3-mobile">
    <form action='homepage/HomeContent.php' method='POST' id='frmContent'>
        <textarea cols="40" rows="10" placeholder="CONTENT" id="txtHomeContent" class='w3-large' name='HomeContent' readonly><?php echo $content;?></textarea>
            
        <br><br>
        <input type=button class="w3-button w3-ripple w3-red" value='EDIT' id='btnEditHomeContent'>
        <input type=button class="w3-button w3-ripple w3-cyan" value='COMMIT' id='btnSubmitHomeContent' disabled>
</form>   
</div>
</div>


<div class="w3-rest w3-container " class="w3-mobile" class="child" style="margin:0px;padding:0px;">

<iframe id="iframe" src="" class="w3-collapse" title="description" frameborder="0" style="height:100%;width:50%;position:absolute;top:0px;left:50%;right:0px;bottom:0px" height="50%" width="50%" allowfullscreen></iframe>
</div>
</div>
<!-- <div class="w3-block-bar w3-black">
  <a href="#" class="w3-bar-item w3-button">Home</a>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
</div> -->

<!-- Overlay -->
<!-- <div class="w3-overlay" onclick="w3_close()" style="cursor:pointer"></div> -->
</body>

