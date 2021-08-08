<script type="text/javascript">


  function validation()
  {
    var username= document.getElementById("username");
    var password= document.getElementById("password");

    //alert("hello");

    if(username.value.trim()=="" )
    {
       document.getElementById("nameErr").innerHTML= "*Username is requied";
       return false;
    }
    else{
      document.getElementById("nameErr").innerHTML= "";
    }

   if(password.value.trim()=="" )
    {
       document.getElementById("passwordErr").innerHTML= "*Password is requied";
       return false;
    }
    else{
      document.getElementById("passwordErr").innerHTML= "";
    }


      return true;

  }

  function checkUsername()
  {
    var username= document.getElementById("username");
    if(username.value.trim()=="" )
    {
       document.getElementById("nameErr").innerHTML= "*Username is requied";
       return false;
    }
    else{
      document.getElementById("nameErr").innerHTML= "";
    }
  }

  function checkPassword()
  {
    if(password.value.trim()=="" )
     {
        document.getElementById("passwordErr").innerHTML= "*Password is requied";
        return false;
     }
     else{
       document.getElementById("passwordErr").innerHTML= "";
     }
  }
</script>


<?php 

if(isset($_POST['submit']))
{

  echo $_POST['username'];
  echo  $_POST['password'];
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <style >


    </style>
    
    <title></title>
  </head>
  <body>







    <form name="loginForm"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateForm()" method="post">
    <h2>Sign In</h2>


        Username: <input type="text" onkeydown="checkUsername()" onblur="checkUsername ()" placeholder="Enter Username" name="username" id="username">
        <span id="nameErr">* </span>


        <br>
        Password: <input type="password" onkeydown="checkPassword()" onblur="checkPassword()" placeholder="Enter Password" name="password" id="password">
        <span id="passwordErr">* </span>
        <br>
        <input type="checkbox"  name="remember" value="remembered">
         <label for="remember">Remember Me</label><br>

         <input type="submit" name="submit" value="Submit"><br>
          <a href ="forget password.php">Forget Password? </a>

    </form>

  </body>
</html>