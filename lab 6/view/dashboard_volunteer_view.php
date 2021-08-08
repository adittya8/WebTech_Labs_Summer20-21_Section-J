       <?php
include("../model/head_dashboard.php");
?>



<?php
session_start();

if(isset($_SESSION['username']))
{

 echo "<br><a href='dashboard_volunteer_view.php'>Dashboard</a>";
 echo "<br><a href='volunteer_view_profile.php'>View Profile</a>";
 echo "<br><a href='edit_volunteer_view.php'>Edit Profile</a>";
 // echo "<br><a href='upload.php'>Change Profile Picture</a>";
  echo "<br><a href='change_pass_view.php'>Change Password</a>";
  echo "<br><a href ='../controller/logout_volunteer_controller.php'>Logout </a>";
  echo "<h1 align='middle'> Welcome ".$_SESSION['username']."</h2>";



}
else {
  echo header('Location:../view/login_volunteer_view.php');
}
 ?>

<?php
include("../model/foot.php");
?>