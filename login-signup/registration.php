<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$dateofbirth = $_POST['dateofbirth'];
$gender = $_POST['gender'];
$schoolname = $_POST['schoolname'];
$schooltype = $_POST['schooltype'];
$markstenth = $_POST['markstenth'];
$markstwelve = $_POST['markstwelve'];
$number = $_POST['number'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];



// Database connection
$conn = new mysqli('localhost', 'root', '', 'forms');
if ($conn->connect_error) {
	echo "$conn->connect_error";
	die("Connection Failed : " . $conn->connect_error);
} else {
	$stmt = $conn->prepare("insert into formdata(firstName, lastName, dateofbirth, gender, schoolname, schooltype, mark10, mark12, number, email, password, confirmpassword ) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("ssisssiiisss", $firstName, $lastName, $dateofbirth, $gender, $schoolname, $schooltype, $markstenth, $markstwelve, $number, $email, $password, $confirmpassword);
	$execval = $stmt->execute();
	echo $execval;
	echo 'registration successful';
	header("Location: index.php");
	$stmt->close();
	$conn->close();
}
?>