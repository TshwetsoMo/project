<!DOCTYPE html>
<html>
<head>
    <title>Medical Center</title>
    <link rel="stylesheet" type="text/css" href="medicalcenter.css">
    <style>
        .logo {
            width: 60px;
            height: 60px;
            margin-right: 950px;
            margin-top: 5px;
            margin-bottom: 5px;
            border-radius: 0px;
            box-shadow: 0px 0px 30px rgba(0, 132, 255, 0.452);
        }
    </style>
</head>
<body>
    <div class="navbar">
        <img src="logo dv200.jpg" alt="Logo" class="logo">
        <a href="home.php">APPOINTMENTS</a>
        <a href="patients.php">PATIENTS</a>
        <a href="doctors.php">DOCTORS</a>
        <a href="profiles.php">PROFILE</a>
        <a href="receptionists.php">RECEPTIONISTS</a>
        <a href="logout.php">LOGOUT</a>
    </div>
    <h1>DOCTORS</h1>
    <table class="doctors-table">
        <thead>
            <tr>
                <th>Doctor ID</th>
                <th>Room Number</th>
                <th>Profile Img</th>
                <th>NameSurname</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Password</th>
                <th>Phone Number</th>
                <th>Specialization</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
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

            // SQL query to fetch data from the database
            $sql = "SELECT * FROM doctors";
            $result = $conn->query($sql);

            // Check if there are any rows returned
            if ($result->num_rows > 0) {
                // Loop through each row and display the data
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td>' . $row['RoomNumber'] . '</td>';
                    echo '<td>' . $row['ProfileImg'] . '</td>';
                    echo '<td>' . $row['NameSurname'] . '</td>';
                    echo '<td>' . $row['Age'] . '</td>';
                    echo '<td>' . $row['Gender'] . '</td>';
                    echo '<td>' . $row['Email'] . '</td>';
                    echo '<td>' . $row['Password'] . '</td>';
                    echo '<td>' . $row['PhoneNumber'] . '</td>';
                    echo '<td>' . $row['Specialization'] . '</td>';
                    echo '<td>';
                    echo '<a href="updatedoctors.php?id=' . $row['id'] . '">Edit</a> | ';
                    echo '<a href="deletedoctor.php?id=' . $row['id'] . '">Delete</a>';
                    echo '</td>';
                    echo '</tr>';
                }
            } else {
                // If no rows are returned, display a message
                echo '<tr><td colspan="9">No doctors found.</td></tr>';
            }

            // Close the database connection
            $conn->close();
            ?>
        </tbody>
    </table>
    <br>
    <h1>Add A New Doctor:</h1><br>
    <form class="Add" action="createdoctor.php" method="POST">
			<label for="Room number">Room Number:</label>
			<input type="number" class="form-control m-2" id="RoomNumber" name="RoomNumber">
			<label for="Profile img">Profile Img:</label>
			<input type="text" class="form-control m-2" id="ProfileImg" name="ProfileImg">
            <label for="NameSurname">NameSurname:</label>
			<input type="text" class="form-control m-2" id="NameSurname" name="NameSurname">
			<label for="age">Age:</label>
			<input type="number" class="form-control m-2" id="age" name="Age">
			<label for="Gender">Gender:</label>
			<input type="text" class="form-control m-2" id="Gender" name="Gender">
			<label for="Email">Email:</label>
			<input type="text" class="form-control m-2" id="Email" name="Email">
			<label for="Password">Password:</label>
			<input type="text" class="form-control m-2" id="Password" name="Password">
			<label for="phone number">Phone Number:</label>
			<input type="number" class="form-control m-2" id="PhoneNumber" name="PhoneNumber">
			<label for="Specialization">Specialization:</label>
			<input type="text" class="form-control m-2" id="Specialization" name="Specialization">
			<button type="submit" class="btn btn-primary">Add</button>
		</form><br>
</body>
</html>