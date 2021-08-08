<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,td,th{
			border:1px solid black;
		}
	</style>
</head>
<body>

<table>
	<thead>
		<tr>
			<th>Volunteer id</th>
      <th>Name</th>
			<th>Username</th>
      <th>Email</th>
      <th>Admin id</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($all_searched_volunteer as $i => $v_name): ?>
			<tr>
				<td><a href="../show_volunteer.php?id=<?php echo $v_name['v_id'] ?>"><?php echo $v_name['v_id'] ?></a></td>
        <td><?php echo $v_name['v_name'] ?></td>
        <td><?php echo $v_name['v_uname'] ?></td>
		<td><?php echo $v_name['v_email'] ?></td>
        <td><?php echo $v_name['a_id'] ?></td>
				<td><a href="../view/edit_volunteer.php?id=<?php echo $v_name['v_id'] ?>">Edit</a>&nbsp<a href="../view/delete_volunteer.php?id=<?php echo $v_name['v_id'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>


	</tbody>


</table>


</body>
</html>