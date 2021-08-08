<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style >
      .error {color: #FF0000;}
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>



    <h2>ADD VOLUNTEER</h2>

    <form style="border:3px; border-style:solid; border-color:gray; padding: 1em;" method="post" method="POST" enctype="multipart/form-data"  action="../controller/add_volunteer_controller.php">
        ID: <input type="text" name="v_id" >
        <!-- <span class="error">* <?php echo $idErr;?></span> -->
        <br><br>
        Name: <input type="text" name="v_name" >
        <!-- <span class="error">* <?php echo $nameErr;?></span> -->
        <br><br>
        Username: <input type="text" name="v_uname" >
        <!-- <span class="error">* <?php echo $unameErr;?></span> -->
        <br><br>
        Email: <input type="text" name="v_email" >
        <!-- <span class="error">* <?php echo $emailErr;?></span> -->
        <br><br>
        Admin ID: <input type="text" name="a_id"  />
        <!-- <span class="error">* <?php echo $adminIdErr;?></span> -->
         <br><br>
         <input type="submit" name="addVolunteer" value="Add">

    </form>
  </body>
</html>