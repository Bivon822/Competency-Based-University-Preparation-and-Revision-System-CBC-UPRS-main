<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'jsuars';

$conn = new MySQLi($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
}

// Check if ID is provided in the URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Redirect to the update form
    header("Location: update_form.php?id=$id");
    exit();
} else {
    echo "Invalid or missing ID.";
}

// Close the connection
$conn->close();
?>
