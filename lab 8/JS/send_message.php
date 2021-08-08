<script type="text/javascript">

function validation()
{
  var name= document.getElementById("yourname");
  var email= document.getElementById("email");
  var adminid= document.getElementById("adminid");
  var message=document.getElementById("message");



  if(name.value.trim()=="" )
  {
     document.getElementById("yournameErr").innerHTML= "*Name is requied";
     return false;
  }
  else {

  if(name.value.split(" ").length<2)
       {
        document.getElementById("yournameErr").innerHTML= "*Name must contains at least two words ";
        return false;
       }
       document.getElementById("yournameErr").innerHTML= "";

  }


    if(adminid.value.trim()=="")
  {
    document.getElementById("adminErr").innerHTML= "*Admin id is requied";
    return false;
  }
  else {
    var idformat = ^[0-9];
   if(!email.value.match(idformat))
    {
      document.getElementById("adminidErr").innerHTML= "*Invalid admin id format";
      return false;
    }
    else {
      document.getElementById("adminErr").innerHTML= "";
    }
  }




  if(email.value.trim()=="")
  {
    document.getElementById("emailErr").innerHTML= "*email is requied";
    return false;
  }
  else {
    var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
   if(!email.value.match(mailformat))
    {
      document.getElementById("emailErr").innerHTML= "*Invalid email format";
      return false;
    }
    else {
      document.getElementById("emailErr").innerHTML= "";
    }
  }



    if(message.value.trim()=="")
        {
          document.getElementById("messageErr").innerHTML= "Message is required";
          return false;
        }
        else {

          if(message.value.length<20)
          {
            document.getElementById("messageErr").innerHTML="Message must not be less than eight (20) characters";
            return false;
          }
          else {
            document.getElementById("messageErr").innerHTML="";
          }

          }

return true;


}


function checkYourname()
{
  var name= document.getElementById("yourname");
  if(name.value.trim()=="" )
  {
     document.getElementById("yournameErr").innerHTML= "*Name is requied";
     return false;
  }
  else {

  if(name.value.split(" ").length<2)
       {
        document.getElementById("yournameErr").innerHTML= "*Name must contains at least two words ";
        return false;
       }
       document.getElementById("yournameErr").innerHTML= "";

  }
}

function checkEmail()
{
  var email= document.getElementById("email");
  if(email.value.trim()=="")
  {
    document.getElementById("emailErr").innerHTML= "*email is requied";
    return false;
  }
  else {
    var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
   if(!email.value.match(mailformat))
    {
      document.getElementById("emailErr").innerHTML= "*Invalid email format";
      return false;
    }
    else {
      document.getElementById("emailErr").innerHTML= "";
    }
  }

}


function checkAdminID()
{
    var adminid= document.getElementById("adminid");
  if(adminid.value.trim()=="")
  {
    document.getElementById("adminErr").innerHTML= "*Admin id is requied";
    return false;
  }
  else {
    var idformat = ^[0-9];
   if(!email.value.match(idformat))
    {
      document.getElementById("adminidErr").innerHTML= "*Invalid admin id format";
      return false;
    }
    else {
      document.getElementById("adminErr").innerHTML= "";
    }
  }

 

}



function checkMessage()
{
  var message=document.getElementById("message");

  if(message.value.trim()=="")
      {
        document.getElementById("messageErr").innerHTML= "Message is required";
        return false;
      }
      else {

        if(message.value.length<20)
        {
          document.getElementById("messageErr").innerHTML="message must not be less than eight (20) characters";
          return false;
        }
        else {
          document.getElementById("messageErr").innerHTML="";
        }

        }
}


</script>

<?php

if(isset($_POST['submit']))
{

echo $_POST['yourname'];
echo $_POST['email'];
echo $_POST['adminid'];
echo $_POST['message'];

   
  
}

?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>

    <form  onsubmit="return validation()" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <br>
     <h2>Send message</h2>
      <br>
      Your Name: <input type="text" name="yourname" id="yourname" onkeyup="checkYourname()" onblur="checkYourname()" >
      <span class="error" id="yournameErr">*<?php if(!empty($_GET['yournameErr'])){echo $_GET['yournameErr'];} ?></span><br>
     
       E-mail: <input type="text" name="email" id="email" onkeyup="checkEmail()" onblur="checkEmail()">
      <span class="error" id="emailErr">* <?php if(!empty($_GET['emailErr'])){echo $_GET['emailErr'];} ?></span><br>
      
      ID of admin <input type="number" min="0" max="10" required name="adminid" id="adminid" onkeyup="checkAdminID()" onblur="checkAdminID()">
      <span class="error" id="adminidErr">* <?php if(!empty($_GET['adminidErr'])){echo $_GET['adminidErr'];} ?></span><br>
      
      

      Message: <input type="text" name="message" size="750" id="message" onkeyup="checkMessage()" onblur="checkMessage()">
      <span class="error" id="messageErr">* <?php if(!empty($_GET['messageErr'])){echo $_GET['messageErr'];} ?></span>
      <br>


      <input type="submit" name="submit" value="Submit">
    </form>

  </body>
</html>