<?php
include 'dv200_db.php';

// Check if the required keys are set in the $_POST array
if(isset($_POST['ID'], $_POST['Patient'], $_POST['Doctor'], $_POST['Room'], $_POST['Date'])) {
    $ID = $_POST['ID'];
    $Patient = $_POST['Patient'];
    $Doctor = $_POST['Doctor'];
    $Room = $_POST['Room'];
    $Date = $_POST['Date'];

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("UPDATE appointments SET ID = ?, Patient = ?, Doctor = ?, Date = ?, Room = ? WHERE ID = ?");
    $stmt->bind_param("isssss", $ID, $Patient, $Doctor, $Date, $Room, $ID); // Assuming ID, Patient, Doctor, Date, and Room are all strings. Change the types ("s" for string, "i" for integer) if needed.

    // Execute the prepared statement
    if ($stmt->execute()) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    // Close the prepared statement and connection
    $stmt->close();
    $conn->close();

    // Redirect to the appropriate page
    header("location: home.php");
} else {
    echo "Required parameters not set in the form data";
}
?>