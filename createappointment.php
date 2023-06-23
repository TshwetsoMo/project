<?php
// Before everything, acknowledge this file. Similar to react's Import. We will use this like a React component.
include 'dv200_db.php';

//Include the ID of the element you get it from in the square brackets.
$patient = $_POST['patients'];
$doctor = $_POST['doctors'];
$RoomNumber = $_POST['rooms'];
$Date = $_POST['Date'];

// sql query:
$sql = "INSERT INTO appointments (Patient, Doctor, Room, Date ) VALUES('$patient', '$doctor', '$RoomNumber', '$Date')";

//$conn is from dv200_db.php. This runs the code with the authentication from the dv200_db.php file.
$conn->query($sql);

//You need to close the connection after running the sql to avoid errors.
$conn->close();

// This gives an instruction to go back to a different page
header("location: home.php");

?>