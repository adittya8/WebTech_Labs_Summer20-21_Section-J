
<?php
session_start();

if(isset($_SESSION['username']))
{

  ?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script type="text/javascript" src="../javascript/viewprofile.js"></script>
    <meta charset="utf-8">
    <title></title>
     <link rel="stylesheet" href="../css/viewProfile.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


  </head>
  <body>

    <ul>
       <li style="float:left"><a href="../homepage.php"> ProjecTree</a></li>
       <li><a href="#about">About</a></li>
       <li><a href="#contact">Contact</a></li>
      <li><a href="../homepage.php">Home</a></li>
    </ul>


   <div class="w3-sidebar w3-bar-block w3-light-grey" style="width:25%">
     <a href="dashboard.php" class="w3-bar-item w3-button">Dashboard</a><br>
     <a href="donate.php" class="w3-bar-item w3-button">Donate</a><br>
     <a href="donationHistory.php" class="w3-bar-item w3-button">Donation History</a><br>
     <a href="viewProfile.php" class="w3-bar-item w3-button w3-hover-black">View Profile</a><br>
     <a href="editProfile.php" class="w3-bar-item w3-button w3-hover-green">Edit Profile</a><br>
     <a href="changePassword.php" class="w3-bar-item w3-button w3-hover-red">Change Password</a><br>
     <a href="../controller/logout.php" class="w3-bar-item w3-button w3-hover-red">Logout</a><br>

</div>


  <?php

  require_once '../controller/Info.php';

  if(isset($_SESSION['username']))
  {
  $data = fetch($_SESSION['username']);


    if($data!=NULL)
    {
      foreach ($data as $i => $donor):

           $name= $donor['D_NAME'] ;
           $email=$donor['EMAIL'];
           $username= $donor['USERNAME'];
           $phone= $donor['PHONE'] ;
           
      endforeach;

      ?>


      <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>



  </head>
  <body>
     <div style="margin-left:25%">
      <div class="w3-container w3-dark-white" style="margin-top:0px">

    
    <label for="name">Name: </label><?php echo $name ?><br>
    <label for="email">Email: </label><?php echo $email ?><br>
    <label for="username">Username: </label><?php echo $username ?><br>
    <label for="phone">Phone: </label><?php echo $phone ?><br>
  </div>
</div>

  </body>
</html>
    
      <?php


    }
  }
}

  else {
    header("location:../view/login.php");
  }
   ?>

</div>



</div>



  </body>
</html>

