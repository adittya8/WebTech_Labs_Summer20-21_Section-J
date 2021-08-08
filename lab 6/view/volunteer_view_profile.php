

       <?php
include("../model/head_dashboard.php");
?>
<?php

require_once '../controller/info_volunteer_controller.php';



if(isset($_SESSION['username']))
{
$data = fetch_volunteer($_SESSION['username']);


  if($data!=NULL)
  {
    foreach ($data as $i => $volunteer):

         $name= $volunteer['NAME'] ;
         $email=$volunteer['EMAIL'];
         $username= $volunteer['USERNAME'] ;
         $birth=$volunteer['BIRTH'];
         $gender= $volunteer['GENDER'] ;
    endforeach;

    echo "<br />$name";
    echo "<br />$email";
    echo "<br />$username";
    echo "<br />$birth";
    echo "<br />$gender";
  }
}

else {
  echo "You cannot access this page!!";
}
 ?>
        <?php
include("../model/foot.php");
?>