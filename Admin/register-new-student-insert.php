
  <?php
include "connect.php";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name = $_POST['student_Name'];
    $cert_number=$_POST['cert_number'];
    $id = $_POST['identification_number'];

$checkQuery = "SELECT * FROM student_info WHERE Cert_Number = '$cert_number'";
$result = $conn->query($checkQuery);

if ($result->num_rows > 0) {

    echo json_encode(['success' => false, 'message' => 'Data already exists in the database.']);
} else {
 
    $insertQuery ="INSERT INTO student_info ( Cert_Number, Student_Name, Id_Number)
    VALUES ('$cert_number','$name', '$id')";
    
    if ($conn->query($insertQuery) === TRUE) {
        echo json_encode(['success' => true, 'message' => 'Data submitted successfully!']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error submitting data.']);
    }
}

$conn->close();
?>