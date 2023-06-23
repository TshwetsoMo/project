<?php
include 'dv200_db.php';

$ID = $_POST['ID'];
$RoomNumber = $_POST['RoomNumber'];
$ProfileImg = $_POST['ProfileImg'];
$NameSurname = $_POST['NameSurname'];
$Age = $_POST['Age'];
$Gender = $_POST['Gender'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$phoneNumber = $_POST['PhoneNumber'];
$specialization = $_POST['Specialization'];

$sql = "UPDATE doctors SET ID ='$ID', 'ProfileImg' = '$ProfileImg', NameSurname = '$NameSurname', Age = '$Age', Gender = '$Gender', Email = '$Email', 'Password' = '$Password', 'PhoneNumber' = '$phoneNumber', ' Specialization' = '$specialization' WHERE id = '$id' ";


$result = $conn->query($sql);

$conn->close();
header("location: doctors.php");

?>