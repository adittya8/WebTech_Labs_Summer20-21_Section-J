<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style >
      .error {color: #FF0000;}
    </style>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../CSS/login/loginVolunteerCSS2.css">
    <title></title>
  </head>
  <body>
    <?php
include("../view/head.php");
?>
    <form style="border:3px; border-style:solid; border-color:gray; padding: 1em;" method="post" action="../controller/login_volunteer_controller.php">

        User Name: <input type="text" name="username" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>">
        <br><br>
        Password: <input type="text" name="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>">
        <br><br>
        <br>
        <input type="checkbox"  name="remember">
         <label for="remember">Remember Me</label>
         <br><br>
         <input type="submit" name="submit" value="Submit">
          <meta ><a href ="forget_pass_view.php">Forget Password? </a></meta>
    </form>
        <?php
include("../model/foot.php");
?>
  </body>
</html>