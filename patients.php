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
    <h1>PATIENTS</h1>
    
    <table class="patients-table">
            <thead>
            <tr>
                <th>Patient ID</th>
                <th>Profile Img</th>
                <th>Name Surname</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Password</th>
                <th>Phone Number</th>
                <th>Medical Aid No</th>
                <th>History</th>
            </tr>
        </thead>
			<tbody>
				<?php 
				  include 'ptabledb.php';
				?>
			</tbody>

		</table>
        <br>
        <h1>Add A New Patient:</h1><br>
        <form class="Add" action="createpatient.php" method="POST">
			<label for="ID">ID:</label>
			<input type="text" class="form-control m-2" id="ID" name="ID">
			<label for="Profile img">Profile img:</label>
			<input type="jpg" class="form-control m-2" id="ProfileImg" name="ProfileImg">
			<label for="NameSurname">NameSurname:</label>
			<input type="text" class="form-control m-2" id="NameSurname" name="NameSurname">
			<label for="Age">Age:</label>
			<input type="number" class="form-control m-2" id="age" name="Age">
			<label for="Gender">Gender:</label>
			<input type="text" class="form-control m-2" id="Gender" name="Gender"><br>
			<label for="Email">Email:</label>
			<input type="text" class="form-control m-2" id="Email" name="Email">
			<label for="Password">Password:</label>
			<input type="varchar" class="form-control m-2" id="Password" name="Password">
			<label for="phone number">Phone Number:</label>
			<input type="number" class="form-control m-2" id="PhoneNumber" name="PhoneNumber">
			<label for="medical aid number">Medical Aid Number:</label>
			<input type="text" class="form-control m-2" id="medicalAidNumber" name="MedicalAidNumber">
			<label for="history">History:</label>
			<input type="text" class="form-control m-2" id="history" name="history">
			<button type="submit" class="btn btn-primary">Add</button>
		</form>
        <br>

</body>
</html>