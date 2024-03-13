<?php 
    include 'connect.php';
    $id = $_GET['Id'];
    if(isset($id)){
        $sql = $conn ->prepare("DELETE FROM course WHERE Course_Code=$id");
        $sql -> execute();

    }
    echo '<script type="text/javascript">';
    echo 'alert("delete successfull");';
    echo 'window.location=\'register-new-university.php\';';
    echo '</script>';
?>