<?php
include "connect.php";

$query_universities = "SELECT DISTINCT University_Name, University_code FROM university";
$result_universities = mysqli_query($conn, $query_universities);

if (!$result_universities) {
    die("Error in fetching universities: " . mysqli_error($conn));
}

while ($row_university = mysqli_fetch_assoc($result_universities)) {
      echo '<option value="' . htmlspecialchars($row_university['University_Name']) . '">'
    . htmlspecialchars($row_university['University_Name']) . '</option>';
}

// Close the database connection
mysqli_close($conn);
?>
