<?php
    session_start();
    setcookie("loginStatus", 0, time() + (86400 * 30), "/");
    session_destroy();
    header("Location: index.php");
?>
/*
	if(!session_start()) {
		header("Location: error.php");
		exit;
	}
	
	
	/*
		Destroying all session data
		http://www.php.net/manual/en/function.session-destroy.php
	*/
	// Unset all session variables
	$_SESSION = array();
	
	// If the session was propagated using a cookie, remove that cookie
	if (ini_get("session.use_cookies")) {
		$params = session_get_cookie_params();
		setcookie(session_name(), '', 1,
			$params["path"], $params["domain"],
			$params["secure"], $params["httponly"]
		);
	}
	
	// Destroy the session
	session_destroy();
	
	
	// Redirect to login
	header("Location: index.html");
	exit;
*/
