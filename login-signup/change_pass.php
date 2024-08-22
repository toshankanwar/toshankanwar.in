<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['email'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uemail = validate($_POST['email']);

	if (empty($uemail)) {
		header("Location: forget_password.php?error=Email Address  is required");
	    exit();
	}else{
		$sql = "SELECT * FROM formdata WHERE email='$uemail' ";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $uemail) {
            	$_SESSION['firstName'] = $row['firstName'];
                $_SESSION['lastName'] = $row['lastName'];
            	$_SESSION['dateofbirth'] = $row['dateofbirth'];
            	$_SESSION['gender'] = $row['gender'];
                $_SESSION['schoolname'] = $row['schoolname'];
                $_SESSION['schooltype'] = $row['schooltype'];
                $_SESSION['markstenth'] = $row['markstenth'];
                $_SESSION['markstwelve'] = $row['markstwelve'];
                $_SESSION['number'] = $row['number'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['confirmpassword'] = $row['confirmpassword'];
            	header("Location: update.php");

		        exit();
            }else{
				header("Location: forget_password.php?error=No Account Found! Enter Correct Email Address");
		        exit();
			}
		}else{
			header("Location: forget_password.php?error=No Account Found! Enter Correct Email Address");
	        exit();
		}
	}
	
}else{
	header("Location: forget_password.php.php");
	exit();
}