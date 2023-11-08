<?php
var_dump($_GET['id']); 
include 'dv200_db.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // SQL query to delete receptionist by ID
    $sql = "DELETE FROM receptionist WHERE id = $id";

    // Execute the SQL query
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    // Close the database connection
    $conn->close();

    // Redirect back to receptionists page
    header("location: receptionists.php");
} else {
    echo "Invalid receptionist ID";
}
?>