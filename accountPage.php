<!DOCTYPE html>
<?php
	session_start();
	if(!isset($_SESSION['loggedin'])) header("Location:login_form.php");	
?>
<html lang="en">
<head>
  <title>User Login Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="main.css"/>
  <style>
	  table {
	    font-family: arial, sans-serif;
	    border-collapse: collapse;
	    width: 70%;
	    margin: 0 auto;
	}
	td, th {
	    border: 1px solid #dddddd;
	    text-align: left;
	    padding: 8px;
	}
	tr:nth-child(even) {
	    background-color: #dddddd;
	}
	#container{
		text-align: center;
	}
  </style>
</head>

<body>
<table>
<tr>
	<th>Username</th>
	<th>Address</th>
	<th>State</th>
	<th>Password</th>
	<th>Email Address</th>
	<th>Phone</th>
	<th>ZIP Code</th>
</tr>
<?php 
    include("main.php");
    $emailAddress = $_SESSION['email'];
    $userPassword = $_SESSION['password'];
    $servername = "localhost";
    $username = "root";
    $password = "Opg523c3";
    $database = "CoolGuyShirtCo";
    $db = mysqli_connect($servername, $username, $password, $database);
    $sql = "SELECT * FROM Users WHERE EmailAddress = '$emailAddress' and Password = '$userPassword'";
    $result = mysqli_query($db,$sql);
    while ($row = $result->fetch_assoc()) {
        printf ("<td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td>\n", $row["Username"], $row["Address"], $row["State"], $row["Password"], $row["EmailAddress"], $row["Phone"], $row["ZipCode"]);
    }
   ?>
</table>
<br><br><br>
<div id="container">	<button><a href='logout.php'>Logout</a></button> </div>
<form method="post" name="update" action="update.php" />
Email Address (enter again to confirm changes!):
<input type="text" name="EmailAddress"/>
Address: 
<input type="text" name="Address"/>
State:
<input type="text" name="State"/>
<input type="submit" name="Submit" value="update" />
</form>


<form method="post" name="update" action="delete.php" />
<br> <br>
Enter Email Address and Password to delete account:
<input type="text" name="EmailAddress"/>
Password:
<input type="text" name="Password"/>
<input type="submit" name="Submit" value="delete account" />
</form>




</body>
</html>
