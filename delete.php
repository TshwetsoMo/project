<?php
// Sometimes called config.php
include 'dv200_db.php';

$id = $_GET['id'];

$sql = "DELETE FROM patients WHERE id = $id";
$conn->query($sql);

$conn->close();
header("location: patients.php");

?>