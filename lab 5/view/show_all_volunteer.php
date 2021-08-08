<?php
require_once '../controller/volunteer_info_controller.php';

$volunteer = fetch_all_volunteer();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<thead>
		<tr>
			<th>Volunteer id</th>
			<th>Name</th>
			<th>User name</th>
			<th>Email</th>
			<th>Admin id</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($volunteer as $i => $volunteer): ?>
			<tr>
				<td><a href="show_volunteer.php?id=<?php echo $volunteer['v_id'] ?>"><?php echo $volunteer['v_name'] ?></a></td>
				<td><?php echo $volunteer['v_uname'] ?></td>
				<td><?php echo $volunteer['v_email'] ?></td>
				<td><?php echo $volunteer['a_id'] ?></td>
				<td><a href="edit_volunteer.php?id=<?php echo $volunteer['v_id'] ?>">Edit</a>&nbsp<a href="delete_volunteer.php?id=<?php echo $volunteer['v_id'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>


	</tbody>


</table>


</body>
</html>