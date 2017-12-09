<?php
    $emailAddress = $_POST['email'];
    $userPassword = $_POST['password'];
    $userUsername = $_POST['username'];
    $state = $_POST['state'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $zipCode = $_POST['zipCode'];

    $servername = "localhost";
    $username = "root";
    $password = "Opg523c3";
    $database = "CoolGuyShirtCo";
    $db = mysqli_connect($servername, $username, $password, $database);
    $sql = "INSERT INTO Users VALUES('$userUsername', '$address', '$state', '$userPassword', '$emailAddress', '$phone', '$zipCode')";
    mysqli_query($db, $sql);
    mysqli_close($db);
    header('Location: accountPage.php');
?>

