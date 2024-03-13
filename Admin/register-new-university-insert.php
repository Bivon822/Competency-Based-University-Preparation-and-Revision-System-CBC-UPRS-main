<?php
include "connect.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $code = $_POST['code'];
    $Uname=$_POST['Uname'];
    
   $query = "SELECT * FROM university WHERE University_code = '$code'";
   $result = mysqli_query($conn, $query);

   if (mysqli_num_rows($result) > 0) {
      
       echo 'duplicate';
   } else {
     
       $insert_query = "INSERT INTO university (University_code, University_Name)
       VALUES ('$code', '$Uname')";
       if (mysqli_query($conn, $insert_query)) {
       
           echo 'success';
       } else {
           
           echo "Error: " . $insert_query . "<br>" . mysqli_error($conn);
       }
   }
}
?>

