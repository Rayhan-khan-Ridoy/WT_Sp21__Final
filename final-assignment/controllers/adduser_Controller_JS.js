function get(id) {
        return document.getElementById(id);
    }
    
    function validate()
    {
        
        cleanUp();
        var haserror= false;
        
        if(get("name").value == "")
        {
            get("err_msg_name").innerHTML="name required from JS";
            get("err_msg_name").style.color="red";
            get("name").style.border="3px solid red";
            haserror=true;
            
        }else if(get("name").value <6){
            
            get("err_msg_name").innerHTML="name can't contain less than six charecter from JS";
            get("err_msg_name").style.color="red";
            get("name").style.border="3px solid red";
            haserror=true;
        }else if(!isNaN(get("name").value)){
            
            get("err_msg_name").innerHTML="name only contain letter from JS";
            get("err_msg_name").style.color="red";
            get("name").style.border="3px solid red";
            haserror=true;
        }else{
            get("name").style.border="3px solid green";
        
        }
        
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
        
        if(get("number").value == "")
        {
            get("err_msg_number").innerHTML="number required from JS";
            get("err_msg_number").style.color="red";
            get("number").style.border="3px solid red";
            haserror=true;
            
        }
        else if(get("number").value < 11){
            
            get("err_msg_number").innerHTML="number can't contain less than 11 charecter from JS";
            get("err_msg_number").style.color="red";
            get("number").style.border="3px solid red";
            haserror=true;
        }
        else{
            get("number").style.border="3px solid green";
        
            }
        
        if(get("saddress").value == "")
        {
            get("err_msg_saddress").innerHTML="address required from JS";
            get("err_msg_saddress").style.color="red";
            get("saddress").style.border="3px solid red";
            haserror=true;
            
        }else if(get("saddress").value <3){
            
            get("err_msg_saddress").innerHTML="address can't contain less than 3 charecter from JS";
            get("err_msg_saddress").style.color="red";
            get("saddress").style.border="3px solid red";
            haserror=true;
        }else{
            get("saddress").style.border="3px solid green";
        
        }
        
        if(get("city").value == "")
            {
                get("err_msg_city").innerHTML="city required from JS";
                get("err_msg_city").style.color="red";
                get("city").style.border="3px solid red";
                haserror=true;

            }else if(get("city").value <3){

                get("err_msg_city").innerHTML="city can't contain less than 3 charecter from JS";
                get("err_msg_city").style.color="red";
                get("city").style.border="3px solid red";
                haserror=true;
            }else if(!isNaN(get("city").value)){
            
            get("err_msg_city").innerHTML="city name only contain letter from JS";
            get("err_msg_city").style.color="red";
            get("city").style.border="3px solid red";
            haserror=true;
            }else{
                get("city").style.border="3px solid green";

            }
        
        if(get("state").value == "")
        {
            get("err_msg_state").innerHTML="state required from JS";
            get("err_msg_state").style.color="red";
            get("state").style.border="3px solid red";
            haserror=true;
            
        }else if(get("state").value <3){
            
            get("err_msg_state").innerHTML="state can't contain less than 3 charecter from JS";
            get("err_msg_state").style.color="red";
            get("state").style.border="3px solid red";
            haserror=true;
        }else{
            get("state").style.border="3px solid green";
        
        }
        
        
        if(get("pocode").value == "")
            {
                get("err_msg_pocode").innerHTML="postal code required from JS";
                get("err_msg_pocode").style.color="red";
                get("pocode").style.border="3px solid red";
                haserror=true;

            }else if(get("pocode").value <6){

                get("err_msg_pocode").innerHTML="postal code can't contain less than 6 charecter from JS";
                get("err_msg_pocode").style.color="red";
                get("pocode").style.border="3px solid red";
                haserror=true;
            }else if(isNaN(get("pocode").value)){
            
            get("err_msg_pocode").innerHTML="postal code only contain number from JS";
            get("err_msg_pocode").style.color="red";
            get("pocode").style.border="3px solid red";
            haserror=true;
            }else{
                get("pocode").style.border="3px solid green";

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
         get("err_msg_name").innerHTML="";
         get("err_msg_username").innerHTML="";
         get("err_msg_password").innerHTML="";
         get("err_msg_number").innerHTML="";
         get("err_msg_saddress").innerHTML="";
         get("err_msg_city").innerHTML="";
         get("err_msg_state").innerHTML="";
         get("err_msg_pocode").innerHTML="";
         get("err_msg_textarea").innerHTML="";

        
       } 