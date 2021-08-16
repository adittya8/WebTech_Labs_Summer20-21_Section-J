<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../CSS/style.css">
  <script type="text/javascript" src="../js/login.js"></script>
    <title>Login</title>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<form class="box" method="post" action="../controller/login_controller.php">
  <h1>Login</h1>
  <br>
  <label for="username" ></label>
  <input type="text" placeholder="Username" id="username" name="username" onkeyup="change(this)" onblur="revert(this)">
  <span class="error" id="usernameErr"><?php if(!empty($_GET['userNameErr'])){echo $_GET['userNameErr'];}?></span>
  
  <input type="password" placeholder="Password" id="password" name="password" onkeyup="change(this)" onblur="revert(this)">
  <span class="error" id="passErr"><?php if(!empty($_GET['passErr'])){echo $_GET['passErr'];}?></span>
  
  <input type="checkbox" id="reme" name="remember" value="remember">
  <label for="reme" style="color:white"> Remember Me</label><br>
  
  <input type="submit" id="submit" name="submit" value="Login">
  <a href="forget_password.php">Forgot Password?</a>

</form>
</body>
</html>

