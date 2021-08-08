<?php


require_once '../controller/info_volunteer_controller.php';
$data = fetch_volunteer($_SESSION['username']);
if($data!=NULL)
{
  foreach ($data as $i => $volunteer):


       $name= $volunteer['NAME'] ;
       $email=$volunteer['EMAIL'];
       $birth=$volunteer['BIRTH'];
       $gender= $volunteer['GENDER'] ;
  endforeach;
$birth=str_replace('/','', $birth );
$birthDate=$birth[0].$birth[1];
$birthMonth=$birth[2].$birth[3];
$birthYear=$birth[4].$birth[5].$birth[6].$birth[7];


}

else{ echo header('Location:../view/login_volunteer_view.php');}
 ?>

        <?php
include("../view/head_dashboard.php");
?>
<!DOCTYPE html>
<html>
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
	<title></title>
</head>
<body>

     <fieldset align = "right">
<div class="topnav">


<a href='dashboard_volunteer_view.php'>Dashboard</a>
<a href='volunteer_view_profile.php'>View Profile</a>
<a href='upload.php'>Change Profile Picture</a>
<a href='change_pass_view.php'>Change Password</a>
<a href ='../controller/logout_volunteer_controller.php'>Logout </a>
  </div>
         
     </fieldset>

 <form action="../controller/update_volunteer_controller.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input value="<?php echo $name ?>" type="text" id="name" name="name"><br>
  <label for="email">Email:</label><br>
  <input value="<?php echo $email ?>" type="text" id="email" name="email"><br>
  Date of Birth: <input type="text" size="1" placeholder="dd" name="birthDate" value="<?php echo $birthDate ?>"> /
  <input type="text" size="1" placeholder="mm" name="birthMonth" value="<?php echo $birthMonth ?>"> /
  <input type="text" size="2" placeholder="yyyy" name="birthYear" value="<?php echo $birthYear ?>"> <br />
  <input type="submit" name = "updateVolunteer" value="Update">
  <input type="reset">
</form>

</body>
</html>

    <?php
include("../model/foot.php");
?>