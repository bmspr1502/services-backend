<?php
include 'services/servicedetails.php';


?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>


<script>
var id;
jQuery($(document).ready(function (){

    var $iframe = $('#iframe');
    

    function showIframe(){
    if (window.matchMedia("(min-width: 500px)").matches) {
        //alert("hurray");
        $iframe.attr('src', "../about_us.php");
    }
    }
    $(window).on('resize', showIframe);


    showIframe();

    //alert(window.location.pathname);
    var page=window.location.pathname;
    
    var temp=0;
    // alert($("#ChangeId").text());
    // alert($("#ChangeLogo").attr("src"));

$(".btnEdit").click(function(){
    
    
    //alert("<//?php echo $values[$x]['id']?>");
    id=$(this).val();
    //document.cookie = "id = " + id;
   
    
   $.ajax({
        url : 'services/serviceSession.php',
        type : 'POST',
        data : {'id':id},
        dataType : 'json',
        success : function (data) {
            //alert(data['id']);
           
           $("#ChangeId").text(data['id']);
           $("#ChangeLogo").attr("src","../images/flaticon/svg/"+data['logo']);
           $("#EditFormTitle").val(data['title']);
           $("#EditFormDescr").val(data['description']);
           putForm();
           

        },
        error : function (dat,res,cg) {
           alert(res+cg);
        }
    });
    
    
    
    
    
    

});
function putForm(){
    //alert($("#EditId").text());
    //alert($("#EditLogo").attr("src"));
    $("#editFormDiv").text("hello this is the form");
    $("#id01").css("display","block");

}

$("#btnEditLogo").click(function(){
    $("#EditFormLogo").css("display","block");
    $("#btnChangeLogo").css("display","block");




});
$("#btnChangeLogo").click(function(){
    var logoName=$("#EditFormLogo").val();
    var logoAdd="../images/flaticon/svg/"+logoName;
    var image=new Image();
    image.src=logoAdd;
    image.onload=function(){
        //alert("loaded successfully");
        $.post('services/ServiceLogoChange.php',{'logoName':logoName,id:$("#ChangeId").text()},function(data){
            $("#ChangeLogo").attr("src",logoAdd);
            //alert(data);
            $("#EditFormLogo").css("display","none");
            $("#btnChangeLogo").css("display","none");
            temp=1;
            
           
        });
        

    }
    image.onerror=function(){
        alert("check if image is present in svg folder");
        putForm();
    }


});
$("#btnEditTitle").click(function(){
    $("#EditFormTitle").attr("readonly",false);
    $("#EditFormTitle").focus();
    $("#btnChangeTitle").css("display","inline");
});
$("#btnChangeTitle").click(function(){
    var title=$("#EditFormTitle").val();
    $.post("services/ServiceTitleChange.php",{"title":title,"id":$("#ChangeId").text()},function(data){
        //alert(data);
        $("#btnChangeTitle").css("display","none");
        $("#EditFormTitle").attr("readonly",true);
        
        temp=1;

    });
});

$("#btnEditDescr").click(function(){
    $("#EditFormDescr").attr("readonly",false);
    $("#EditFormDescr").focus();
    $("#btnChangeDescr").css("display","inline");
});
$("#btnChangeDescr").click(function(){
    var descr=$("#EditFormDescr").val();
    $.post("services/ServiceDescrChange.php",{"descr":descr,"id":$("#ChangeId").text()},function(data){
        //alert(data);
        $("#btnChangeDescr").css("display","none");
        $("#EditFormDescr").attr("readonly",true);
        
        temp=1;

    });
});

$("#closeButton").click(function(){
    $("#id01").css("display","none");
    if(temp){
    location.reload(true);
    }
});

$(".btnDelete").click(function(){
    if(confirm("Are you sure to delete this service?")){
    var id=$(this).val();
    alert(id);
    $.post('services/deleteService.php',{'id':id},function(data){
       // alert(data);
        
        location.reload(true);
        


    });


    }


});
$("#btnAddService").click(function(){
    $("#submitNewService").css("display","block");
    $("#btnEditLogo").css("display","none");
    $("#btnEditDescr").css("display","none");
    $("#btnEditTitle").css("display","none");
    $("#EditFormDescr").attr("readonly",false);
    $("#EditFormTitle").attr("readonly",false);
    $("#EditFormLogo").css("display","block");


    $("#id01").css("display","block");

});

$("#submitNewService").click(function(){
    //$logo=$("#EditFormLogo").val();
    var logoName=$("#EditFormLogo").val();
    var logoAdd="../images/flaticon/svg/"+logoName;
    var image=new Image();
    image.src=logoAdd;
    image.onload=function(){
    title=$("#EditFormTitle").val();
    descr=$("#EditFormDescr").val();
    if(title.length==0||descr.length==0){
        alert("title and description cannot be empty!");
    }
    else{
    $.post("services/addService.php",{"logo":logoName,"title":title,"descr":descr},function(data){
        //alert(data)
        location.reload(true);
        
    });
    }
    }
    image.onerror=function(){
        alert("check if image is present in svg folder");
    }
});





}));


