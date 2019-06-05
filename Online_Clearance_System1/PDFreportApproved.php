<?php

require('fpdf.php');

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'online_clearance_system');

$con = mysqli_connect(HOST, USER, PASS, DB) or die('Unable to Connect');

$sql = "SELECT user.Full_name,user.Student_ID,user.Institute,user.Program,student_request.Reason,student_request.Last_Class_Attend,student_request.Request_type,request_approve.Approved_By,offices.office_name,request_approve.Approved_Date from user INNER JOIN student_request ON user.Student_ID=student_request.Student_ID  INNER JOIN request_approve ON student_request.Student_ID= request_approve.Student_ID INNER JOIN offices ON request_approve.Status_Office=offices.office_id where request_approve.Status='Approved' and request_approve.Status_Office='8' ORDER BY Full_name ASC";

$r = mysqli_query($con, $sql);

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
   
    // Arial bold 15
  
    
    $this->SetFont('Arial','B',25);
    // Move to the right
    $this->Cell(100);
    // Title
         $this->Cell(120, 10, 'EIABC Registrar office', 0, 1, " ", FALSE);
        $this->Cell(60);
        $this->Cell(120, 10, 'Clearance request approved students report  ', 0, 0, " ", FALSE);
           $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',12);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}


$pdf = new PDF('L', 'mm', 'A3');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',15);
$pdf->SetFillColor(252, 245, 190);

$pdf->Cell(10, 20, "#", 1, 0, "", true);
$pdf->Cell(40, 20, "Full name", 1, 0, "", true);
$pdf->Cell(30, 20, "Student ID", 1, 0, "", true);
$pdf->Cell(30, 20, "Program", 1, 0, "", true);
$pdf->Cell(50, 20, "Reason", 1, 0, "", true);
$pdf->Cell(40, 20, "Last Class Attend", 1, 0, "", true);
$pdf->Cell(35, 20, "Clearance type", 1, 0, "", true);
$pdf->Cell(40, 20, "Approved By", 1, 0, "", true);
$pdf->Cell(45, 20, "Office Approved", 1, 0, "", true);
$pdf->Cell(50, 20, "Approved Date", 1, 0, "", true);
$pdf->MultiCell(50, 20, '', 0,'C');

$pdf->SetFillColor(252, 245, 245);
$count = 1;
while ($row = mysqli_fetch_assoc($r)) {

    $pdf->Cell(10, 10, "{$count}", 1, 0, "", true);
    $pdf->Cell(40, 10, "{$row['Full_name']}", 1, 0, "", true);
    $pdf->Cell(30, 10, "{$row['Student_ID']}", 1, 0, "", true);
    $pdf->Cell(30, 10, "{$row['Program']}", 1, 0, "", true);
    $pdf->Cell(50, 10, "{$row['Reason']}", 1, 0, "", true);
    $pdf->Cell(40, 10, "{$row['Last_Class_Attend']}", 1, 0, "", true);
    $pdf->Cell(35, 10, "{$row['Request_type']}", 1, 0, "", true);
    $pdf->Cell(40, 10, "{$row['Approved_By']}", 1, 0, "", true);
    $pdf->Cell(45, 10, "{$row['office_name']}", 1, 0, "", true);
    $pdf->Cell(50, 10, "{$row['Approved_Date']}", 1, 0, "", true);
    $pdf->MultiCell(50, 20, '', 0,'C');
    $count++;
}


$pdf->output();


