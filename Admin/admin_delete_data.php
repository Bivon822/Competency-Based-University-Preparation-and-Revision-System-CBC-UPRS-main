
<?php
    include 'connect.php';
$primaryKeyValue = $_POST['University_code'];
$tableName = 'university';
$primaryKeyColumn = 'University_code';


$sql = "DELETE FROM university WHERE University_code=?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $primaryKeyValue);
if ($stmt->execute()) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $stmt->error;
}
$stmt->close();
$conn->close();
?>
