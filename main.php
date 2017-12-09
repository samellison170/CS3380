<!DOCTYPE html>
<html>
    <head>
        <title>Online Shirt Store</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!--        <link href="assets/css/material-kit.css" rel="stylesheet"/>-->
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <style>
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

            .container {
            text-align: center;
            }

            /* Tweak width for carousel sizing */
            #myCarousel {
            width: 60%;
            height: auto;
            margin: 0 auto;
            }
        </style>
    </head>
    <body>
        <!-- Jumbotron Store Name & Slogan  -->
        <div class="jumbotron">
            <div class="container text-center">
                <h1>Cool Guy Shirt Co</h1>      
                <p>We sell three shirts</p>
            </div>
        </div>

        <!-- Navbar -->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <img class="navbar-brand" src="images/logo.jpg"/>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li id="home-page"><a href="index.php">Home</a></li>
                        <li id="product-page"><a href="productPage.php">Products</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li id="account-page"><a href="accountPage.php"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
                        <li id="cart-page"><a href="cartPage.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </body>
</html>
