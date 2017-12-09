<?php
	require ('db_credentials.php');
	$P_ID = $_POST['product id'];
	$P_Price = $_POST['price'];
	$P_Description = $_POST['desscription'];
	$P_Picture = $_POST['picture'];
	$P_NumberOfProducts = $_POST['numberOfProducts'];

	$mysqli = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($mysqli->connect_error) {
		print generatePageHTML("Tasks (Error)", generateErrorPageHTML($mysqli->connect_error), $stylesheet);
		exit;
	}
	$P_ID = $mysqli->real_escape_string($username);
	$P_Price = $mysqli->real_escape_string($password);
	$P_Description = $mysqli->real_escape_string($email);
	$P_Picture = $mysqli->real_escape_string($state);
	$P_NumberOfProducts = $mysqli->real_escape_string($address);
	INSERT INTO Products(ProductID, Price, Description, Picture, NumberOfProducts) VALUES ('$P_ID', '$P_Price', '$P_Description','$P_Picture','$P_NumberOfProducts');
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
