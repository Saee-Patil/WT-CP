<?php
session_start();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the username and password are correct
    if ($username === 'myusername' && $password === 'mypassword') {
        // If they are correct, set the session variable and redirect to the home page
        $_SESSION['username'] = $username;
        header('Location: home.php');
        exit();
    } else {
        // If they are not correct, display an error message
        $error = 'Invalid username or password';
    }
}
?>