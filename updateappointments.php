<?php
include 'dv200_db.php';

$patients = $_POST['patients'];
$doctors = $_POST['doctors'];
$Room = $_POST['rooms'];
$Date = $_POST['Date'];


$sql = "UPDATE appointments SET Patient = '$patients', Doctor = '$doctors', Room = '$Room', Date = '$Date' WHERE Patient = '$patients' ";


$result = $conn->query($sql);

$conn->close();
header("location: home.php");

?>