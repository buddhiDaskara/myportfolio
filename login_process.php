<?php

error_reporting(E_ALL);

session_start();

$servername = 'localhost';
$username = 'root';
$password = 'root';
$database = 'projects';

include("function.php");

// Validate and sanitize user inputs
$inputUsername = isset($_POST['username']) ? $_POST['username'] : '';
$inputPassword = isset($_POST['psw']) ? $_POST['psw'] : '';

// Perform form validation
$errors = validateForm($inputUsername, $inputPassword);

if (empty($errors)) {
    // Connect to Database
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection Error: " . $conn->connect_error);
    }

    // Prepare and execute a SQL query to fetch user data based on the input username
    $sql = "SELECT * FROM regi_form_data WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $inputUsername);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && mysqli_num_rows($result) > 0) {
        $row = $result->fetch_assoc();
        $storedPassword = $row['password'];

        // If the stored password is hashed, verify it
        if (password_verify($inputPassword, $storedPassword)) {
            $_SESSION['username'] = $inputUsername; // Store user data in session
            header("Location: portfolio.php");
            exit(); // Terminate the script
        } else {
            echo "Invalid username or password"; // Provide a general error message
        }
    } else {
        echo "User not found";
    }

    $stmt->close();
    $conn->close();
}

foreach ($errors as $error) {
    echo $error . "<br>";
}

?>
