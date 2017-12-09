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


<!-- Jumbotron Store Name & Slogan -->
<div class="jumbotron">
  <div class="container text-center">
    <h1>Cool Guy Shirt Co</h1>      
    <p>Slogan</p>
  </div>
</div>

<body>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="homePage.html">Home</a></li>
        <li><a href="productPage.html">Products</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="accountPage.php"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>
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
        <a href="createUser.html">Create Account</a>
      </div>
    </div>
        </form>

    </div>
</body>
</html>