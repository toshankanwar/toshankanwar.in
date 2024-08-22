<?php
session_start();
include "db_conn.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

	function validate($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$uname = validate($_POST['email']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: loginform.php?error=User Name is required");
		exit();
	} else if (empty($pass)) {
		header("Location: loginform.php?error=Password is required");
		exit();
	} else {
		$sql = "SELECT * FROM formdata WHERE email='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			if ($row['email'] === $uname && $row['password'] === $pass) {
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
				header("Location: loginform.php?register=Registration Successful");
				header("Location: home.php");

				exit();
			} else {
				header("Location: loginform.php?error=Incorrect Details");
				exit();
			}
		} else {
			header("Location: loginform.php?error=Incorrect Details");
			exit();
		}
	}

} else {
	header("Location: loginform.php");
	exit();
}