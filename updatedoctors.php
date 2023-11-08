<?php
include 'dv200_db.php';

// Check if the required keys are set in the $_POST array
if(isset($_POST['ID'], $_POST['RoomNumber'], $_POST['ProfileImg'], $_POST['NameSurname'], $_POST['Age'], $_POST['Gender'], $_POST['Email'], $_POST['Password'], $_POST['PhoneNumber'], $_POST['Specialization'])) {
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

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("UPDATE doctors SET ID=?, RoomNumber=?, ProfileImg=?, NameSurname=?, Age=?, Gender=?, Email=?, Password=?, PhoneNumber=?, Specialization=? WHERE id=?");
    $stmt->bind_param("isssisssisi", $ID, $RoomNumber, $ProfileImg, $NameSurname, $Age, $Gender, $Email, $Password, $phoneNumber, $specialization, $ID); 

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
    header("location: doctors.php");
} else {
    echo "Required parameters not set in the form data";
}
?>