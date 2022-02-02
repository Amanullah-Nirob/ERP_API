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
    $this->Cell(50,10,'Employee List',1,0,'C');
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
    $this->SetFont('Arial','B',14);
    $this->Cell(10,10,'ID',1,0,'C');
    $this->Cell(50,10,'Name',1,0,'C');
    $this->Cell(60,10,'Email',1,0,'C');
    $this->Cell(40,10,'Phone',1,0,'C');
    $this->Cell(30,10,'role',1,0,'C');
    $this->Ln();
}
}

// Instanciation of inherited class
    // Select data from MySQL database
    $select = "SELECT * FROM `users2` ORDER BY id";
    $result = $conn->query($select);
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->HeaderTable();
    $pdf->SetFont('Arial','',12);

     while($row = $result->fetch_object()){
      $id = $row->id;
      $name = $row->name;
      $email = $row->email;
      $phone = $row->phone;
      $role = $row->role;
      // fetching from database
      $pdf->Cell(10,10,$id,1);
      $pdf->Cell(50,10,$name,1);
      $pdf->Cell(60,10,$email,1);
      $pdf->Cell(40,10,$phone,1);
      $pdf->Cell(30,10,$role,1);
      $pdf->Ln();
  }
$pdf->Output();
?>