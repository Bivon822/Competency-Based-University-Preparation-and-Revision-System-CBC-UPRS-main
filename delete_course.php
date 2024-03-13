<?php
// Database connection
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "university_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming you have the course ID passed through GET parameter
$courseId = $_GET['id'];

// SQL to delete data from the database
$sql = "DELETE FROM courses WHERE id=$courseId";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
