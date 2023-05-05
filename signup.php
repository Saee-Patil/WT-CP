<?php
if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // validation and database insertion code goes here
    // ...

    // if signup is successful, redirect to login page
    header("Location: login.php");
    exit();
}
?>