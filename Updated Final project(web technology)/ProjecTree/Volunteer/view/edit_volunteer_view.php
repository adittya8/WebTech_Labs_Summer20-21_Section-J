<?php

session_start();
if(isset($_SESSION['username'])){
require_once '../controller/info_volunteer_controller.php';
$data = fetch_volunteer($_SESSION['username']);
if($data!=NULL)
{
  foreach ($data as $i => $volunteer):


       $name= $volunteer['NAME'] ;
       $email=$volunteer['EMAIL'];
       $birthday=$volunteer['BIRTH'];
       $gender= $volunteer['GENDER'] ;
  endforeach;




}

else{ echo header('Location:../view/login_volunteer_view.php');}
 ?>

        <?php
include("../view/head_dashboard.php");
?>
<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="../js/edit_profile.js"></script>
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
	<title></title>
</head>
<body>

     

 <form action="../controller/update_volunteer_controller.php" method="POST" enctype="multipart/form-data">
  <br>
  <label for="name" style="font-family: Raleway; font-size: 20px; color: #4d0000;"> Name </label> 
  <input value="<?php echo $name ?>" type="text" id="name" name="name" onfocus="change(this)" onkeyup="change(this)" onblur="revert(this)">
  <span class="error" id="nameErr"><?php if(!empty($_GET['nameErr'])){echo $_GET['nameErr'];} ?></span>
  <br><hr>
  <label for="email" style="font-family: Raleway; font-size: 20px; color: #4d0000;"> E-mail </label> 
  <input value="<?php echo $email ?>" type="text" id="email" name="email" onfocus="change(this)"  onkeyup="change(this)" onblur="revert(this)">
  <span class="error" id="emailErr"><?php if(!empty($_GET['emailErr'])){echo $_GET['emailErr'];}?></span>
  <br><hr>
  <fieldset>
  <legend>Gender</legend>
  Gender: <?php if (isset($_SESSION['username'])) echo $gender;?><br>
  <input type="radio" name="gender" id="gender" value="Female" onfocus="change(this)"  onkeyup="change(this)" onblur="revert(this)">Female
  <input type="radio" name="gender" id="gender" value="Male" onfocus="change(this)"  onkeyup="change(this)" onblur="revert(this)">Male
  <input type="radio" name="gender" id="gender" value="Other" onfocus="change(this)"  onkeyup="change(this)" onblur="revert(this)">Other
  <span class="error" id="genderErr"><?php  if(!empty($_GET['genderErr'])){echo $_GET['genderErr'];}?></span>
  </fieldset>
  <hr>
  <fieldset>
  <legend>Date Of Birth</legend>
  <input value="<?php echo $birthday ?>" type="date" id="birthday" name="birthday" onchange="dobValidate(this)" onblur="dobValidate(this)">
  <span class="error" id="birthdayErr"><?php if(!empty($_GET['dobErr'])){echo $_GET['dobErr'];}?></span>
  <br></fieldset><hr>
  <input type="submit" name = "updateVolunteer" value="Update">
  <input type="reset">
</form>

</body>
</html>

    <?php
include("../model/foot.php");

}
else {
header("location:../view/login_volunteer_view.php");
}
?>