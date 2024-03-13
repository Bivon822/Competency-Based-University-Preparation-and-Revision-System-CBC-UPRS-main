<?php
include "connect.php";

$query = "SELECT course_name FROM course";
$result = mysqli_query($conn, $query);


if (!$result) {
    die("Error in fetching data: " . mysqli_error($conn));
}
//ur

$options = '';
while ($row = mysqli_fetch_assoc($result)) {
    $options .= '<option value="' . htmlspecialchars($row['course_name']) . '">'
     . htmlspecialchars($row['course_name']) . '</option>';
}

// Close the database connection
mysqli_close($conn);
?>