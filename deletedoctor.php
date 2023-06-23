
<?php
// somtimes called config.phph 
include 'dv200_db.php';

// using the get methode
$id = $_GET['id'];

//some sql
$sql = "DELETE FROM doctors WHERE `doctors`.`id` = '$id'";

$conn->query($sql);

$conn->close();
header("location: doctors.php");

?>