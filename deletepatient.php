<?php
// Sometimes called config.php
include 'dv200_db.php';

$ID = $_GET['ID'];

$sql = "DELETE FROM patients WHERE ID = $ID";

$conn->query($sql);

$conn->close();
header("location: ptabledb.php");

?>