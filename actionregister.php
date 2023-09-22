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

// Register Form Submit
if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Sanitize input
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);
    
    // Check if user already exists
    $sql = "SELECT * FROM accounts WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        echo "Already registered.";
    } else {
        // Insert new user into database
        $sql = "INSERT INTO accounts (email, password) VALUES ('$email', '$password')";
        if ($conn->query($sql) === TRUE) {
            echo "Registered successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
$conn->close();
?>
