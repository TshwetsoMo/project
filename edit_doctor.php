<!DOCTYPE html>
<html>
<head>
    <title>Medical Center - Edit Doctor</title>
    <link rel="stylesheet" type="text/css" href="medicalcenter.css">
</head>
<body>
    <div class="navbar">
        <a href="home.php">APPOINTMENTS</a>
        <a href="patients.php">PATIENTS</a>
        <a href="doctors.php">DOCTORS</a>
        <a href="profile.php">PROFILE</a>
        <a href="receptionists.php">RECEPTIONISTS</a>
    </div>
    <h1>Edit Doctor</h1>
    <?php
    // Database connection settings
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'DV200_db';

    // Create a new connection
    $conn = new mysqli($host, $username, $password, $database);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_GET['ID'])) {
        $doctorId = $_GET['ID'];

        // Fetch the doctor record from the database
        $sql = "SELECT * FROM doctors WHERE ID = $doctorId";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            ?>
            <form action="process_edit_doctor.php" method="POST">
                <input type="hidden" name="ID" value="<?php echo $row['ID']; ?>">
                <label>Room Number:</label>
                <input type="text" name="room_number" value="<?php echo $row['Room number']; ?>" required><br>
                <label>Profile img:</label>
                <input type="text" name="Profile img" value="<?php echo $row['Profile img']; ?>" required><br>
                <label>NameSurname:</label>
                <input type="text" name="NameSurname" value="<?php echo $row['NameSurname']; ?>" required><br>
                <label>Age:</label>
                <input type="text" name="age" value="<?php echo $row['Age']; ?>" required><br>
                <label>Gender:</label>
                <input type="text" name="gender" value="<?php echo $row['Gender']; ?>" required><br>
                <label>Email:</label>
                <input type="email" name="email" value="<?php echo $row['Email']; ?>" required><br>
                <label>Password:</label>
                <input type="password" name="password" value="<?php echo $row['Password']; ?>" required><br>
                <label>Phone Number:</label>
                <input type="text" name="phone_number" value="<?php echo $row['phone number']; ?>" required><br>
                <label>Specialization:</label>
                <input type="text" name="specialization" value="<?php echo $row['Specialization']; ?>" required><br>
                <input type="submit" value="Update Doctor">
            </form>
            <?php
        } else {
            echo "Doctor not found.";
        }
    } else {
        echo "Invalid request.";
    }

    // Close the database connection
    $conn->close();
    ?>
</body>
</html>