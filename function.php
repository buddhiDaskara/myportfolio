<?php


//Login form validation
function validateForm($username,$password) {
    $errors = array();

    //validate username
    if(empty($username)){
        $errors[] = "Username is required";
    }

    //validate password
    if(empty($password)){
        $errors[] = "Password is required";
    }
    
    return $errors;
}

//Register form validation
function validateRegForm($id,$username,$password) {
    $errors = array();

    // Validate id
    if ($id === '' || $id === null) {
        $errors[] = "id is required";
    }

    //validate username
    if(empty($username)){
        $errors[] = "Username is required";
    }

    //validate password
    if(empty($password)){
        $errors[] = "Password is required";
    }
    
    return $errors;
}

function connectDatabase() {
    $host = 'localhost';
    $dbname = 'myprojects';
    $username = 'root';
    $password = 'root';

    try {
        $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return null;
    }
}


// Establish database connection (replace with your connection code)
$db = new mysqli('localhost', 'username', 'password', 'database');

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// SQL query to retrieve descriptions
$sql = "SELECT Description FROM project_details";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "Description: " . $row["Description"] . "<br>";
    }
} else {
    echo "0 results";
}

// Close the connection
$db->close();



function insertProject($db, $projectData) {
    $stmt = $db->prepare("INSERT INTO projects (id,Title,Description,Image) VALUES (:id,Title, :Description,:Image)");
    $stmt->bindParam(':id', $projectData['project_name']);
    $stmt->bindParam(':description', $projectData['project_description']);
    $stmt->execute();
}

function getProjects($db) {
    $stmt = $db->prepare("SELECT * FROM projects");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function updateProject($db, $projectData) {
    $stmt = $db->prepare("UPDATE projects SET project_description = :description WHERE project_name = :name");
    $stmt->bindParam(':name', $projectData['project_name']);
    $stmt->bindParam(':description', $projectData['project_description']);
    $stmt->execute();
}

function deleteProject($db, $projectName) {
    $stmt = $db->prepare("DELETE FROM projects WHERE project_name = :name");
    $stmt->bindParam(':name', $projectName);
    $stmt->execute();
}



?>
