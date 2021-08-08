<script type="text/javascript">

function validation()
{
  var name= document.getElementById("name");
  var email= document.getElementById("email");
  var password= document.getElementById("password");
  var username= document.getElementById("username");
  var confirmpassword=document.getElementById("confirmpassword");
  var birth=document.getElementById("birth");
  var gender= document.getElementsByName("gender");

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

  if (username.value.trim()=="") {
    document.getElementById("usernameErr").innerHTML=  "* User Name is required";
    return false;
  }
  else {
    document.getElementById("usernameErr").innerHTML=  "";
  }


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

if(birth.value=="")
{
  document.getElementById("birthErr").innerHTML= "*Birthday is requied";
 return false;
}
else {

var inputdate = new Date(birth.value);
var today = new Date();
if (inputdate.getTime() > today.getTime()) {
   document.getElementById("birthErr").innerHTML= "Birth date cannot be grater than current date ";
}

  else {
      document.getElementById("birthErr").innerHTML= "";
  }
}



if(!(gender[0].checked || gender[1].checked || gender[2].checked))
{
document.getElementById("genderErr").innerHTML= "*Gender is requied";
return false;
}
else {
document.getElementById("genderErr").innerHTML= "";
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

    var inputdate = new Date(birth.value);
  var today = new Date();
  if (inputdate.getTime() > today.getTime()) {
     document.getElementById("birthErr").innerHTML= "Birth date cannot be grater than current date ";
  }

    else {
        document.getElementById("birthErr").innerHTML= "";
    }

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


if(isset($_POST['submit']))
{

echo $_POST['name'];
echo $_POST['email'];
echo $_POST['username'];
echo $_POST['confirmpassword'];
echo $_POST['birth'];
echo $_POST['gender'];
   
  
}

?>

<!DOCTYPE HTML>
<html>
<body>

<form  onclick="return validation()" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateForm()">
  <h2>Sign Up</h2>

  Name: 
  <input type="text" onkeypress="checkName()" onblur="checkName()" name="name" id="name" placeholder="Enter Name">
  
  <span  id="nameErr">* <?php if(!empty($_GET['nameErr'])){echo $_GET['nameErr'];} ?></span>
  <br>
   E-mail:
    <input type="text" onkeypress="checkEmail()" onblur="checkEmail()" name="email" id="email" placeholder="Enter Email">
  
  <span  id="emailErr">* <?php if(!empty($_GET['emailErr'])){echo $_GET['emailErr'];} ?></span>
  <br>
  Username: 
  <input type="text" onkeypress="checkUsername()" onblur="checkUsername()" name="username" id="username" placeholder="Enter Username">
  
  <span  id="usernameErr">* <?php if(!empty($_GET['usernameErr'])){echo $_GET['usernameErr'];} ?></span>
  <br>
  Password:
  <input type="password"  onkeydown="checkPassword()" onblur="checkPassword()" name="password" id="password" placeholder="Enter Password" >
  
  <span  id="passwordErr">* <?php if(!empty($_GET['passwordErr'])){echo $_GET['passwordErr'];} ?></span>
  <br>

  Comfirm Password:
   <input type="password" onkeypress="checkConfirmPassword()" onblur="checkConfirmPassword()" name="confirmpassword" id="confirmpassword" placeholder="Enter Password">
  
  <span  id="confirmpasswordErr">* <?php if(!empty($_GET['$confirmpasswordErr'])){echo $_GET['confirmpasswordErr'];} ?></span>
  <br>

  Date of Birth:
     
  <input type="date" size="1" value=""  name="birth" id="birth" onkeyup="checkBirth()" onblur="checkBirth()" >
  <span  id="birthErr">* <?php if(!empty($_GET['birthErr'])){echo $_GET['birthErr'];} ?></span>
  <br>

  Gender:

  
  <input type="radio" onclick="checkGender()" onblur="checkGender()" name="gender" id="female" value="female">
  <label for="female">Female</label>
  <input type="radio" onclick="checkGender()" onblur="checkGender()" name="gender" id="male" value="male">
  <label for="male">Male</label>
  <input type="radio" onclick="checkGender()" onblur="checkGender()" name="gender" id="other"  value="other">
  <label for="other">Other</label>

 
  <span id="genderErr">* <?php if(!empty($_GET['genderErr'])){echo $_GET['genderErr'];} ?></span>
  <br>

  <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>