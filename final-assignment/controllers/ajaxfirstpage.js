function get(id) {
            return document.getElementById(id);
        }
        
        
        function checkUsername(control){
            var username = control.value;
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange=function(){
            if(this.readyState == 4 && this.status == 200){

                var resp = this.responseText;
                
                //console.log(resp);
                
                
                
             
                
                if (resp =="false"){
                        
                    
                        get("err_msg_username").innerHTML = "Ajax saying Username invalid";
                        get("err_msg_username").style.color="red"; 
                   
                   }else{
                       
                        
                        console.log(resp);
                        get("err_msg_username").innerHTML = "Ajax saying Username valid";
                        get("err_msg_username").style.color="green";
                   }
                
                


            }
        };
        
        xhttp.open("GET","checkusername.php?uname="+username,true);
        xhttp.send();   
        
        
    }
    
  /*  function checkPassword(control){
            var password = control.value;
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange=function(){
            if(this.readyState == 4 && this.status == 200){

                var res = this.responseText;
                if(res == "true"){
                    get("err_msg_password").innerHTML = "Ajax saying password valid";
                }else{
                    get("err_msg_password").innerHTML = "Ajax saying password invalid";
                }


            }
        };
        
        xhttp.open("GET","checkPassword.php?pass="+password,true);
        xhttp.send();   
        
        
    } */
    
