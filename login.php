<?php

$username = $_POST ['username'];
$password = $_POST ['password'];

if (empty($username) || empty($password)) {
	die('Please insert both username and password!');
}

require_once($_SERVER['DOCUMENT_ROOT'] . "/partials/db-info.php");

// connection between web page and database
$conn = new mysqli($host, $dbUsername, $dbpassword, $dbname);

if ($conn->connect_errno){
	die('Connect Error ('. mysqli_connect_errno(). ')');
}

$stmt = $conn->prepare("SELECT id, username, password, is_active from users where username = ? Limit 1");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows == 0) {
	die('Wrong credentials!');
}

$stmt->bind_result($db_id, $db_username, $db_password, $db_is_active);
$stmt->fetch();

if (md5($password) != $db_password) {
	die('Wrong credentials!');
}

if (!$db_is_active) {
	die('You have been locked out! Please contact the support team.');
}

$_SESSION["logged_in_user_id"] = $db_id;

header("Location: /?logged_in=1");
die();