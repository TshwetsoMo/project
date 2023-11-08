<?php
var_dump($_POST);

include 'dv200_db.php';

// Check if all required parameters are set
if(isset($_POST['id'], $_POST['ProfileImg'], $_POST['NameSurname'], $_POST['Age'], $_POST['Gender'], $_POST['PhoneNumber'], $_POST['Email'], $_POST['Password'], $_POST['Rank'])) {
    // Retrieve values from the form data
    $id = $_POST['id'];
    $ProfileImg = $_POST['ProfileImg'];
    $NameSurname = $_POST['NameSurname'];
    $Age = $_POST['Age'];
    $Gender = $_POST['Gender'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Rank = $_POST['Rank'];

    // SQL query to insert data into the receptionists table
    $sql = "INSERT INTO receptionist (id, ProfileImg, NameSurname, Age, Gender, PhoneNumber, Email, Password, Rank) 
            VALUES ('$id', '$ProfileImg', '$NameSurname', '$Age', '$Gender', '$PhoneNumber', '$Email', '$Password', '$Rank')";

    // Execute the SQL query
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();

    // Redirect to the appropriate page
    header("location: receptionists.php");
} else {
    echo "Required parameters not set in the form data";
}
?>