jQuery(function(){
        
    
    
    const val1=$("#txtHomeContent").val();
       

    $("#btnEditHomeContent").click(function(){
        
        $("#txtHomeContent").prop("readonly",false);
        $("#txtHomeContent").focus();
        $("#txtHomeContent").on('input',function(evt){
                var val2=evt.target.value;
                //val3=val2;
                if(val1!=val2){
                    $("#btnSubmitHomeContent").prop('disabled',false);
                    
                    

                }
                else{
                    $("#btnSubmitHomeContent").prop('disabled',true);

                }
            });
        


    });
    $("#btnSubmitHomeContent").click(function(){
        if($("#txtHomeContent").val().length!=0){
        if(confirm("Do you really want to change the Content?")){
            //var Content=$("#txtHomeContent").val();
            $('#frmContent')[0].submit();
            //return false;
            
        }
    
        else{
            $("#btnEditHomeContent")[0].click();
        }
    }
    else{
        alert("Content cannot be empty!");
    }

    })

});