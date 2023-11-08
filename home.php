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
    <h1>APPOINTMENTS</h1>

    <div class="appointment-box">
        <?php
        // Get current date and time
        $currentDate = date('Y-m-d');
        $currentTime = date('H:i:s');

        // Generate a random number of scheduled appointments (for demonstration)
        $appointmentsCount = rand(1, 10);

        // Display the information in the futuristic-styled box
        echo '<div class="date-time">' . $currentDate . ' | ' . $currentTime . '</div>';
        echo '<div class="appointment-count">' . $appointmentsCount . ' Appointments</div>';
        ?>
    </div>

    <table class="appointments-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Patient</th>
                <th>Doctor</th>
                <th>Room</th>
                <th>Date</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Include database connection settings and use a separate PHP file for database connection
            include 'dv200_db.php';

            // SQL query to fetch data from the database
            $sql = "SELECT * FROM appointments";
            $result = $conn->query($sql);

            // Check if there are any rows returned
            if ($result->num_rows > 0) {
                // Loop through each row and display the data
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row['ID'] . '</td>';
                    echo '<td>' . $row['Patient'] . '</td>';
                    echo '<td>' . $row['Doctor'] . '</td>';
                    echo '<td>' . $row['Room'] . '</td>';
                    echo '<td>' . $row['Date'] . '</td>';
                    echo '<td>';
                    echo '<a class="btn btn-primary" href="updateappointments.php?id=' . $row['ID'] . '">Update</a> | ';
                    echo '<a class="btn btn-primary" href="deleteappointment.php?id=' . $row['ID'] . '">Delete</a>';
                    echo '</td>';
                    echo '</tr>';
                }
            } else {
                // If no rows are returned, display a message
                echo '<tr><td colspan="9">No appointments found.</td></tr>';
            }

            // Close the database connection
            $conn->close();
            ?>
        </tbody>
    </table>
    <br>
    <div className='addbox'>
        <h1>Add A New Appointment:</h1><br>
        <div>
            <form class="Add" action="createappointment.php" method="POST">
                <label for="ID">ID:</label>
                <input type="number" id="ID" name="ID"><br/>
                <label for="Patient">Patient:</label>
                <?php 
                // Include dropdownpatients.php to populate the patient dropdown
                include 'dropdownpatients.php';
                ?><br/>
                <label for="Doctor">Doctor:</label>
                <?php 
                // Include dropdowndoctors.php to populate the doctor dropdown
                include 'dropdowndoctors.php';
                ?><br/>
                <label for="Room">Room:</label>
                <?php
                // Include dropdownrooms.php to populate the room dropdown
                include 'dropdownrooms.php';
                ?><br/>
                <label for="Date">Date:</label>
                <input type="date" class="form-control m-2" id="Date" name="Date"><br/>
                <button type="submit" class="btn btn-primary">Add</button>
            </form><br>
        </div>
    </div>
    
</body>
</html>