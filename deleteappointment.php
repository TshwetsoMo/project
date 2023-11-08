<?php
include 'dv200_db.php';

// Check if ID parameter is set in the URL
if(isset($_GET['id'])) {
    $ID = $_GET['id'];

    $sql = "DELETE FROM appointments WHERE ID = $ID";

    if ($conn->query($sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    // Close the connection
    $conn->close();
} else {
    echo "ID parameter not set in the URL";
}
header("location: home.php");
?>

