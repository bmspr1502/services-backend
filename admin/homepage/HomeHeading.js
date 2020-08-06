jQuery(function(){
        
    
    
    const val1=$("#txtHomeHaeding").val();
       

    $("#btnEditHomeHeading").click(function(){
        
        $("#txtHomeHeading").prop("readonly",false);
        $("#txtHomeHeading").focus();
        $("#txtHomeHeading").on('input',function(evt){
                var val2=evt.target.value;
                //val3=val2;
                if(val1!=val2){
                    $("#btnSubmitHomeHeading").prop('disabled',false);
                    
                    

                }
                else{
                    $("#btnSubmitHomeHeading").prop('disabled',true);

                }
            });
        


    });
    $("#btnSubmitHomeHeading").click(function(){
        
        if($("#txtHomeHeading").val().length!=0){
        if(confirm("Do you really want to change the heading?")){
            //var title=$("#txtHomeHeading").val();
            $('#frmHeading')[0].submit();
            //return false;
            
        }
        else{
            $("#btnEditHomeHeading")[0].click();
        }
    }
    else{
        alert("Heading cannot be empty!!");
    }

    });

});