</script>
<body>
<div class="w3-sidebar w3-bar-block w3-black w3-collapse" style="width:10%">
  <a href="homepage.php" class="w3-bar-item w3-button w3-hover-none w3-hover-text-green w3-large w3-myfont">Home</a>
  <a href="aboutus.php" class="w3-bar-item w3-button w3-hover-none w3-hover-text-green w3-large w3-myfont">About Us</a>
  <a href="servicepage.php" class="w3-bar-item w3-button w3-hover-none w3-hover-text-green w3-large w3-myfont">Services</a>
</div>

<div class="w3-container" style="margin-left:10%">
<div class="w3-xxlarge w3-padding w3-margin">
<p>Services</p>
</div>
<div>
<p><br></p>
</div>
<div class="w3-container">
<div>
<button class="w3-button w3-teal w3-hover-green" type="button" id="btnAddService">+</button>
</div>
<!-- </div> -->
<p><br></p>










<?php
for($x=0;$x<$len;$x++){
    $row=$values;
    ?>

    <div class="container">
<div class="card" style="width:350px" >

    <div class="card-body">
    <img class="card-img-top" src="../images/flaticon/svg/<?php echo $row[$x]['logo'];?>" alt="Card image" style="width:40%">
      <h4 class="card-title"><?php echo $row[$x]['title']?></h4>
      <p class="card-text"><?php echo $row[$x]['description']?></p>
    <div class="w3-display-right">
    <button type="button" name="Edit<?php echo $x;?>"class="w3-button w3-teal btnEdit" padding="10px" value="<?php echo $row[$x]['id'];?>">Edit</button>
    </div>
    <div class="w3-display-bottomright">
    <button type="button"  class="w3-button w3-circle w3-light-blue w3-hover-red btnDelete" id="btnDelete" value="<?php echo $row[$x]['id'];?>">-</button>

    </div>
    </div>
    </div>

 



</div>

<?php
}
?>
</div>
</div>
<div class="w3-rest w3-container" class="w3-mobile" class="child" style="margin:0px;padding:0px;">

<iframe src="" id="iframe" title="description" frameborder="0" style="height:100%;width:50%;position:absolute;top:0px;left:50%;right:0px;bottom:0px;position:fixed;" height="50%" width="50%" allowfullscreen></iframe>
</div>






<div class="w3-container" >
  

  <div id="id01" class="w3-modal" display="none">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
    <div class="w3-display-topleft">
        <p id="ChangeId"></p>
        
    </div>
    
      <div class="w3-container w3-teal w3-center"><br>
        <span  class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal" id="closeButton">&times;</span>
        <img id="ChangeLogo" src="" alt="LOGO" style="width:20%" class="w3-circle w3-margin-top" >
        <button type="button" class="w3-button w3-blue w3-section w3-padding w3-center" id="btnEditLogo" >Edit Logo</button>
        <form class="w3-padding w3-center">
        <input type="text" placeholder="xxxxx.svg/yyyyy.png" id="EditFormLogo"style="display:none">
        <button type="button" class="w3-button w3-green w3-section w3-padding w3-center" id="btnChangeLogo" style="display:none">Change Logo</button>
        </form>
        
      </div>
      

      <form class="w3-container">
        <div class="w3-section">
          <label><b>Title</b></label>
          <button type="button" class="w3-button w3-blue w3-section w3-padding w3-center" id="btnEditTitle" >Edit Title</button>
          <button type="button" class="w3-button w3-green w3-section w3-padding w3-center" id="btnChangeTitle" style="display:none" >Change Title</button>

          <input id="EditFormTitle" class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Title" name="FrmTitle" readonly required>
          <label><b>Description</b></label>
          <button type="button" class="w3-button w3-blue w3-section w3-padding w3-center" id="btnEditDescr" >Edit Description</button>
          <button type="button" class="w3-button w3-green w3-section w3-padding w3-center" id="btnChangeDescr" style="display:none" >Change Description</button>
          <textarea id="EditFormDescr" class="w3-input w3-border" placeholder="Enter Description" name="FrmDecr" size="height:100%; width:100%;" readonly required ></textarea>
          
        </div>
      </form>
      

    </div>
    <div class="w3-display-bottommiddle">
      <button type="button" id="submitNewService" style="display:none" class="w3-button w3-xxlarge w3-green w3-section w3-padding w3-center">Submit</button>

      </div>
  </div>
</div>
           


</body>




