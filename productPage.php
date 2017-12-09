<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Shirt Store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
    <?php include("main.php"); ?>
        <script>  
            $(document).ready(function(){
                $("#product-page").addClass("active");
            });
        </script>
<?php   
    $servername = "localhost";
    $username = "root";
    $password = "Opg523c3";
    $database = "CoolGuyShirtCo";
    $db = mysqli_connect($servername, $username, $password, $database);
    $sql1 = "SELECT Description FROM Users WHERE ProductID = '1'";
    $sql2 = "SELECT Description FROM Users WHERE ProductID = '2'";
    $sql3 = "SELECT Description FROM Users WHERE ProductID = '3'";
    $result1 = mysqli_query($db, $sql1);
    $result1 = mysqli_query($db, $sql2);
    $result1 = mysqli_query($db, $sql3);
    
    mysqli_close($db);
?>

<div class="container">    
    <div class="row">
      <div class="col-sm-4">
        <div class="panel panel-primary">
          <div class="panel-heading">Red Shirt</div>
          <div class="panel-body"><img src="images/shirt1.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
          
          <div class="panel-footer"><button onclick="shirt1()">Buy Now</button></div>
        </div>
      </div>
      <div class="col-sm-4"> 
        <div class="panel panel-primary">
          <div class="panel-heading">Green Shirt</div>
          <div class="panel-body"><img src="images/shirt2.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
          <div class="panel-footer"><button onclick="shirt2()">Buy Now</button></div>
        </div>
      </div>
      <div class="col-sm-4"> 
        <div class="panel panel-primary">
          <div class="panel-heading">Black Shirt</div>
          <div class="panel-body"><img src="images/shirt3.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
          <div class="panel-footer"><button onclick="shirt3()">Buy Now</button></div>
        </div>
      </div>
    </div>
  </div><br>
    <script>
        function shirt1() {
            alert("You Have Bought a Red Shirt for $10!");
        }
    </script>
    <script>
        function shirt2() {
            alert("You Have Bought a Green Shirt for $10!");
        }
    </script>
    <script>
        function shirt3() {
            alert("You Have Bought a Black Shirt for $10!");
        }
    </script>
    
  </body>
</html>
