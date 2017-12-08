<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Login Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
<!-- Jumbotron Store Name & Slogan -->
<div class="jumbotron">
  <div class="container text-center">
    <h1>Cool Guy Shirt Co</h1>      
    <p>Slogan</p>
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
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.html">Home</a></li>
        <li><a href="productPage.html">Products</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="accountPage.html"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
        <li><a class="active" href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>


<?php

    $server = mysql_connect("localhost","root", "");
    $db =  mysql_select_db("MyDatabase",$server);
    $query = mysql_query("select * from employees");
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 style="margin-bottom: 60px;">
                Shopping Cart
            </h2>
        </div>
        <div class="col-md-12">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <td>Image</td>
                        <td>Product Name</td>
                        <td>Price</td>
                        <td>Quantity</td>
                    </tr>
                </thead>
                <tbody>
                <?php
                    while ($row = mysql_fetch_array($query)) {
                        echo "<tr>";
                        echo "<td width='80'>".$row[Image]."</td>";
                        echo "<td style='vertical-align: middle;'>".$row[Product]."</td>";
                        echo "<td style='vertical-align: middle;'>".$row[Price]."</td>";
                        echo "<td style='vertical-align: middle;'>".$row[Quantity]."</td>";
                        echo "</tr>";
                    }
                ?>
                </tbody>
            </table>
        </div>
        <div class="col-md-12">
            <div class="pull-right">
                <a href="productPage.html" class="btn">Back to Shopping</a>
                <a href="#" class="btn btn-success">Checkout</a>
            </div>
        </div>


    </div>
</div>
</body>
</html>
