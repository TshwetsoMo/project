<?php
include 'dv200_db.php';

$ID = $_POST['ID'];
$ProfileImg = $_POST['Profile img'];
$NameSurname = $_POST['NameSurname'];
$Age = $_POST['Age'];
$Gender = $_POST['Gender'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$phoneNumber = $_POST['phone number'];
$medicalAidNumber = $_POST['medical aid number'];
$history = $_POST['history'];

$sql = "UPDATE patients SET ID ='$ID', 'Profile img' = '$ProfileImg', NameSurname = '$NameSurname', Age = '$Age', Gender = '$Gender', Email = '$Email', 'Password' = '$Password', 'phone number' = '$phoneNumber', ' medical aid number' = ' $medicalAidNumber', history = '$history' WHERE id = '$id' ";


$result = $conn->query($sql);

$conn->close();
header("location: patients.php");

?>