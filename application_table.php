<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'jsuars';

$conn = new MySQLi($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    // Fetching variables of the form which travels in URL
    $cert_no = $_POST['cert_no'];
    $id_no = $_POST['id_no'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $universityOption1 = $_POST['sess1'];
    $universityOption2 = $_POST['sess2'];
    $universityOption3 = $_POST['sess3'];
    
    $courseOption1 = $_POST['course1'];
    $courseOption2 = $_POST['course2'];
    $courseOption3 = $_POST['course3'];
    $currentdate=date("Y-m-d");


    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO applications (cert_no, id_no, first_name, middle_name, last_name, email, phone, universityOption1, universityOption2, universityOption3, courseOption1, courseOption2, courseOption3, Application_date)
     VALUES ( '$cert_no', '$id_no', '$first_name', '$middle_name', '$last_name', '$email', '$phone', '$universityOption1', '$universityOption2', '$universityOption3', '$courseOption1', '$courseOption2', '$courseOption3', '$currentdate')");

    // Bind parameters
    //$stmt->bind_param("sssssssssssss",);

    // Execute the statement
    $stmt->execute();

    // Check if the query was successful
    if ($stmt->affected_rows > 0) {
        echo "<br/><br/><span>Data Inserted successfully...!!</span>";
    } else {
        echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
    }

    // Close the statement
    $stmt->close();
} else {
    echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}

// Close the connection
$conn->close();
?>
