<?php
	require ('db_credentials.php');

	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$state = $_POST['state'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$zip = $_POST['zipCode'];


	$mysqli = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($mysqli->connect_error) {
		print generatePageHTML("Tasks (Error)", generateErrorPageHTML($mysqli->connect_error), $stylesheet);
		exit;
	}

	$username = $mysqli->real_escape_string($username);
	$password = $mysqli->real_escape_string($password);
	$email = $mysqli->real_escape_string($email);
	$state = $mysqli->real_escape_string($state);
	$address = $mysqli->real_escape_string($address);
	$phone = $mysqli->real_escape_string($phone);
	$zip = $mysqli->real_escape_string($zip);

	INSERT INTO Products(Username, Address, State, Password, EmailAddress, Phone, ZipCode) VALUES ('$username', '$password', '$email','$state','$address', '$phone','$zip');

	$result = $mysqli->query($sql);
	if ($result) {
		// insert successfull, redirect browser to index.php to see list of tasks
		//redirect("accountPage.html");
                echo "<h1>win</h1>";
	} else {
                echo "<h1>lose</h1>";
		//print generatePageHTML("Tasks (Error)", generateErrorPageHTML($mysqli->error . " using SQL: $sql"), $stylesheet);
		exit;
	}

?>			