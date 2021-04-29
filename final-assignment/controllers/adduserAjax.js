        
        $('#form-submit').on('submit',function(e){
         e.preventDefault();
            
            $.ajax({
                type:'post',
                data:$("#form-submit input").serialize()
              
            });
            
            
            
        }) ; 