<?php
	$name = $_POST["name"];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$conn = mysql_connect("localhost","root","root","jbchambers");
	if (!$conn) {
		die(‘Problem in database connection: ‘ .mysql_error());
	}

	$query = "INSERT INTO 'jbchambers'.'contacts'( 'name', 'email', 'subject', 'message') VALUES ( $name, $email, $subject, $message)";
	mysqli_query($conn, $query);

	header("Location: http://localhost:8888/wordpress/team/");
?>

