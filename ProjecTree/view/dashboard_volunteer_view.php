       <?php
include("../view/head_dashboard.php");
?>



<?php
session_start();

if(isset($_SESSION['username']))
{

  echo "<h1 align='middle'> Welcome ".$_SESSION['username']."</h2>";



}
else {
  echo header('Location:../view/login_volunteer_view.php');
}
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
    
    <title></title>
  </head>
  <body>
    <fieldset align = "right">
<div class="topnav">


<a href='dashboard_volunteer_view.php'>Dashboard</a>
<a href='volunteer_view_profile.php'>View Profile</a>
<a href='edit_volunteer_view.php'>Edit Profile</a>
<a href='upload.php'>Change Profile Picture</a>
<a href='change_pass_view.php'>Change Password</a>
<a href ='../controller/logout_volunteer_controller.php'>Logout </a>
  </div>
         
     </fieldset>
  </body>
</html>


<?php
include("../model/foot.php");
?>