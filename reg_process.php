<?php

error_reporting(E_ALL);

session_start();

$servername = 'localhost';
$username = 'root';
$password = 'root';
$database = 'projects';

$ID = $_POST['id'];
$uname = $_POST['username'];
$rawpswd = $_POST['psw'];

// Hash the password
$hashedPassword = password_hash($rawpswd, PASSWORD_DEFAULT);

include("function.php");

// Perform form validation
$errors = validateRegForm($ID, $uname, $rawpswd);

if(empty($errors)){
//Connect to Database
$conn = new mysqli($servername, $username, $password, $database);

//Check connection
if ($conn->connect_error) {
    die("Connection Error: " . $conn->connect_error);
}

//Insert data into sql
$sql = "INSERT INTO regi_form_data (id, username, password) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $ID, $uname, $hashedPassword);

if ($stmt->execute()) {
    echo "Query Executed";
    header("Location: login.php");
    die();
} else {
    echo "Error Inserting Data" . $conn->error;
}

$stmt->close();
$conn->close();
}

foreach ($errors as $error) {
    echo $error . "<br>";
}

?>
