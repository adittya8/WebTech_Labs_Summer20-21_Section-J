<?php

session_start();

if(isset($_SESSION['username']))
{

  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <script type="text/javascript" src="../javascript/Registration.php"></script>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/Registration.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


  </head>
  <body>

    <ul>
      <li style="float:left"><a href="../../homepage.php"> ProjecTree</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#contact">Contact</a></li>
     <!-- <li><a href="#news">Registration</a></li> -->
     <li><a href="../../homepage.php">Home</a></li>
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

<div style="margin-left:25%">

<div class="w3-container w3-dark-white" style="margin-top:50px">
  <form class="loginbox" onclick="return validation()" method="post" action="../controller/donate.php">


    <p>Donated to:</p> <input type="text" onkeypress="checkName()" onblur="checkName()" name="name" id="name" placeholder="Enter Name">
  
    <span class="error" id="nameErr">* <?php if(!empty($_GET['nameErr'])){echo $_GET['nameErr'];} ?></span>
    <br>
    <p>Location:</p> <input type="text" onkeypress="checkLocation()" onblur="checkLocation()" name="location" id="location" placeholder="Enter location">
    
    <span class="error" id="locationErr">* <?php if(!empty($_GET['locationErr'])){echo $_GET['locationErr'];} ?></span>
    <br>

    <p>Amount:</p> <input type="number" onkeypress="checkAmount()" onblur="checkAmount()" name="amount" id="amount" placeholder="Enter amount ">

    <span class="error" id="amountErr">* <?php if(!empty($_GET['amountErr'])){echo $_GET['amountErr'];} ?></span>
    <br><br>


    <input type="submit" name="submit" value="Submit">
  </form>
</div>



</div>



  </body>
</html>





<?php
//include("../Model/foot.php");

}
else {
header("location:../view/login.php");
}
 ?>
