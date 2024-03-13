<?php
include "connect.php";
session_start(); 

$username= $_POST['username'];
$pass= $_POST['pass'];
$sql= " SELECT * from student_info where Cert_Number= '$username' AND index_number ='$pass' ";
$result=mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if ($row['Cert_Number'] === $username && $row['index_number'] === $pass) {
        $_SESSION['Username'] = $row['Student_Name'];
        $_SESSION['id'] = $row['Cert_Number'];
        $_SESSION['id'] = $row['index_number'];
        header("location:user-profile.php");
        exit();
    }
    else{
        header("Location:index.php?error=Incorect User name or password");
		        exit();
    }
}
else{
    header("location: index.php?error=Incorect User name or password");
}

?>