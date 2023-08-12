<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}




</style>
</head>
<body>

<h2>My Projects</h2>

<table>
  <tr>
    <th>ID</th>
    <th>Title</th>
    <th>Description</th>
    <th>Image</th>
  </tr>
  
  <?php
    // Establish database connection (replace with your connection code)
    $db = new mysqli('localhost', 'root', 'root', 'projects');

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    // SQL query to retrieve data from project_details table
    $sql = "SELECT * FROM project_details";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["Title"] . "</td>";
            echo "<td>" . $row["Description"] . "</td>";
            echo "<td><img src='" . $row["Image"] . "' alt='Project Image' width='100'></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No projects found.</td></tr>";
    }

    // Close the connection
    $db->close();
  ?>
  




</body>
</html>
