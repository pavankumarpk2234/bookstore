<?php
// Database connection details
$servername = "localhost";    // or your remote server name
$username = "root";  // MySQL username
$password = "2234";  // MySQL password
$dbname = "register";    // Database name

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
