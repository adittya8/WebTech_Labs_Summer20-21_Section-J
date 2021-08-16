

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      
    <style >
      .error {color: #FF0000;}
    </style>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../CSS/login/loginVolunteerCSS2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script type="text/javascript" src="../js/login.js"></script>
    <title></title>
  </head>
  <body>
    <?php
include("../view/head.php");
?>
<form class="box" method="post" action="../controller/login_volunteer_controller.php">
    <h1>Login</h1>
  <br>
  <label for="username" >Username: </label>
  <input type="text" placeholder="username" id="username" name="username" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" onkeyup="change(this)" onblur="revert(this)">
  <span class="error" id="usernameErr"><?php if(!empty($_GET['userNameErr'])){echo $_GET['userNameErr'];}?></span><br><hr>
  <label for="password" >Password: </label>
  <input type="password" placeholder="password" id="password" name="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" onkeyup="change(this)" onblur="revert(this)">
  <span class="error" id="passwordErr"><?php if(!empty($_GET['passwordErr'])){echo $_GET['passwordErr'];}?></span><br><hr>
  
  <input type="checkbox" id="remember" name="remember" value="remember">
  <label for="remember" style="color:white"> Remember Me</label><br>
  
  <input type="submit" id="submit" name="submit" value="Login"><br><hr>
          <meta ><a href ="forget_pass_view.php">Forget Password? </a></meta>

    </form>
        <?php
include("../model/foot.php");
?>
  </body>
</html>