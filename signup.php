<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Here you would normally save the user to a database
    echo 'User registered successfully!';
} else {
    // If the request method is not POST, return a 405 error
    header($_SERVER["SERVER_PROTOCOL"] . " 405 Method Not Allowed", true, 405);
    echo '405 Method Not Allowed';
}
?>
