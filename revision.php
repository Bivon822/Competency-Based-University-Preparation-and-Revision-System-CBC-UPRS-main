<?php
session_start();
include "connect.php";
$cert_Number=$_SESSION['id'];
$universityOption1 = $_POST['university1'];
    $universityOption2 = $_POST['university2'];
    $universityOption3 = $_POST['university3'];
    $currentdate=date("Y-m-d");

    $courseOption1 = $_POST['course1'];
    $courseOption1= $_POST['course2'];
    $courseOption3 = $_POST['course3'];

$sql = $conn -> prepare("UPDATE applications 
    SET 
    universityOption1 = '$universityOption1',
    universityOption2 = '$universityOption2',
    universityOption3= '$universityOption3',
    
    courseOption1 = '$courseOption1',
    courseOption2= '$courseOption1',
    courseOption3='$courseOption3',
    Revision_Date='$currentdate'

    WHERE cert_no= $cert_Number");
    $res = $sql -> execute();
    header("location:courseRevision.php");

?>







?>