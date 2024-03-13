<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'jsuars';

$conn = new MySQLi($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
}

// Use prepared statement to prevent SQL injection
$stmt = $conn->prepare("SELECT id,cert_no, id_no, first_name, middle_name, last_name, email, phone, universityOption1, universityOption2, universityOption3, courseOption1, courseOption2, courseOption3 FROM application");

// Execute the statement
$stmt->execute();

// Get result set
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Output table header
    echo "<table border='1'>
        <tr>
            <th>Cert No</th>
            <th>ID No</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>University Option 1</th>
            <th>University Option 2</th>
            <th>University Option 3</th>
            <th>Course Option 1</th>
            <th>Course Option 2</th>
            <th>Course Option 3</th>
            <th>Action</th>
            <th>Action</th>
        </tr>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["cert_no"] . "</td>
                <td>" . $row["id_no"] . "</td>
                <td>" . $row["first_name"] . "</td>
                <td>" . $row["middle_name"] . "</td>
                <td>" . $row["last_name"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["phone"] . "</td>
                <td>" . $row["universityOption1"] . "</td>
                <td>" . $row["universityOption2"] . "</td>
                <td>" . $row["universityOption3"] . "</td>
                <td>" . $row["courseOption1"] . "</td>
                <td>" . $row["courseOption2"] . "</td>
                <td>" . $row["courseOption3"] . "</td>
                <td><a href='application_update.php?id=" . $row["id"] . "'>Update</a></td>
                <td><a href='application_delete.php?id=" . $row["id"] . "'>Delete</a></td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No records found.";
}

// Close the statement
$stmt->close();

// Close the connection
$conn->close();
?>
