<?php
// Before everything, acknowledge this file. Similar to react's Import. We will use this like a React component.
include 'dv200_db.php';

//Include the ID of the element you get it from in the square brackets.

$RoomNumber = $_POST['RoomNumber'];
$ProfileImg = $_POST['ProfileImg'];
$NameSurname = $_POST['NameSurname'];
$Age = $_POST['Age'];
$Gender = $_POST['Gender'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$phoneNumber = $_POST['PhoneNumber'];
$specialization = $_POST['Specialization'];
// sql query:
$sql = "INSERT INTO doctors (RoomNumber, ProfileImg, NameSurname, Age, Gender, Email, Password, PhoneNumber, Specialization) VALUES('$RoomNumber', '$ProfileImg', '$NameSurname', '$Age', '$Gender', '$Email', '$Password', '$phoneNumber', '$specialization')";

//$conn is from dv200_db.php. This runs the code with the authentication from the dv200_db.php file.
$conn->query($sql);

//You need to close the connection after running the sql to avoid errors.
$conn->close();

// This gives an instruction to go back to a different page
header("location: doctors.php");

?>