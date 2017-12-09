<!DOCTYPE html>
<html>
<head>
	<title>User Login Page</title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="app.css" rel="stylesheet" type="text/css">
	<link href="app.css" rel="stylesheet" type="text/css">
    <link href="jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <script src="jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
    <script>
        $(function(){
            $("input[type=submit]").button();
        });
    </script>
</head>
    <style>
  /* Remove the navbar's default rounded borders and increase the bottom margin */ 
  .navbar {
    margin-bottom: 50px;
    border-radius: 0;
  }
  
  /* Remove the jumbotron's default bottom margin */ 
   .jumbotron {
    margin-bottom: 0;
  }
 
  /* Add a gray background color and some padding to the footer */
  footer {
    background-color: #f2f2f2;
    padding: 25px;
  }
</style>

<body>
    <?php include("main.php"); ?>
        <script>  
            $(document).ready(function(){
                $("#account-page").addClass("active");
            });
        </script> 
    <div id="loginWidget" class="ui-widget">
<!--        <h1 class="ui-widget-header">Login</h1>-->
        
        <?php
            if ($error) {
                print "<div class=\"ui-state-error\">$error</div>\n";
            }
        ?>
       

        <form action="login.php" method="POST">
            
            <input type="hidden" name="action" value="do_login">
            
            <div class="stack">
                <label for="email">Email:</label>
                <input type="email" id="emailAddress" name="emailAddress" class="ui-widget-content ui-corner-all" autofocus value="<?php print $emailAddress; ?>">
            </div>
            
            <div class="stack">
                <label for="password">Password:</label>
                <input type="password" id="userPassword" name="userPassword" class="ui-widget-content ui-corner-all">
            </div>
            
            <div class="stack">
                <input type="submit" value="Submit">
            </div>
            
            <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                    <br>
                    <a href="createUser.php">Create Account</a>
                </div>
            </div>
        </form>

    </div>
</body>
</html>
