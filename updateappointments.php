<?php
include 'dv200_db.php';

$patients = $_POST['Patient'];
$doctors = $_POST['Doctor'];
$Room = $_POST['Room'];
$Date = $_POST['Date'];


$sql = "UPDATE appointments SET Patient = '$patients', Doctor = '$doctors',  Date = '$Date', Room = '$Room' WHERE Patient = '$patients' ";


$result = $conn->query($sql);

$conn->close();
header("location: home.php");

?>