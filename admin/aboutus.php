<?php
include 'about/aboutusDetails.php';
?>

<!DOCTYPE html>
<head>


</head>

<meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="HomeTitle.js"></script>
    <script src="HomeHeading.js"></script>
    <script src=HomeContent.js></script> -->
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
        $iframe.attr('src', "../about_us.php");
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
    $("#btnEditAboutImage").click(function(){
        $("#imgForm").attr("type","file");
        $("#btnSubmitAboutImage").prop("disabled",false);


    });
    $("#Cancel").click(function(){
        $("#btnSubmitAboutTitle,#btnSubmitAboutLeft,#btnSubmitAboutRight,#btnSubmitAboutImage").prop("disabled",true);
        $("#imgForm").val("");
        $("#imgForm").attr("type","hidden");



    });
    $("#btnSubmitAboutImage").click(function(){
        var fd = new FormData();
        if(!$("#imgForm").val()){
            alert("Please select a image!");
        }
        else{
        var files = $('#imgForm')[0].files[0];
        fd.append('file',files);


        // var imageAdd=$("#imgForm").val();
        // var image=new Image();
        // image.src="../"+imageAdd;
        // image.onload=function(){
            // $.post("about/AboutImageChange.php",{"image":imageAdd},function(data){
            //    // alert(data);
            //     $("#AboutImage").attr("src","../"+imageAdd);
                
            //     $("#imgForm").attr("type","hidden");
            //     $("#btnSubmitAboutImage").prop("disabled",true);
            //     //document.getElementById("#iframe").contentDocument.location.reload(true);
            //     $( '#iframe' ).attr( 'src',"../about_us.php");



           
        // }
        // image.onerror=function(){
        //     alert("Ensure the image file is present in images folder!")
        // }
        $.ajax({
            url: 'about/AboutImageChange.php',
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function(response){
                //alert(response);
                var arr=response.split(',');
                if(arr[0]=="Successful"){
                    alert(arr[0]);
                    $("#AboutImage").attr("src","../about_usImage/"+arr[1]);
                    $( '#iframe' ).attr( 'src',"../about_us.php");
                    $("#btnSubmitAboutImage").prop("disabled",true);
                    $("#imgForm").attr("type","hidden");


                }
                else{
                    alert(response);
                }
                

            }});
        }


    });

    


    $("#btnEditAboutTitle,#btnEditAboutLeft,#btnEditAboutRight").click(function(){
        var className=$(this).val();
        //alert(className);
        $("."+className).prop("readonly",false);
        $("."+className).focus();
        $("."+className+"commit").prop("disabled",false);

    });
    $(".1commit,.2commit,.3commit").click(function(){
        var id=$(this).val();
        var text=$("."+id).val();
        if(text.length==0){
            alert("Fields cannot be empty!");

        }
        else{
        //alert(text);
        if(id==1){
            $.post("about/aboutTitleChange.php",{"text":text},function(data){
                //alert(data);
                $("."+id).val(data);
                $("."+id).prop("readonly",true);
                $("."+id+"commit").prop("disabled",true);
                $( '#iframe' ).attr( 'src',"../about_us.php");

                
            });
        }
        else if(id==2){
            $.post("about/aboutLeftChange.php",{"text":text},function(data){
                $("."+id).val(data);
                $("."+id+"commit").prop("disabled",true);
                $( '#iframe' ).attr( 'src',"../about_us.php");
            });
        }
        else if(id==3){
            $.post("about/aboutRightChange.php",{"text":text},function(data){
                $("."+id).val(data);
                $("."+id+"commit").prop("disabled",true);
                $( '#iframe' ).attr( 'src',"../about_us.php");
            });
        }
    }


    });
    
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

<div class="w3-container w3-section" class="w3-mobile">
    <form id='frmTitle'>
        <input type=text value="<?php echo $row['title']?>" id='txtAboutTitle' class='w3-xxlarge 1' placeholder='TITLE' name='AboutTitle' readonly><br><br>
        <button type=button class="w3-button w3-ripple w3-red"  id='btnEditAboutTitle' value="1">EDIT</button>
        <button type=button  class="w3-button w3-ripple w3-cyan 1commit"  id='btnSubmitAboutTitle' value="1" disabled>COMMIT</button>

</form>


</div>


<div class="w3-container w3-section" class="w3-mobile" >
    <form id='frmHeading'>
        <textarea cols="40" rows="10" id='txtAboutLeft' class='w3-large 2' placeholder='CONTENT' name='AboutLeft' readonly><?php echo stripslashes($row['leftcontent']);?></textarea><br><br>
        <button type=button class="w3-button w3-ripple w3-red"  id='btnEditAboutLeft' value="2">EDIT</button>
        <button type=button class="w3-button w3-ripple w3-cyan 2commit"  id='btnSubmitAboutLeft' value="2" disabled>COMMIT</button>
</form>
</div>

<div class="w3-container w3-section" class="w3-mobile">
    <form id='frmContent'>
        <textarea cols="40" rows="10" placeholder="CONTENT" id="txtHomeRight" class='w3-large 3' name='AboutRight' readonly><?php echo stripslashes($row['rightcontent']);?></textarea>
            
        <br><br>
        <button type=button value="3" class="w3-button w3-ripple w3-red"  id='btnEditAboutRight'>EDIT</button>
        <button type=button value="3" class="w3-button w3-ripple w3-cyan 3commit"  id='btnSubmitAboutRight' disabled>COMMIT</button>
</form>   
</div>
<div class="w3-container w3-section" class="w3-mobile">
        
        <img src="../about_usImage/<?php echo $row['image'];?>" width="65%" class="4" id="AboutImage">    
        <br><br>
        <input type="hidden" id="imgForm" placeholder="image/xxxxx.jpg" name="file">
        <button type=button value="4" class="w3-button w3-ripple w3-red"  id='btnEditAboutImage'>EDIT</button>
        <button type=button value="4" class="w3-button w3-ripple w3-cyan 4commit"  id='btnSubmitAboutImage' disabled>COMMIT</button>
</form>   
</div>

<div>
<button type="button" class="w3-button w3-circle w3-red" id="Cancel">X</button>
</div>

</div>

<div class="w3-rest w3-container" class="w3-mobile" class="child" style="margin:0px;padding:0px;">

<iframe src="" id="iframe" title="description" frameborder="0" style="height:100%;width:50%;position:fixed;top:0px;left:50%;right:0px;bottom:0px" height="50%" width="50%" allowfullscreen>
</div>


</div>




</body>