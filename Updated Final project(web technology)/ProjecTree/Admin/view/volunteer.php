<?php 
    include_once 'Header.php';
    session_start();
    if(!isset($_SESSION["username"])){
        header("Location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../CSS/general.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
  <?php
require_once '../controller/Info.php';

$users = fetchAllUsers();

?>
<h1 style="text-align: center;">VOLUNTEER DETAILS</h1>
<table border="1" style="width:100%;padding:10px;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Username</th>
            <th>Birthday</th>
            <th>Gender</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $i => $users): ?>
            <tr>
                <td><?php echo $users['ID'] ?></a></td>
                <td><?php echo $users['NAME'] ?></a></td>
                <td><?php echo $users['EMAIL'] ?></td>
                <td><?php echo $users['USERNAME'] ?></td>
                <td><?php echo $users['BIRTH'] ?></a></td>
                <td><?php echo $users['GENDER'] ?></a></td>
                <td><a class='btn btn-info'>Edit</a>
                <a class='btn btn-danger'>Delete</a></td>
            </tr>
        <?php endforeach; ?>


    </tbody>


</table>


</div>



</div>



  </body>
</html>






