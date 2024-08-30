<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// Dummy credentials for demonstration
$validUsername = 'admin';
$validPassword = 'password';

if ($username === $validUsername && $password === $validPassword) {
    $_SESSION['loggedin'] = true;
    header('Location: admin.php');
} else {
    echo 'Invalid credentials';
}
?>
