<?php

require_once '../model/model.php';

//session_start();



if (isset($_POST['submit'])) {

$variantErr = $stockErr = $nameErr = $vidErr =$error= "";
$name = $variant  = $stock= $vid = "";
 $flag=1;
 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }

  if (empty($_POST["vid"])) {
    echo "ID is required";
     $flag=0;
   }
   else {
    $vid = test_input($_POST["vid"]);

    if (strlen($_POST["vid"]) > '3') 
    {
        $vidErr = "Your id can contain maximun 3 Characters!";
    }
    elseif(!preg_match("#[0-9]+#",$vid)) 
    {
        $vidErr = "Your id Must Contain Number!";

   }
  }

  if (empty($_POST["name"])) {
    $nameErr= "Nursery name is required";
    $flag=0;
  } else {

       $name = test_input($_POST["name"]);

      if (!preg_match("/^[a-zA-Z-. ]*$/",$name)) {
         $nameErr= "Only letters and white space allowed";
         $flag=0;
       }
    else  {
             if(str_word_count($name)<2)
          {
          $nameErr= "Nursery name must contains at least two words ";
           $flag=0;

          }
    }
  }

    if(empty($_POST["stock"]))
    {
      $stockErr= "Stock is required";
      $flag=0;
    }
    else {
      $stock=test_input($_POST["stock"]);
   $stockErr= "";
    }

    if(empty($_POST["variant"]))
    {
      $variantErr= "Variant is required";
      $flag=0;
    }
    else {
      $variant=test_input($_POST["variant"]);
   $variantErr= "";
    }



if($flag==1)
{
   $data['name']=$name;
  $data['stock']=$stock;
  $data['variant']=$variant;
  $data['vid']=$vid;
  

  if (addNurseryInfo($data)) {
    header('location:../view/add_plant.php');
  }

  else {
    echo 'Could not add!!';
  }
}
else {
  $args = array(
   'nameErr' => $nameErr,
   'stockErr' => $stockErr,
   'variantErr' => $variantErr,
   'vidErr' => $vidErr

);
     //header("location:../view/donate.php?" . http_build_query($args));
  }

}//else {
  //echo "You can not access this page!!";
//}

?>
