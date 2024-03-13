<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'jsuars';

$conn = new mysqli($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
}

// Fetch universities from the database
$result = $conn->query("SELECT * FROM universities");

if ($result->num_rows > 0) {
    $universities = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $universities = [];
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Universities</title>
    <link rel="stylesheet" href="/STYLES/index.css">
</head>

<body>
    <div>
        <center>
            <h3 class="form-style-heading">REGISTERED UNIVERSITIES</h3>
        </center>
    </div>

    <table>
        <thead>
            <tr>
                <th>University Code</th>
                <th>University Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($universities as $university) { ?>
                <tr>
                    <td><?php echo $university['university_code']; ?></td>
                    <td><?php echo $university['university_name']; ?></td>
                    <td>Edit Button</td>
                    <td>Delete Button</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>
