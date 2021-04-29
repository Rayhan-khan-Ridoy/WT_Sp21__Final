    function get(id) {
        return document.getElementById(id);
    }
    
    function validate()
    {
        
        cleanUp();
        var haserror= false;
        
        if(get("username").value == "")
        {
            get("err_msg_username").innerHTML="Username required from JS";
            get("err_msg_username").style.color="red";
            get("username").style.border="3px solid red";
            haserror=true;
            
        }else if(get("username").value <6){
            
            get("err_msg_username").innerHTML="Username can't contain less than six charecter from JS";
            get("err_msg_username").style.color="red";
            get("username").style.border="3px solid red";
            haserror=true;
        }else if(!isNaN(get("username").value)){
            
            get("err_msg_username").innerHTML="Username only contain letter from JS";
            get("err_msg_username").style.color="red";
            get("username").style.border="3px solid red";
            haserror=true;
        }else{
            get("username").style.border="3px solid green";
        
        }
    
    
    
        if(get("password").value == "")
        {
            get("err_msg_password").innerHTML="password required from JS";
            get("err_msg_password").style.color="red";
            get("password").style.border="3px solid red";
            haserror=true;
            
        }
        else if(get("password").value < 8){
            
            get("err_msg_password").innerHTML="password can't contain less than eight charecter from JS";
            get("err_msg_password").style.color="red";
            get("password").style.border="3px solid red";
            haserror=true;
        }
        else{
            get("password").style.border="3px solid green";
        
            }
    
       
        if(!haserror)
        {
                return true;
        }else{
               return false;
        }
         
        
        
        
    }

  
    function cleanUp(){
         get("err_msg_username").innerHTML="";
         get("err_msg_password").innerHTML="";   

        
       } 
   

 
