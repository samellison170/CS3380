<?php
    $emailAddress = $_POST['EmailAddress'];
    $userPassword = $_POST['Password'];
    $servername = "localhost";
    $username = "root";
    $password = "Opg523c3";
    $database = "CoolGuyShirtCo";
    $db = mysqli_connect($servername, $username, $password, $database);
    $sql = "DELETE FROM Users WHERE EmailAddress = '$emailAddress' AND Password = '$userPassword'";
    mysqli_query($db, $sql);
    mysqli_close($db);
    header('Location: accountPage.php');
?>
