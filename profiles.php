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
    <h1>PROFILE</h1>
    <div class="profile-info">
        <div class="profile-image">
            <!-- Add image here -->
        </div>
        <div class="profile-details">
            <p>ID: 123</p>
            <p>NameSurname: John Doe</p>
            <p>Specialization: Cardiology</p>
        </div>
    </div>
    <h2>History</h2>
    <table class="history-table">
        <thead>
            <tr>
                <th>Date</th>
                <th>Doctor ID</th>
                <th>Room No</th>
                <th>Prescription</th>
            </tr>
        </thead>
        <tbody>
            <!-- Populate table rows dynamically using PHP -->
            <?php
            // Sample data for demonstration
            $history = [
                ['2023-05-26', 'D123', '101', 'Prescription 1'],
                ['2023-05-27', 'D456', '202', 'Prescription 2'],
                // Add more rows as needed
            ];

            foreach ($history as $entry) {
                echo '<tr>';
                foreach ($entry as $data) {
                    echo '<td>' . $data . '</td>';
                }
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</body>
</html>