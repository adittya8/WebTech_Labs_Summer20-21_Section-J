var flag = 0;

function change(x) 
{
    var format = /[@,#,$,%]/;
    var format2 = /^\d{11}$/;
    var format3 = /\S+@\S+\.\S+/;
    var format4 = /^\d{3}$/;
    var a = x.value;
    var d = new Date();

    if(a=="")
    {
        
        if(x.name=="username"){
            document.getElementById("usernameErr").innerHTML = "Username cannot be empty";
            document.getElementById("usernameErr").style.color = "red";
            document.getElementById("username").style.borderColor = "red";
        }   
        
    }

    
    else
    {
        
        if(x.name=="username"){
            document.getElementById("usernameErr").innerHTML = "\u2713";
            document.getElementById("usernameErr").style.color = "green";
            document.getElementById("username").style.borderColor = "";
            flag=1;
        }
        
    }
    if(flag==1){
    document.getElementById("submit").disabled = false;
}
}


