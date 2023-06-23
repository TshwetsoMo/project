<?php
// Sometimes called config.php
include 'dv200_db.php';

$Patient = $_GET['Patient'];

$sql = "DELETE FROM appointments WHERE Patient = $Patient";

$conn->query($sql);

$conn->close();
header("location: home.php");

?>