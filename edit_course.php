<?php
// Database connection
$servername = "localhost";
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

// Assuming you have a form for editing the course details
// Retrieve form data
$courseCode = $_POST['courseCode'];
$courseName = $_POST['courseName'];
$universityCode = $_POST['universityCode'];

// SQL to update data in the database
$sql = "UPDATE courses SET course_code='$courseCode', course_name='$courseName', university_code='$universityCode' WHERE id=$courseId";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
