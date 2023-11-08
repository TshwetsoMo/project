
<?php
// somtimes called config.phph 
include 'dv200_db.php';

// using the get methode
$ID = $_GET['id'];

//some sql
$sql = "DELETE FROM doctors WHERE id = '$ID'";

$conn->query($sql);

$conn->close();
header("location: doctors.php");

?>