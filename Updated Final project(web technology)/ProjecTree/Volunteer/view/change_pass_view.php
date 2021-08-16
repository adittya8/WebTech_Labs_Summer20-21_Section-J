<?php
session_start();
if(isset($_SESSION['username'])){
  
  
include("../view/head_dashboard.php");

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script type="text/javascript" src="../js/change_pass.js"></script>
<style>

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 15px;
}

</style>
      <link rel="stylesheet" href="../CSS/login/loginVolunteerCSS2.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <p><h3>Change Password</h3></p>
    <form style="border:3px; border-style:solid; border-color:gray; padding: 1em;" method="post" action="../controller/changepass_volunteer_controller.php">
        <label for="cpassword" style="font-family: Raleway; font-size: 20px; color: #4d0000;"> Current Password: </label> 
  <input type="text" id="cpassword" name="cpassword" onfocus="change(this)" onkeyup="change(this)" onblur="revert(this)">
  <span class="error" id="cpasswordErr"><?php if(!empty($_GET['cpasswordErr'])){echo $_GET['cpasswordErr'];} ?></span>
  <br><hr>

  <label for="npassword" style="font-family: Raleway; font-size: 20px; color: #4d0000;"> New Password: </label> 
  <input type="text" id="npassword" name="npassword" onfocus="change(this)" onkeyup="change(this)" onblur="revert(this)">
  <span class="error" id="npasswordErr"><?php if(!empty($_GET['npasswordErr'])){echo $_GET['npasswordErr'];} ?></span>
  <br><hr>
  <label for="rnpassword" style="font-family: Raleway; font-size: 20px; color: #4d0000;"> Retype New Password: </label> 
  <input type="text" id="rnpassword" name="rnpassword" onfocus="change(this)"  onkeyup="change(this)" onblur="revert(this)">
  <span class="error" id="rnpasswordErr"><?php if(!empty($_GET['rnpasswordErr'])){echo $_GET['rnpasswordErr'];}?></span>
  <br><hr>
        <input type="submit" name="submit" value="Submit">
        <br><br>
    </form>
    
  </body>
</html>
   <?php
include("../model/foot.php");
}

else{
  header("location:../view/login_volunteer_view.php");
}
?>