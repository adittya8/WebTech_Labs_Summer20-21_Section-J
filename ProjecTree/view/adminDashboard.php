<?php 
    include_once 'adminHead.php';
    session_start();
    if(!isset($_SESSION["username"])){
        header("Location:login.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
</head>
<body>
    <link rel="stylesheet" href="../CSS/general.css">
    <fieldset style="width:30%;text-align: center;margin-left: 505;"> 
    Welcome to <?php echo $_SESSION["username"]; ?> dashboard 
    <br> <br>
    <a href="show_all_Tree.php" style="color:white">Show All Trees</a>
    <br> <br>
    <a href="add_tree.php" style="color:white">Add Tree</a>
    <br> <br>
    <a href="page.php" style="color:white">Quick Search</a>
    <br> <br>
    <a href="../view/team/index.php" style="color:white">Our Team</a>
    <br> <br>
    <a href="logout.php" style="color:white">Logout</a>
    <br>
    </fieldset>
</body>
</html>
<?php
include "footer.php";                 
?>
