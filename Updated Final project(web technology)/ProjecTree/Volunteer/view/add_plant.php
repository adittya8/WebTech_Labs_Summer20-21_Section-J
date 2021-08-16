<?php

session_start();

if(isset($_SESSION['username']))
{
include("../view/head_dashboard.php");
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <script type="text/javascript" src="../js/add_plant.php"></script>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


  </head>
  <body>



<div class="w3-container w3-dark-white" style="margin-top:50px">
  <form class="loginbox" onclick="return validation()" method="post" action="../controller/nursery.php">

   
<p>Nursery name: </p> <input type="text" name="name" id="name" placeholder="Enter nursery name " onkeypress="checkNursery()" onblur="checkNursery()">
    <span class="error" id="nameErr">* <?php if(!empty($_GET['nameErr'])){echo $_GET['nameErr'];} ?></span>
    <br>
        <p>No. of stocks: </p> <input type="number"  name="stock" id="stock" placeholder="Enter no. of stocks " onkeypress="checkStock()" onblur="checkStock()">

    <span class="error" id="stockErr">* <?php if(!empty($_GET['stockErr'])){echo $_GET['stockErr'];} ?></span>
    <br>

    <p>No. of variants: </p> <input type="number" name="variant" id="variant" placeholder="Enter no. of variants" onkeypress="checkVariant()" onblur="checkVariant()">
<span class="error" id="variantErr">* <?php if(!empty($_GET['variantErr'])){echo $_GET['variantErr'];} ?></span>
    <br>

    <p>Your volunteer ID: </p> <input type="number" name="vid" id="vid" placeholder="Enter volunteer ID " onkeypress="checkID()" onblur="checkID()">
  
    <span class="error" id="vidErr">* <?php if(!empty($_GET['vidErr'])){echo $_GET['vidErr'];} ?></span>
    <br>

   <br>


    <input type="submit" name="submit" value="Add">
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
