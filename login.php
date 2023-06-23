<?php 
session_start(); 
include "dv200_db.php";

if (isset($_POST['NameSurname']) && isset($_POST['Password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['NameSurname']);
	$pass = validate($_POST['Password']);

	if (empty($uname)) {
		header("Location: loginindex.php?error=Name and Surname is required");
	    exit();
	}else if(empty($pass)){
        header("Location: loginindex.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM receptionist WHERE NameSurname='$uname' AND Password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['NameSurname'] === $uname && $row['Password'] === $pass) {
            	$_SESSION['NameSurname'] = $row['NameSurname'];
            	$_SESSION['Password'] = $row['Password'];
            	$_SESSION['ID'] = $row['ID'];
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: loginindex.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: loginindex.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: loginindex.php");
	exit();
}