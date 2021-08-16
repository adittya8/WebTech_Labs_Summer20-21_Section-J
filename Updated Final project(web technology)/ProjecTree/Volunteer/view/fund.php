<?php

session_start();

if(isset($_SESSION['username']))
{
include("../view/head_dashboard.php");
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <script type="text/javascript" src="../js/fund.js"></script>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


  </head>
  <body>



<div class="w3-container w3-dark-white" style="margin-top:50px">
  <form class="loginbox" onclick="return validation()" method="post" action="../controller/fund.php">

   <p>Your volunteer ID: </p> <input type="number" name="vid" id="vid" placeholder="Enter ID " onkeypress="checkID()" onblur="checkID()">

    <span class="error" id="vidErr">* <?php if(!empty($_GET['vidErr'])){echo $_GET['vidErr'];} ?></span>
    <br>
        <p>Amount: </p> <input type="number"  name="amount" id="amount" placeholder="Enter amount " onkeypress="checkAmount()" onblur="checkAmount()">

    <span class="error" id="amountErr">* <?php if(!empty($_GET['amountErr'])){echo $_GET['amountErr'];} ?></span>
    <br>

    <p>Nursery name: </p> <input type="text" name="nursery" id="nursery" placeholder="Enter nursery name" onkeypress="checkNursery()" onblur="checkNursery()">
  
    <span class="error" id="nurseryErr">* <?php if(!empty($_GET['nurseryErr'])){echo $_GET['nurseryErr'];} ?></span>
    <br>

   <br>


    <input type="submit" name="submit" value="Send">
  </form>
</div>



</div>



  </body>
</html>





<?php
include("../model/foot.php");

}
else {
header("location:../view/login_volunteer_view.php");
}
 ?>
