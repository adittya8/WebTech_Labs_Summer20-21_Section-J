<?php

require_once '../controller/volunteer_info_controller.php';
$lab5 = fetch_volunteer($_GET['id']);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="../controller/delete_volunteer_controller.php" method="POST" enctype="multipart/form-data">
   
    <label for="v_id">ID:</label><br>
  <input value="<?php echo $lab5['v_id'] ?>" type="text" id="v_id" name="v_id"><br>

  <label for="v_name">Name:</label><br>
  <input value="<?php echo $lab5['v_name'] ?>" type="text" id="v_name" name="v_name"><br>

  <label for="v_uname">User name:</label><br>
  <input value="<?php echo $lab5['v_uname'] ?>" type="text" id="v_uname" name="v_uname"><br>

  <label for="v_emil">Email:</label><br>
  <input value="<?php echo $lab5['v_email'] ?>" type="text" id="v_email" name="v_email"><br>

  <label for="a_id">Admin id:</label><br>
  <input value="<?php echo $lab5['a_id'] ?>" type="text" id="a_id" name="a_id"><br>
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="submit" name = "delete_volunteer" value="Delete">
  <input type="reset">
</form>

</body>
</html>