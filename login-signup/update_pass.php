<?php
session_start();
include "db_conn.php";
$number = $_POST['number'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
if ($password != $confirmpassword) {
    header("Location: update.php?error=Password Does Not Match");
    exit();
} else {
    if ($conn->connect_error) {
        echo "$conn->connect_error";
        die("Connection Failed : " . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("UPDATE formdata SET password='$password',confirmpassword='$confirmpassword'  where number='$number'");
        $execval = $stmt->execute();
        echo $execval;

        header("Location: loginform.php");
        $stmt->close();
        $conn->close();
    }
}



?>