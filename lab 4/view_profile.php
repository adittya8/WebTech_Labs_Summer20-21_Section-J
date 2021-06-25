<?php
session_start();
include('head_dashboard.php');


         ?>
<table align="right">

          
          <tr> <td colspan="2" align="right" valign="top"> </td><p><h2>View Profile</h2></p></tr>
          <tr> <td colspan="2" align="right" valign="top"><?php  echo "<br><a href='change_pass.php'>Change password</a>";?> </td></tr>
          <tr> <td colspan="2" align="right" valign="top"><?php  echo "<br><a href='edit_profil.php'>Edit profile</a>";?> </td></tr>
          <tr> <td colspan="2" align="right" valign="top"><?php echo "<br><a href='profile_picture_upload.php'>Profile picture upload</a>";?> </td></tr>
          <tr> <td colspan="2" align="right" valign="top"><?php echo "<br><a href='dashboard.php'>Dashboard</a>";?> </td></tr>
           
          

         

         </table>




         <?php



if(isset($_SESSION['name']))
{

  echo "<br />";
  echo "<img align:'right' src='pic/fav.jpg' alt='' width='170' height='200'>";
  echo "<br />";
  echo "<br />Name: ".$_SESSION['name'];
  echo "<br />Username: ".$_SESSION['username'];
  echo "<br />Email: ".$_SESSION['email'];
  echo "<br />Gender: ".$_SESSION['gender'];
  echo "<br />Date of Birth: ".$_SESSION['birthday'];
    include('foot.php');




}
else {
  header("location: login.php");
}

 ?>

 