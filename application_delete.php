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

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("DELETE FROM application WHERE id = ?");
    
    // Bind parameter
    $stmt->bind_param("i", $id);

    // Execute the statement
    $stmt->execute();

    // Check if the query was successful
    if ($stmt->affected_rows > 0) {
        echo "Record with ID $id deleted successfully!";
    } else {
        echo "Failed to delete record with ID $id.";
    }

    // Close the statement
    $stmt->close();

    // Redirect back to the original page
    header("Location: application_view.php");
    exit();
} else {
    echo "Invalid or missing ID.";
}

// Close the connection
$conn->close();
?>
