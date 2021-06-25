<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style>
    input[type=submit]
{
  background-color: #00a3cc;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
  </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
     <?php
     session_start();
     if (!empty($_SESSION['name'])) {
    include("head_dashboard.php");
    }
    else{
    $msg="error";
    echo $msg;
    header("location:login.php");
    
  }
    ?>
    <p><h2>Profile Picture</h2></p>

    <table align="right">

          
          
          <tr> <td colspan="2" align="right" valign="top"><?php  echo "<br><a href='change_pass.php'>Change password</a>";?> </td></tr>
          <tr> <td colspan="2" align="right" valign="top"><?php  echo "<br><a href='edit_profil.php'>Edit profile</a>";?> </td></tr>
          <tr> <td colspan="2" align="right" valign="top"><?php echo "<br><a href='view_profile.php'>View profile</a>";?> </td></tr>
          <tr> <td colspan="2" align="right" valign="top"><?php echo "<br><a href='dashboard.php'>Dashboard</a>";?> </td></tr>
           
          

         

         </table>
    <img src="pic/new.jpg" alt="" width="170" height="200">
    <br>
    <form class="" action="upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="fileToUpload" id="fileToUpload">
      <br><br>
      <input type="submit" value="Submit" name="submit">
    </form>
    <?php
    include('foot.php');
     ?>



  </body>
</html>