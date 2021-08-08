<link rel="stylesheet" href="../CSS/signup/signupVolunteerCSS2.css">




<?php
include("../view/head_dashboard.php");

require_once '../controller/info_volunteer_controller.php';



if(isset($_SESSION['username']))
{
$data = fetch_volunteer($_SESSION['username']);


  if($data!=NULL)
  {
    foreach ($data as $i => $volunteer):

         $name= $volunteer['NAME'] ;
         $email=$volunteer['EMAIL'];
         $username= $volunteer['USERNAME'] ;
         $birth=$volunteer['BIRTH'];
         $gender= $volunteer['GENDER'] ;
    endforeach;

    echo "<br />$name";
    echo "<br />$email";
    echo "<br />$username";
    echo "<br />$birth";
    echo "<br />$gender";
    echo "</div>";
   echo "<div class='profile'>";
  }
}

else{ echo header('Location:../view/login_volunteer_view.php');}

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