<?php
if (!empty($_POST['submit'])) {
    $heading = $_POST['title'];
    $criteria1 = $_POST['cri1'];
    $criteria2 = $_POST['cri2'];
    $criteria3 = $_POST['cri3'];
    $criteria4 = $_POST['cri4'];

    require("fpdf/fpdf.php");

    $pdf = new FPDF();
    $pdf->AddPage();

    $pdf->SetFont("Arial", "", 8);
    $pdf->Cell(0, 10, "Key elements of Department Mission", 1, 1, 'C');


    // $pdf->Cell(20, 30, "PEOs", 1, 0);
    // $pdf->MultiCell(20, 5, "Quality education in fundamentals through innovative TLP.", 1, 'C', false);
    // $pdf->Ln(-1);
    // $pdf->MultiCell(20, 5, "Define, design and Solving engineering problems", 1, 'C', false);
    // $pdf->MultiCell(20, 5, "Imbibing creativity, innovation and encouraging Research culture", 1, 'C', false);
    // $pdf->MultiCell(20, 5, "Inculcating leadership qualities, Professional ethics and Social responsibility", 1, 'C', false);

    // $pdf->MultiCell(20, 5, "PEOs", 1, 'C', false, 1, 25);
    // $pdf->MultiCell(20, 5, "Quality education in fundamentals through innovative TLP.", 1, 'C', false, 1, 45);
    // $pdf->MultiCell(20, 5, "Define, design and Solving engineering problems", 1, 'C', false, 1, 165);
    // $pdf->MultiCell(20, 5, "Imbibing creativity, innovation and encouraging Research culture", 1, 'C', false, 1, 235);
    // $pdf->MultiCell(20, 5, "Inculcating leadership qualities, Professional ethics and Social responsibility", 1, 'C', false, 1, 305);


    // $pdf->MultiCell(20, 5, "PEOs", 1, 'C', false);
    // $xPos = $pdf->GetX();
    // $yPos = $pdf->GetY();
    // $pdf->SetXY($xPos + 70, $yPos);

    // $pdf->MultiCell(20, 5, "Quality education in fundamentals through innovative TLP.", 1, 'C', false);
    // $xPos = $pdf->GetX();
    // $yPos = $pdf->GetY();
    // $pdf->SetXY($xPos + 70, $yPos);

    // $pdf->MultiCell(20, 5, "Define, design and Solving engineering problems", 1, 'C', false);
    // $xPos = $pdf->GetX();
    // $yPos = $pdf->GetY();
    // $pdf->SetXY($xPos + 70, $yPos);

    // $pdf->MultiCell(20, 5, "Imbibing creativity, innovation and encouraging Research culture", 1, 'C', false);
    // $xPos = $pdf->GetX();
    // $yPos = $pdf->GetY();
    // $pdf->SetXY($xPos + 70, $yPos);

    // $pdf->MultiCell(20, 5, "Inculcating leadership qualities, Professional ethics and Social responsibility", 1, 'C', false);


    // $pdf->MultiCell(20, 10, "PEOs", 1, 'C', false);
    // $pdf->SetX(30);
    // $pdf->MultiCell(60, 10, "Quality education in fundamentals through innovative TLP.", 1, 'C', false);
    // $pdf->SetX(90);
    // $pdf->MultiCell(40, 10, "Define, design and solving engineering problems", 1, 'C', false);
    // $pdf->SetX(130);
    // $pdf->MultiCell(50, 10, "Imbibing creativity, innovation and encouraging Research culture", 1, 'C', false);
    // $pdf->Ln();
    // $pdf->SetX(30);
    // $pdf->MultiCell(60, 10, "", 1, 'C', false);
    // $pdf->SetX(90);
    // $pdf->MultiCell(40, 10, "Inculcating leadership qualities, Professional ethics and Social responsibility", 1, 'C', false);

    $pdf->Cell(20, 10, "PEOs", 1, 0, 'C');
    $pdf->Cell(20, 10, "Quality education in fundamentals through innovative TLP.", 1, 0, 'C');
    $pdf->Cell(20, 10, "Define, design and Solving engineering problems", 1, 0, 'C');
    $pdf->Cell(20, 10, "Imbibing creativity, innovation and encouraging Research culture", 1, 0, 'C');
    $pdf->Cell(20, 10, "Inculcating leadership qualities, Professional ethics and Social responsibility", 1, 1, 'C');




    $pdf->Cell(20, 10, $heading, 1, 0);
    $pdf->Cell(20, 10, $criteria1, 1, 0);
    $pdf->Cell(20, 10, $criteria2, 1, 0);
    $pdf->Cell(20, 10, $criteria3, 1, 0);
    $pdf->Cell(0, 10, $criteria4, 1, 0);

    $pdf->output();
}
?>