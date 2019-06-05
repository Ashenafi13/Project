<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'fpdf.php';

class PDF extends FPDF {

// Page header
    function Header() {
        // Logo
        // Arial bold 15


        $this->SetFont('Arial', 'B', 15);
        // Move to the right
        $this->Cell(80);
        // Title
        $this->Cell(120, 10, 'EIABC Registrar office', 0, 1, " ", FALSE);
        $this->Cell(60);
        $this->Cell(120, 10, 'Clearance request approved form ', 0, 0, " ", FALSE);
        // Line break
        $this->Ln(10);
        
    }

// Page footer
    function Footer() {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }

}

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'online_clearance_system');
$response = array();
$con = mysqli_connect(HOST, USER, PASS, DB) or die('Unable to Connect');
 if(isset($_POST['Student_id'])){
      $Student_ID=$_POST['Student_id'];

$sql = "SELECT user.Full_name,user.Student_ID,user.Institute,user.Program,student_request.Reason,student_request.Last_Class_Attend,student_request.Request_type,request_approve.Approved_By,offices.office_name,request_approve.Approved_Date from user INNER JOIN student_request ON user.Student_ID=student_request.Student_ID  INNER JOIN request_approve ON student_request.Student_ID= request_approve.Student_ID INNER JOIN offices ON request_approve.Status_Office=offices.office_id where request_approve.Status='Approved' and request_approve.Approved_Office=8 and user.Student_ID='{$Student_ID}'";

$r = mysqli_query($con, $sql);
$pdf = new PDF('L', 'mm', 'A4');
$pdf->AddPage();
$pdf->SetFillColor(252, 255, 255);
$pdf->SetFont('Arial', 'B', 15);
$pdf->Cell(5, 10, "Part I", 0, 1, "", true);
$pdf->SetFont("Arial", '', 10);
while ($row = mysqli_fetch_assoc($r)) {

    $pdf->Cell(30, 10, "Full name:-", 0, 0, "", true);
     $pdf->SetFont("Arial", 'U', 10);
    $pdf->Cell(30, 10, "{$row['Full_name']}", 0, 1, "", true);
     $pdf->SetFont("Arial", '', 10);
    $pdf->Cell(30, 10, "Student ID:-", 0, 0, "", true);
     $pdf->SetFont("Arial", 'U', 10);
    $pdf->Cell(30, 10, "{$row['Student_ID']}", 0, 1, "", true);
     $pdf->SetFont("Arial", '', 10);
    $pdf->Cell(30, 10, "Program:-", 0, 0, "", true);
     $pdf->SetFont("Arial", 'U', 10);
    $pdf->Cell(30, 10, "{$row['Program']}", 0, 1, "", true);
     $pdf->SetFont("Arial", '', 10);
    $pdf->Cell(30, 10, "Reason:-", 0, 0, "", true);
     $pdf->SetFont("Arial", 'U', 10);
    $pdf->Cell(30, 10, "{$row['Reason']}", 0, 1, "", true);
     $pdf->SetFont("Arial", '', 10);
    $pdf->Cell(30, 10, "Last Class Attend:-", 0, 0, "", true);
     $pdf->SetFont("Arial", 'U', 10);
    $pdf->Cell(30, 10, "{$row['Last_Class_Attend']}", 0, 1, "", true);
     $pdf->SetFont("Arial", '', 10);
    $pdf->Cell(30, 10, "Clearance type:-", 0, 0, "", true);
     $pdf->SetFont("Arial", 'U', 10);
    $pdf->Cell(30, 10, "{$row['Request_type']}", 0, 1, "", true);

    $pdf->SetFont('Arial', 'B', 15);
    $pdf->Cell(5, 10, "Part II", 0, 1, "", true);
    $pdf->SetFont("Arial", '', 10);
    if ($row['Program'] == 'Regular') {
        $pdf->Cell(45, 10, "Under graduate Directer :-", 0, 0, "", true);
        $pdf->SetFont("Arial", 'U', 10);
        $pdf->Cell(30, 10, "Approved", 0, 1, "", true);
        $pdf->SetFont("Arial", '', 10);
        $pdf->Cell(45, 10, "Student Service :-", 0, 0, "", true);
        $pdf->SetFont("Arial", 'U', 10);
        $pdf->Cell(30, 10, "Approved", 0, 1, "", true);
        $pdf->SetFont("Arial", '', 10);
        $pdf->Cell(45, 10, "Library :-", 0, 0, "", true);
         $pdf->SetFont("Arial", 'U', 10);
        $pdf->Cell(30, 10, "Approved", 0, 1, "", true);
        $pdf->SetFont("Arial", '', 10);
        $pdf->Cell(45, 10, "Tools center :-", 0, 0, "", true);
         $pdf->SetFont("Arial", 'U', 10);
        $pdf->Cell(30, 10, "Approved", 0, 1, "", true);
        $pdf->SetFont("Arial", '', 10);
        $pdf->Cell(45, 10, "Sudent business Affairs :-", 0, 0, "", true);
         $pdf->SetFont("Arial", 'U', 10);
        $pdf->Cell(30, 10, "Approved", 0, 1, "", true);
        $pdf->SetFont("Arial", '', 10);
        $pdf->Cell(45, 10, "Registrar :-", 0, 0, "", true);
         $pdf->SetFont("Arial", 'U', 10);
        $pdf->Cell(30, 10, "Approved", 0, 1, "", true);
        $pdf->SetFont("Arial", '', 10);
        $pdf->Cell(45, 10, "Last approved date :-", 0, 0, "", true);
         $pdf->SetFont("Arial", 'U', 10);
        $pdf->Cell(45, 10, "{$row['Approved_Date']}", 0, 1, "", true);
    } else {
        $pdf->Cell(45, 10, "Graduate Directer :-", 0, 0, "", true);
         $pdf->SetFont("Arial", 'U', 10);
        $pdf->Cell(40, 10, "Approved", 0, 1, "", true);
         $pdf->SetFont("Arial", '', 10);
        $pdf->Cell(45, 10, "EIABC Advisor :-", 0, 0, "", true);
         $pdf->SetFont("Arial", 'U', 10);
        $pdf->Cell(40, 10, "Approved", 0, 1, "", true);
         $pdf->SetFont("Arial", '', 10);
        $pdf->Cell(45, 10, "Library :-", 0, 0, "", true);
         $pdf->SetFont("Arial", 'U', 10);
        $pdf->Cell(40, 10, "Approved", 0, 1, "", true);
         $pdf->SetFont("Arial", '', 10);
        $pdf->Cell(45, 10, "Registrar :-", 0, 0, "", true);
         $pdf->SetFont("Arial", 'U', 10);
        $pdf->Cell(40, 10, "Approved", 0, 1, "", true);
         $pdf->SetFont("Arial", '', 10);
        $pdf->Cell(45, 10, "Last approved date :-", 0, 0, "", true);
         $pdf->SetFont("Arial", 'U', 10);
        $pdf->Cell(45, 10, "{$row['Approved_Date']}", 0, 1, "", true);
    }
}

$pdf->output();

}else{
    $response['error'] = true; 
  }		
echo json_encode($response);	
