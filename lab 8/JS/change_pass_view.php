<script type="text/javascript">

function validation()
{

  var cpassword= document.getElementById("cpassword");
  var npassword=document.getElementById("npassword");
  var rnpassword=document.getElementById("rnpassword");


  if(cpassword.value.trim()=="")
  {
    document.getElementById("currentPasswordErr").innerHTML= "*Password is requied";
    return false;
  }
  else {
    if(cpassword.value.length<8)
    {
    document.getElementById("currentPasswordErr").innerHTML= "*Password must not be less than eight (8) characters";
      return false;
    }
    else {
      document.getElementById("currentPasswordErr").innerHTML= "";
    }
}

  if(npassword.value.trim()=="")
  {
    document.getElementById("newPasswordErr").innerHTML= "*Password is requied";
    return false;
  }
  else {
    if(npassword.value.length<8)
    {
    document.getElementById("newPasswordErr").innerHTML= "*Password must not be less than eight (8) characters";
      return false;
    }
    else {
      document.getElementById("newPasswordErr").innerHTML= "";
    }
}

 if(rnpassword.value.trim()=="")
 {
 document.getElementById("retypePasswordErr").innerHTML= "*Confirm Password is required";
   return false;
 }
 else {
    if(!(npassword.value==rnpassword.value))
    {
      document.getElementById("retypePasswordErr").innerHTML= "*Password and confirm password have to be same";
    return false;
    }
    else {
      document.getElementById("retypePasswordErr").innerHTML= "";
    }

}


return true;

}


function checkCurrentpassword()
{
  var cpassword= document.getElementById("cpassword");

  if(cpassword.value.trim()=="")
  {
    document.getElementById("currentPasswordErr").innerHTML= "*Password is requied";
    return false;
  }
  else {
    if(cpassword.value.length<8)
    {
    document.getElementById("currentPasswordErr").innerHTML= "*Password must not be less than eight (8) characters";
      return false;
    }
    else {
      document.getElementById("currentPasswordErr").innerHTML= "";
    }
}
}

function checkNewpassword()
{
  var npassword= document.getElementById("npassword");
  if(npassword.value.trim()=="")
  {
    document.getElementById("newPasswordErr").innerHTML= "*Password is requied";
    return false;
  }
  else {
    if(npassword.value.length<8)
    {
    document.getElementById("newPasswordErr").innerHTML= "*Password must not be less than eight (8) characters";
      return false;
    }
    else {
      document.getElementById("newPasswordErr").innerHTML= "";
    }
}
  }


function checkRetypepassword()
{
    var rnpassword= document.getElementById("rnpassword");

    if(rnpassword.value.trim()=="")
    {
    document.getElementById("retypePasswordErr").innerHTML= "*Confirm Password is required";
      return false;
    }
    else {
       if(!(npassword.value==rnpassword.value))
       {
         document.getElementById("retypePasswordErr").innerHTML= "*Password and confirm password have to be same";
       return false;
       }
       else {
         document.getElementById("retypePasswordErr").innerHTML= "";
       }

   }
}



</script>


<?php 

if(isset($_POST['submit']))
{

    echo $_POST['npassword'];
}

?>


<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>



    <form  onclick="return validation()" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <br>
        <h2>Change Password</h2>
        <br><br />
        Current Password: <input type="text" name="cpassword" id="cpassword" onkeyup="checkCurrentpassword()" onblur="checkCurrentpassword()">

        <span id="currentPasswordErr">* </span>
        <br><br>
        <span >New Password:</span>
        <input type="text" name="npassword" id="npassword" onkeyup="checkNewpassword()" onblur="checkNewpassword()" >
        <span id="newPasswordErr">* </span>

        <br><br>
        <span >Retype New Password:</span>
        <input type="text" name="rnpassword" id="rnpassword" onkeyup="checkRetypepassword()" onblur="checkRetypepassword()">
        <span id="retypePasswordErr">* </span>

        <br><br>
        <input type="submit" name="submit" value="Submit">
        <br><br>


    </form>


  </body>
</html>