<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$number = $_POST['number'];
$password = $_POST['message'];




// Database connection
$conn = new mysqli('localhost', 'u579474593_bakery', 'Bakery@123456789', 'u579474593_bakery');
if ($conn->connect_error) {
	echo "$conn->connect_error";
	die("Connection Failed : " . $conn->connect_error);
} else {
	$stmt = $conn->prepare("insert into contact(firstName, lastName, email, number, message) values(?, ?, ?, ?, ?)");
	$stmt->bind_param("sssis", $firstName, $lastName, $email,  $number, $message);
	$execval = $stmt->execute();
	echo $execval;
	echo 'registration successful';
	header("Location: /Contact");
	$stmt->close();
	$conn->close();
}
?>