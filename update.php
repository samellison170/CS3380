<?php
    $emailAddress = $_POST['EmailAddress'];
    $Address = $_POST['Address'];
    $State = $_POST['State'];
    $servername = "localhost";
    $username = "root";
    $password = "Opg523c3";
    $database = "CoolGuyShirtCo";
    $db = mysqli_connect($servername, $username, $password, $database);
    $sql = "UPDATE Users SET Address = '$Address', State = '$State' WHERE EmailAddress = '$emailAddress'";
    echo "$sql";
    mysqli_query($db, $sql);
    mysqli_close($db);
    header('Location: accountPage.php');
?>
