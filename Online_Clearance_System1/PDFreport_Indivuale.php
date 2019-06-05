 <?php   
include 'fpdf.php';
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
   
    // Arial bold 15
  
    
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(120,10,'EIABC Clearance Approved Students Report',1,0," ",FALSE);
    
   
    $this->Ln(40);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
  define('HOST','localhost');
    define('USER','root');
    define('PASS','');
    define('DB','online_clearance_system'); 
	$response = array(); 
    $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect'); 
  if(isset($_POST['Student_id'])){
      $Student_ID=$_POST['Student_id'];
              $sql="SELECT user.Full_name,user.Student_ID,user.Institute,user.Program,student_request.Reason,student_request.Last_Class_Attend,student_request.Request_type,request_approve.Approved_By,offices.office_name,request_approve.Approved_Date from user INNER JOIN student_request ON user.Student_ID=student_request.Student_ID  INNER JOIN request_approve ON student_request.Student_ID= request_approve.Student_ID INNER JOIN offices ON request_approve.Status_Office=offices.office_id where request_approve.Status='Approved' and user.Student_ID='{$Student_ID}'";

        $r = mysqli_query($con,$sql);

       
        $pdf=new PDF('L','mm','A4');
                        $pdf->AddPage();
                       
                          
                          
                                              
                         $pdf->SetFillColor(252,245,200);
                          $pdf->SetFont("Arial", '', 10);
                         $pdf->SetTitle(" Report");
                     
	              
	           
                         
                        $pdf->Cell(10, 20, "#", 1, 0, "", true);
			$pdf->Cell(30, 20, "Full name", 1, 0, "", true);
			$pdf->Cell(30, 20, "Student ID", 1, 0, "", true);
			$pdf->Cell(30, 20, "Program", 1, 0, "", true);
			$pdf->Cell(30, 20, "Reason", 1, 0, "", true);
                        $pdf->Cell(30, 20, "Last Class Attend", 1, 0, "", true);
                        $pdf->Cell(30, 20, "Clearance type", 1, 0, "", true);
                        $pdf->Cell(30, 20, "Approved By", 1, 0, "", true);
                        $pdf->Cell(30, 20, "Office Approved", 1, 0, "", true);
                        $pdf->Cell(40, 20, "Approved Date", 1, 0, "", true);
                        $pdf->MultiCell(0, 20, '', 0);
                        $pdf->SetFillColor(252,245,245);
                        $count=1;
        while($row = mysqli_fetch_assoc($r))
        { 
           
                                $pdf->Cell(10, 10, "{$count}", 1, 0, "", true);
                                $pdf->Cell(30, 10, "{$row['Full_name']}", 1, 0, "", true);
	                        $pdf->Cell(30, 10, "{$row['Student_ID']}", 1, 0, "", true);
				$pdf->Cell(30, 10, "{$row['Program']}", 1, 0, "", true);
                                $pdf->Cell(30, 10, "{$row['Reason']}", 1, 0, "", true);
				$pdf->Cell(30, 10, "{$row['Last_Class_Attend']}", 1, 0, "", true);
                                $pdf->Cell(30, 10, "{$row['Request_type']}", 1, 0, "", true);
                                $pdf->Cell(30, 10, "{$row['Approved_By']}", 1, 0, "", true);
                                $pdf->Cell(30, 10, "{$row['office_name']}", 1, 0, "", true);
                                $pdf->Cell(40, 10, "{$row['Approved_Date']}", 1, 0, "", true);
				$pdf->MultiCell(0, 20, '', 0);
                                $count++;
				
        }

     
       $pdf->output(); 
    		
  }else{
    $response['error'] = true; 
  }		
echo json_encode($response);	