<?php
require('fpdf.php');

include "connect.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selectedYear = isset($_POST['registrationYear']) ? $_POST['registrationYear'] : '';
    $selectedUniversityType = isset($_POST['UniversityType']) ? $_POST['UniversityType'] : '';
    $selectedCourseLevel = isset($_POST['CourseLevel']) ? $_POST['CourseLevel'] : '';
    
    
    $pdf = new FPDF();
    $pdf->AddPage();
    
    $pdf->SetFont('Arial', 'B', 20);
    $pdf->SetFillColor(200, 220, 255);
    $pdf->Cell(0, 10, 'System Report', 0, 1, 'C', true);
    $pdf->SetDrawColor(0, 0, 0); 

$pdf->SetLineWidth(0.5); 
$pdf->SetFillColor(200, 220, 255);



    if (!empty($selectedYear)) {
        $pdf->Cell(0, 10, 'Student Information - Year: ' . $selectedYear, 0, 1, 'C');
        $studentData = getStudentData($selectedYear);
        generatePDF($pdf, $studentData, ['Certification Number', 'Student Name', 'Index Number', 'Year']);
        $pdf->Ln();
    }

    if (!empty($selectedUniversityType)) {
        $pdf->Cell(0, 10, 'University Information - Type: ' . $selectedUniversityType, 0, 1, 'C');
        $universityData = getUniversityData($selectedUniversityType);
        generatePDF($pdf, $universityData, ['University Code', 'University Name']);
        $pdf->Ln(); 

    if (!empty($selectedCourseLevel)) {
        $pdf->Cell(0, 10, 'Course Information - Type: ' . $selectedCourseLevel, 0, 1, 'C');
        $courseData = getCourseData($selectedCourseLevel);
        generatePDF($pdf, $courseData, ['Course Code', 'Course Name', 'University Code', 'Trend',]);
    }
}

    $pdf->Output();
}

function generatePDF($pdf, $data, $headers) {
    if (empty($data)) {
        $pdf->Cell(0, 10, 'oops!No data found', 1, 1, 'C'); // Print a message when no data is found
        return;
    }

    $pdf->SetFont('Arial', 'B', 12);
    foreach ($headers as $header) {
        $pdf->Cell(40, 10, $header, 1);
    }
    $pdf->Ln();

    $pdf->SetFont('Arial', '', 12);
    foreach ($data as $row) {
        foreach ($row as $value) {
            $pdf->Cell(40, 10, $value, 1);
        }
        $pdf->Ln();
    }
}

function getStudentData($selectedYear) {
    global $conn;  // Assuming your database connection is in a global variable

    $selectedYear = $conn->real_escape_string($selectedYear);

    $sql = "SELECT Cert_Number, Student_Name, index_number, Year
            FROM student_info
            WHERE Year = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $selectedYear);
    $stmt->execute();

    $result = $stmt->get_result();
    $studentData = $result->fetch_all(MYSQLI_ASSOC);

    $stmt->close();

    return $studentData;
}

function getUniversityData($selectedUniversityType) {
    global $conn;

    $selectedUniversityType = $conn->real_escape_string($selectedUniversityType);

    $sql = "SELECT University_code, University_Name
            FROM university
            WHERE Type = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $selectedUniversityType);
    $stmt->execute();

    $result = $stmt->get_result();
    $universityData = $result->fetch_all(MYSQLI_ASSOC);

    $stmt->close();

    return $universityData;
}

function getCourseData($selectedCourseLevel) {
    global $conn;
    $selectedCourseLevel = $conn->real_escape_string($selectedCourseLevel);

    $sql = "SELECT Course_Code, Course_name, University_Code, Trend
            FROM course
            WHERE Level= ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $selectedCourseLevel);
    $stmt->execute();

    $result = $stmt->get_result();
    $courseData = $result->fetch_all(MYSQLI_ASSOC);

    $stmt->close();

    return $courseData;
}
?>
