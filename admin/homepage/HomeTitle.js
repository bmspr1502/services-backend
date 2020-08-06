
        jQuery(function(){
        
    
    
    const val1=$("#txtHomeTitle").val();
    
       

    $("#btnEditHomeTitle").click(function(){
        //alert(val1);
        //console.log(val1);
        
        $("#txtHomeTitle").prop("readonly",false);
        $("#txtHomeTitle").focus();
        $("#txtHomeTitle").on('input',function(evt){
                var val2=evt.target.value;
                //val3=val2;
                if(val1!=val2){
                    $("#btnSubmitHomeTitle").prop('disabled',false);
                    
                    

                }
                else{
                    $("#btnSubmitHomeTitle").prop('disabled',true);

                }
            });
        


    });
    $("#btnSubmitHomeTitle").click(function(){
       // alert("hoooi");
        if($("#txtHomeTitle").val().length!=0){
        if(confirm("Do you really want to change the title?")){
            //var title=$("#txtHomeTitle").val();
            $('#frmTitle')[0].submit();
            //return false;
            
        }
        else{
            $("#btnEditHomeTitle")[0].click();
        }
    }
    else{
        alert("Title cannot be empty!");
    }

    });

});