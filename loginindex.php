<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
		.navbar {
    		background-color: #333333;
    		width: 100%;
    		display: flex;
    		justify-content: center;
    		padding: 0px;
    		box-shadow: 0px 0px 20px #ffffffb4;
			margin-bottom: 400px;
		}

		
    </style>
</head>
<body>
	<div class="navbar">
        <img src="logo dv200.jpg" alt="Logo" class="logo">
        <a href="loginindex.php">APPOINTMENTS</a>
        <a href="loginindex.php">PATIENTS</a>
        <a href="loginindex.php">DOCTORS</a>
        <a href="loginindex.php">PROFILE</a>
        <a href="loginindex.php">RECEPTIONISTS</a>
    	<a href="logout.php">LOGOUT</a>
    </div>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Name Surname</label><br>
     	<input type="text" name="NameSurname" placeholder="NameSurname">
		<br>
     	<label>Password</label>
     	<input type="text" name="Password" placeholder="Password"><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html>