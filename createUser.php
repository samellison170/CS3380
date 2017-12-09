<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Login Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<body>
   <?php include("main.php"); ?>
        <script>  
            $(document).ready(function(){
                $("#account-page").addClass("active");
            });
        </script>

    <!-- Login Form -->
    <div class="container">
        <form class="form-horizontal" action="create.php" method="post">
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Username:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="pwd" placeholder="Enter username" name="username">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Password:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">State:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="pwd" placeholder="Enter state(MO)" name="state">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Address:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="pwd" placeholder="Enter address" name="address">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">ZIP Code:</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="pwd" placeholder="Enter ZIP code" name="zipCode">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Phone:</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="pwd" placeholder="Enter phone number" name="phone">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>
    </div>

</body>
</html>
