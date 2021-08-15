    <?php
include("../view/head.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script type="text/javascript" src="../js/forget_pass.js"></script>
<style>
</style>
      <link rel="stylesheet" href="../CSS/login/loginVolunteerCSS2.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

 <form style="border:3px; border-style:solid; border-color:gray; padding: 1em;" method="post" action="../controller/forget_pass_controller.php">

  <label for="username" >Enter your username: </label>
  <input type="text" placeholder="username" id="username" name="username" onkeyup="change(this)" onblur="revert(this)">
  <span class="error" id="usernameErr"><?php if(!empty($_GET['usernameErr'])){echo $_GET['usernameErr'];}?></span>
         

   <br><br>
   <input type="submit" name="submit" value="Get password" class="btn btn-info" />
 </form>

  </body>
</html>
   <?php
include("../model/foot.php");
?>