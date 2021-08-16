



<?php





    if(!isset($_SESSION["username"])){
      session_start();
        
    }

include("../view/head_dashboard.php");

  echo "<h1 align='middle'> Welcome ".$_SESSION['username']."</h2>";



 ?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <link rel="stylesheet" href="../CSS/login/loginVolunteerCSS2.css">
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
    <fieldset align = "center">


     <img src="tree.jpg" style="width: 40%;">
        <img src="treee.jpg" style="width: 40%;">

         
     </fieldset>
  </body>
</html>


<?php
include("../model/foot.php");
?>

<?php
//}
//else {
 // echo header('Location:../view/login_volunteer_view.php');
//}
?>