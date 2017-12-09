<?php  session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $emailAddress = $_POST['emailAddress'];
    $userPassword = $_POST['userPassword'];
    $servername = "localhost";
    $username = "root";
    $password = "Opg523c3";
    $database = "CoolGuyShirtCo";
    $db = mysqli_connect($servername, $username, $password, $database);
    $sql = "SELECT * FROM Users WHERE EmailAddress = '$emailAddress' and Password = '$userPassword'";
    $result = mysqli_query($db,$sql);
    $userType = mysqli_num_rows($result);
    if($userType == 0) echo "<h2 id='response'>Invalid username or pasword, <a href='login_form.php'> try again.</a></h1>";
    if($userType == 1){
        $_SESSION['loggedin']=$emailAddress;
	$_SESSION['email']=$emailAddress;
	$_SESSION['password']=$userPassword;
        setcookie("loggedin", 1, time() + (86400 * 30), "/");
        echo '<script type="text/javascript"> window.open("accountPage.php","_self");</script>';
    }
}
 ?>


<?php
/*
	// Here we are using sessions to propagate the login
	// http://us3.php.net/manual/en/intro.session.php

    // HTTPS redirect
    if ($_SERVER['HTTP'] !== 'on') {
		$redirectURL = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		header("Location: $redirectURL");
		exit;
	}
	
	// http://us3.php.net/manual/en/function.session-start.php
	if(!session_start()) {
		// If the session couldn't start, present an error
		header("Location: error.php");
		exit;
	}
	
	
	// Check to see if the user has already logged in
	$loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];
	
	if ($loggedIn) {
		header("Location: accountPage.php");
		exit;
	}
	
	
	$action = empty($_POST['action']) ? '' : $_POST['action'];
	
	if ($action == 'do_login') {
		handle_login();
	} else {
		login_form();
	}
	
	function handle_login() {
		$emailAddress = empty($_POST['emailAddress']) ? '' : $_POST['emailAddress'];
		$userPassword = empty($_POST['userPassword']) ? '' : $_POST['userPassword'];
	
       
        // Require the credentials
        require ('db_credentials.php');
        
        // Connect to the database
        $mysqli = new mysqli($servername, $username, $password, $dbname);
        
        // Check for errors
        if ($mysqli->connect_error) {
            $error = 'Error: ' . $mysqli->connect_errno . ' ' . $mysqli->connect_error;
			require "login_form.php";
            exit;
        }
        
        // http://php.net/manual/en/mysqli.real-escape-string.php
        $emailAddress = $mysqli->real_escape_string($emailAddress);
        $userPassword = $mysqli->real_escape_string($userPassword);
        
        //more secure password storing for website
//        $password = sha1($password); 
        
        // Build query
		$query = "SELECT * FROM Users WHERE emailAddress = '$emailAddress' AND password = '$userPassword'";
		
		// Run the query
		$mysqliResult = $mysqli->query($query);
		
        // If there was a result...
        if ($mysqliResult) {
            // How many records were returned?
            $match = $mysqliResult->num_rows;

            // Close the results
            $mysqliResult->close();
            // Close the DB connection
            $mysqli->close();


            // If there was a match, login
  		    if ($match == 1) {
                $_SESSION['loggedin'] = $username;
                header("Location: accountPage.php");
                exit;
            }
            else {
                $error = 'Error: Incorrect email or password';
                require "login_form.php";
                exit;
            }
        }
        // Else, there was no result
        else {
          $error = 'Login Error: Please contact the system administrator.';
          require "login_form.php";
          exit;
        }
	}
	
	function login_form() {
		$emailAddress = "";
		$error = "";
		require "login_form.php";
        exit;
	}
	*/
?>
