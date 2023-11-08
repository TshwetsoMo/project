<?php
include 'dv200_db.php';

$ProfileImg = $_POST['ProfileImg'];
$NameSurname = $_POST['NameSurname'];
$Age = $_POST['Age'];
$Gender = $_POST['Gender'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$phoneNumber = $_POST['PhoneNumber'];
$medicalAidNumber = $_POST['MedicalAidNumber'];
$history = $_POST['history'];

// Corrected SQL query:
$sql = "INSERT INTO patients (ProfileImg, NameSurname, Age, Gender, Email, Password, PhoneNumber, MedicalAidNumber, history) VALUES ('$ProfileImg', '$NameSurname', '$Age', '$Gender', '$Email', '$Password', '$phoneNumber', '$medicalAidNumber', '$history')";

$conn->query($sql);

$conn->close();

header("location: patients.php");
?>