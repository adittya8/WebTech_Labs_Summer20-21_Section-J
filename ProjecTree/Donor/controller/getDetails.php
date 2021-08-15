<?php
require_once '../model/db_connect.php';
$mysqli = new mysqli("localhost", "root", "", "testing");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT *  FROM `donorinfo` WHERE USERNAME = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result( $details);
$stmt->fetch();
$stmt->close();

echo "$details";
?>
