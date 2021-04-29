 function get(id) {
        return document.getElementById(id);
    }
    
    function validate()
    {
        
        cleanUp();
        var haserror= false;
        
        
        if(get("date").value == "")
                {
                    get("err_msg_date").innerHTML="Date required from JS";
                    get("err_msg_date").style.color="red";
                    get("date").style.border="3px solid red";
                    haserror=true;
                    

                }else{
                get("date").style.border="3px solid green";

            }
        
        
        if(get("email").value == "")
                {
                    get("err_msg_email").innerHTML="email required from JS";
                    get("err_msg_email").style.color="red";
                    get("email").style.border="3px solid red";
                    haserror=true;

                }else{
                get("email").style.border="3px solid green";

            }
        
        
        
        if(get("textarea").value == "")
                {
                    get("err_msg_textarea").innerHTML="write something from JS";
                    get("err_msg_textarea").style.color="red";
                    get("textarea").style.border="3px solid red";
                    haserror=true;

                }else{
                get("textarea").style.border="3px solid green";

            }
        
       
        if(!haserror)
        {
                return true;
        }else{
               return false;
        }
         
        
        
        
    }
    
    function cleanUp(){
         
         get("err_msg_email").innerHTML="";
        
         get("err_msg_textarea").innerHTML="";

         get("err_msg_date").innerHTML="";
       } 
    
    
    
    
    
    
    
   