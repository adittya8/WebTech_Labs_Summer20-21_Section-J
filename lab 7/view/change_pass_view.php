<?php
if(isset($_SESSION['username'])){
  session_start();
  
}

?>

        <?php
include("../view/head_dashboard.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    
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
<fieldset align = "right">
<div class="topnav">


<a href='dashboard_volunteer_view.php'>Dashboard</a>
<a href='edit_volunteer_view.php'>Edit Profile</a>
<a href='upload.php'>Change Profile Picture</a>
<a href ='../controller/logout_volunteer_controller.php'>Logout </a>
  </div>
         
     </fieldset>

    <p><h3>Change Password</h3></p>
    <form style="border:3px; border-style:solid; border-color:gray; padding: 1em;" method="post" action="../controller/changepass_volunteer_controller.php">
        Current Password: <input type="text" name="cpassword" >
        <br><br>
        <span style="color:green">New Password:</span>
        <input type="text" name="npassword" >
        <br><br>
        <span style="color:Red">Retype New Password:</span>
        <input type="text" name="rnpassword" >
        <br><br>
        <input type="submit" name="submit" value="Submit">
        <br><br>
    </form>
    
  </body>
</html>
   <?php
include("../model/foot.php");
?>