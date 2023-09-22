<?php
// Database Connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "accounts";
$port=3308;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname,$port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Login Form Submit
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Sanitize input
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);
    
    // Check if user exists in database
    $sql = "SELECT * FROM accounts WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        echo "Welcome to shopping site.";
    } else {
        echo "User not registered.";
    }
}

$conn->close();
?>