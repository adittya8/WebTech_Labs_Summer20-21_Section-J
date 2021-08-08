<?php
require_once '../controller/volunteer_info_controller.php';

$volunteer = fetch_volunteer($_GET['id']);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<tr>
		
		<th>Name</th>
			<th>Volunteer id</th>
		<th>User name</th>
		<th>Email</th>
		<th>Admin id</th>

	</tr>
	<tr>
		<td><a href="show_volunteer.php?id=<?php echo $volunteer['v_id'] ?>"><?php echo $volunteer['v_name'] ?></a></td>
          <td><?php echo $volunteer['v_id'] ?></td>
			
		<td><?php echo $volunteer['v_uname'] ?></td>
		<td><?php echo $volunteer['v_email'] ?></td>
		<td><?php echo $volunteer['a_id'] ?></td>

	</tr>

</table>


</body>
</html>