<?php

$username = $_POST ['username'];
$password = $_POST ['password'];
$password_confirmation = $_POST ['password_confirmation'];

if (empty($username) || empty($password) || empty($password_confirmation)) {
	echo "All fields are required";
	die();
}

if ($password !== $password_confirmation) {
	echo "Passwords do not match!";
	die();
}

require_once($_SERVER['DOCUMENT_ROOT'] . "/partials/db-info.php");

// connection between web page and database
$conn = new mysqli($host, $dbUsername, $dbpassword, $dbname);

//if any error appear here
if ($conn->connect_errno) {
	die ('connect error('.mysqli_connect_error().')'.mysqli_connect_error());
}

$SELECT = "SELECT username from users where username = ? Limit 1"; //choose username because they are unique
$INSERT = "INSERT Into users (username, password) values (?, ?)";

//prepare statement
$stmt = $conn->prepare($SELECT);
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->bind_result($username);
$stmt->store_result();
$rnum = $stmt->num_rows;

if ($rnum == 0) {
	$stmt->close();
	
	$stmt = $conn->prepare($INSERT);
	$stmt->bind_param('ss', $username, md5($password));
	$stmt->execute();
	
	echo "New user account created succesfully!";
	
} else {
	echo "This username is already taken!";
}

$stmt->close();
$conn->close();
