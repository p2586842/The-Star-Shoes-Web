<?php>
$firstname = $_POST ['firstname'];
$surname = $_POST ['surname'];
$e-mail = $_POST ['e-mail'];
$confirm e-mail = $_POST ['confirm e-mail'];
$password = $_POST ['password'];
$re-password = $_POST ['re-password'];

if (!empty ($firstname) || !empty($surname) || !empty($e-mail) || !empty($confirm e-mail) || !empty($password) ||
!empty($re-password))
{
	$host = "localhost";
	$dbUsername = "root";
	$dbpassword = "";
	$dbname = "company";
	
	// connection between web page and database
	$conn = new mysqli($host, $dbUsername, $dbpassword, $dbname);
	
	//if any error appear here
	if (mysqli_connect_error())
	{
		die ('connect error('.mysqli_connect_error().')'.mysqli_connect_error());
	}
	else
	{
		$SELECT = "SELECT email from register where email = ? Limit 1"; //choose email because they are unique
		$INSERT = "INSERT Into register (firstname, surname, email, confirm e-mail, password, re-password) values (?, ?, ?, ?, ?, ?)";
		
		//prepare statement
		$stmt = $conn->prepare($SELECT);
		$stmt->bind_oaram("s", $email);
		$stmt->execute();
		$stmt->bind_result($email);
		$stmt->store_result();
		$rnum = $stmt->num_rows;
		
		if ($rnum ==0)
		{
			$stmt->close();
			
			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("ssssii", $firstname, $surname, $e-mail, $confirme e-mail, $password, $re-password);
			$stmt->execute();
			
			echo "New Record inserted succesfully";
			
		}
		else
		{
			echo "Someone already register using this email";
		}
		$stmt->close();
		$conn->close();
	
	
	}
else
{
	echo "All fields are required";
	die();
}

?>
