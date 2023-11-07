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
    <h1>RECEPTIONISTS</h1>
    <table class="doctors-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Profile Img</th>
                <th>NameSurname</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Password</th>
                <th>Rank</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Database connection settings
            $host = 'localhost';
            $username = 'root';
            $password = 'your_password';
            $database = 'DV200_db';

            // Create a new connection
            $conn = new mysqli($host, $username, $password, $database);

            // Check the connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // SQL query to fetch data from the database
            $sql = "SELECT * FROM receptionist";
            $result = $conn->query($sql);

            // Check if there are any rows returned
            if ($result->num_rows > 0) {
                // Loop through each row and display the data
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td>' . $row['Profile img'] . '</td>';
                    echo '<td>' . $row['NameSurname'] . '</td>';
                    echo '<td>' . $row['Age'] . '</td>';
                    echo '<td>' . $row['Gender'] . '</td>';
                    echo '<td>' . $row['PhoneNumber'] . '</td>';
                    echo '<td>' . $row['Email'] . '</td>';
                    echo '<td>' . $row['Password'] . '</td>';
                    echo '<td>' . $row['Rank'] . '</td>';
                    echo '<td>';
                    echo '<a href="upreception.php?ID=' . $row['id'] . '">Update</a> | ';
                    echo '<a href="receptionists.php?delete=' . $row['id'] . '">Delete</a>';
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
    <h1>Add A New Receptionist:</h1><br>
    <form class="Add" action="createreceptionist.php" method="POST">
			<label for="id">ID:</label>
			<input type="text" class="form-control m-2" id="id" name="id">
			<label for="Profile img">Profile Img:</label>
			<input type="number" class="form-control m-2" id="ProfileImg" name="Profile img">
			<label for="NameSurname">NameSurname:</label>
			<input type="text" class="form-control m-2" id="NameSurname" name="NameSurname">
			<label for="Age">Age:</label>
			<input type="number" class="form-control m-2" id="Age" name="Age">
			<label for="Gender">Gender:</label>
			<input type="text" class="form-control m-2" id="Gender" name="Gender">
			<label for="PhoneNumber">PhoneNumber:</label>
			<input type="number" class="form-control m-2" id="PhoneNumber" name="Phone Number">
			<label for="Email">Email:</label>
			<input type="text" class="form-control m-2" id="Email" name="Email">
			<label for="Password">Password:</label>
			<input type="number" class="form-control m-2" id="Password" name="Password">
			<label for="Rank">Rank:</label>
			<input type="text" class="form-control m-2" id="Rank" name="Rank">
			<button type="submit" class="btn btn-primary">Add</button>
		</form><br>
</body>
</html>