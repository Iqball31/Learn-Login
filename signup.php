<?php
// Dummy signup logic for demonstration
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Here you would normally save the user to a database
    echo 'User registered successfully!';
}
?>
