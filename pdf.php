<?php

$conn = mysqli_connect("localhost", "root", "", "invocie");



if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}


$query = "SELECT * FROM invoice_list";
$result = mysqli_query($conn, $query);


require('genrate.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 10, 'Invoice', 0, 1, 'C');
$pdf->Ln(5);

while ($row = mysqli_fetch_assoc($result)) {
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(60, 10, 'Id:', 0, 0);
    $pdf->Cell(60, 10, $row['id'], 0, 1);

    $pdf->Cell(60, 10, 'Invoice Code:', 0, 0);
    $pdf->Cell(60, 10, $row['invoice_code'], 0, 1);

    $pdf->Cell(60, 10, 'Customer Name:', 0, 0);
    $pdf->Cell(60, 10, $row['customer_name'], 0, 1);

    $pdf->Cell(60, 10, 'Type:', 0, 0);
    $pdf->Cell(60, 10, $row['type'], 0, 1);

    $pdf->Cell(60, 10, 'Sub_Total:', 0, 0);
    $pdf->Cell(60, 10, $row['sub_total'], 0, 1);

    $pdf->Cell(60, 10, 'Tax_rate:', 0, 0);
    $pdf->Cell(60, 10, $row['tax_rate'], 0, 1);

    $pdf->Cell(60, 10, 'Remarks:', 0, 0);
    $pdf->Cell(60, 10, $row['remarks'], 0, 1);

    $pdf->Cell(60, 10, 'Date_Created:', 0, 0);
    $pdf->Cell(60, 10, $row['date_created'], 0, 1);

    $pdf->Cell(60, 10, 'Date_Update:', 0, 0);
    $pdf->Cell(60, 10, $row['date_updated'], 0, 1);

    $pdf->Ln(5);
}


$pdf->Output('invoice.pdf', 'D');


?>