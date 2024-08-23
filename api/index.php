<?php
// Database connection details
$servername = "sql10.freesqldatabase.com";    // or your remote server name
$username = "sql10727452";  // MySQL username
$password = "vUD7nqZA6F";  // MySQL password
$dbname = "sql10727452";    // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query the database
$sql = "SELECT * FROM your_table";
$result = $conn->query($sql);

// Fetch the data
$data = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Return data as JSON
echo json_encode($data);

// Close connection
$conn->close();
?>
