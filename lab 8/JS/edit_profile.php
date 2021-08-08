<script type="text/javascript">

function validation()
{
  var name= document.getElementById("name");
  var email= document.getElementById("email");
  var birth=document.getElementById("birth");

  //alert("hello");

  if(name.value.trim()=="" )
  {
     document.getElementById("nameErr").innerHTML= "*Name is requied";
     return false;
  }
  else {

  if(name.value.split(" ").length<2)
       {
        document.getElementById("nameErr").innerHTML= "*Name must contains at least two words ";
        return false;
       }
       document.getElementById("nameErr").innerHTML= "";

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






if(birth.value=="")
{
document.getElementById("birthErr").innerHTML= "*Birthday is requied";
return false;
}
else {
document.getElementById("birthErr").innerHTML= "";
}


return true;


}


function checkName()
{
  var name= document.getElementById("name");
  if(name.value.trim()=="" )
  {
     document.getElementById("nameErr").innerHTML= "*Name is requied";
     return false;
  }
  else {

  if(name.value.split(" ").length<2)
       {
        document.getElementById("nameErr").innerHTML= "*Name must contains at least two words ";
        return false;
       }
       document.getElementById("nameErr").innerHTML= "";

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

function checkUsername()
{
    var username= document.getElementById("username");

  if (username.value.trim()=="") {
    document.getElementById("usernameErr").innerHTML=  "* User Name is required";
    return false;
  }
  else {
    document.getElementById("usernameErr").innerHTML=  "";
  }
}

function checkPassword()
{
    var password= document.getElementById("password");
  if(password.value.trim()=="")
  {
    document.getElementById("passwordErr").innerHTML= "*Password is requied";
    return false;
  }
  else {
    if(password.value.length<8)
    {
    document.getElementById("passwordErr").innerHTML= "*Password must not be less than eight (8) characters";
      return false;
    }
    else {
      document.getElementById("passwordErr").innerHTML= "";
    }
}
}

function checkConfirmPassword()
{
  var confirmpassword=document.getElementById("confirmpassword");

  if(confirmpassword.value.trim()=="")
  {
  document.getElementById("confirmpasswordErr").innerHTML= "*Confirm Password is required";
    return false;
  }
  else {
     if(!(password.value==confirmpassword.value))
     {
       document.getElementById("confirmpasswordErr").innerHTML= "*Password and confirm password have to be same";
     return false;
     }
     else {
       document.getElementById("confirmpasswordErr").innerHTML= "";
     }

 }
}

function checkBirth()
{
  var birth=document.getElementById("birth");

  if(birth.value=="")
  {
    document.getElementById("birthErr").innerHTML= "*Birthday is requied";
  return false;
  }
  else {
    document.getElementById("birthErr").innerHTML= "";
  }
}

function checkGender()
{
  var gender= document.getElementsByName("gender");

  if(!(gender[0].checked || gender[1].checked || gender[2].checked))
  {
    document.getElementById("genderErr").innerHTML= "*Gender is requied";
    return false;
  }
  else {
    document.getElementById("genderErr").innerHTML= "";
  }
}

</script>


<?php 


if(isset($_POST['updateVolunteer']))
{

  echo $_POST['name'];

  echo $_POST['email'];

   echo $_POST['birth'];
   
  
}

?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

 <form  onsubmit="return validation()"action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">

 <br><br>
<h2>Edit Profile</h2>
 <br><br><br>
  <label for="name">Name:</label>
  <input value="" type="text" id="name" name="name" onkeyup="checkName()" onblur="checkName()">
  <span id="nameErr">* <?php if(!empty($_GET['nameErr'])){echo $_GET['nameErr'];} ?></span> <br>


  <label for="email">Email:</label>

  <input value="" type="text" id="email" name="email" onkeyup="checkEmail()" onblur="checkEmail()">
  <span id="emailErr">* <?php if(!empty($_GET['emailErr'])){echo $_GET['emailErr'];} ?></span>
  <br>



  Date of Birth:
  <input type="date" size="1" value=""  name="birth" id="birth" onkeyup="checkBirth()" onblur="checkBirth()" >
  <span id="birthErr">* <?php if(!empty($_GET['birthErr'])){echo $_GET['birthErr'];} ?></span><br><br>
  


  <input type="submit" name = "updateVolunteer" value="Update">
</form>
