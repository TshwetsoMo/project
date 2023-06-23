<?php
include 'dv200_db.php';

$ID = $_POST['ID'];
$ProfileImg = $_POST['Profile img'];
$NameSurname = $_POST['NameSurname'];
$Age = $_POST['Age'];
$Gender = $_POST['Gender'];
$phoneNumber = $_POST['PhoneNumber'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$Rank = $_POST['Rank'];

$sql = "UPDATE receptionist SET ID ='$ID', 'Profile img' = '$ProfileImg', NameSurname = '$NameSurname', Age = '$Age', Gender = '$Gender', 'PhoneNumber' = '$phoneNumber', Email = '$Email', 'Password' = '$Password', Rank = '$Rank' WHERE ID = '$ID' ";


$result = $conn->query($sql);

$conn->close();
header("location: receptionists.php");

?>