<?php
require('../fpdf184/fpdf.php');

// $conn = new mysqli('localhost', 'root', '', 'erp_api');
include_once '../../config/database.php';
$database = new Database();
$conn = $database->getConnection();

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('https://testerp.apodigi.com/static/media/logo.f092a4916c9c5447b72c.png',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(71);
    // Title
    $this->Cell(60,10,'Management Employee List',0,0,'C');
    // Line break
    $this->Ln(20);
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

function HeaderTable()
{
    $this->SetFont('Arial','B',9);
    $this->Cell(7,10,'ID',1,0,'C');
    $this->Cell(35,10,'Name',1,0,'C');
    $this->Cell(27,10,'Designation',1,0,'C');
    $this->Cell(15,10,'Salary',1,0,'C');
    $this->Cell(40,10,'Email',1,0,'C');
    $this->Cell(25,10,'Phone',1,0,'C');
    $this->Cell(45,10,'Address',1,0,'C');
    $this->Ln();
}
}

// Instanciation of inherited class
    // Select data from MySQL database
    $select = "SELECT * FROM `management_employee_read` ORDER BY id";
    $result = $conn->query($select);
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->HeaderTable();
    $pdf->SetFont('Arial','',8);

     while($row = $result->fetch_object()){
      $id = $row->id;
      $name = $row->employee_name;
      $designation = $row->designation;
      $salary = $row->salary;
      $email = $row->email;
      $phone = $row->phone;
      $address = $row->address;

      // fetching from database
      $pdf->Cell(7,10,$id,1);
      $pdf->Cell(35,10,$name,1);
      $pdf->Cell(27,10,$designation,1);
      $pdf->Cell(15,10,$salary,1);
      $pdf->Cell(40,10,$email,1);
      $pdf->Cell(25,10,$phone,1);
      $pdf->Cell(45,10,$address,1);
      $pdf->Ln();
  }
$pdf->Output();
?>