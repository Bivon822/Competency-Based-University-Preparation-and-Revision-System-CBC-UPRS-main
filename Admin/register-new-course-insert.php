<?php


include "connect.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $c_code = $_POST['course_code'];
  $cname=$_POST['course_name'];
  $Ucode=$_POST['university_code'];
  

   $query = "SELECT * FROM course WHERE Course_Code = '$c_code'";
   $result = mysqli_query($conn, $query);

   if (mysqli_num_rows($result) > 0) {
       // Data already exists
       echo 'duplicate';
   } else {
       // Data doesn't exist, proceed with insertion
       $insert_query = "INSERT INTO course (Course_code, Course_name, University_Code) 
       VALUES ('$c_code', '$cname', '$Ucode')";

       if (mysqli_query($conn, $insert_query)) {
           // Insertion successful
           echo 'success';
       } else {
           // Insertion failed
           echo "Error: " . $insert_query . "<br>" . mysqli_error($conn);
       }
   }
}
?>