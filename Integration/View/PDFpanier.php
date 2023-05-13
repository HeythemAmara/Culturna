<?php
        require('fpdf1/fpdf.php');
    require_once "../Model/cart.php";
require_once "../Model/products.php";
require_once "../View/panier.php";
// Create a new PDF instance
$pdf = new FPDF();
$pdf->AddPage();
// Set the font and font size
$pdf->SetFont('Arial','B',16);
// Add the heading with website name
$pdf->Cell(0,10,'Skapere Shopping Cart', 0, 1, 'C');
// Add the items in a bordered table
$pdf->Ln();
$pdf->SetFont('Arial','',12);
$pdf->Cell(70,10,'Product Name', 1, 0, 'C');
$pdf->Cell(30,10,'Quantity', 1, 0, 'C');
$pdf->Cell(30,10,'Price', 1, 0, 'C');
$pdf->Cell(40,10,'Subtotal', 1, 0, 'C');
$pdf->Ln();
foreach ($products_in_cart as $product_in_cart) {
    $pdf->Cell(70,10,$product_in_cart['name'], 1);
    $pdf->Cell(30,10,$product_in_cart['quantity'], 1, 0, 'C');
    $pdf->Cell(30,10,$product_in_cart['price'].' $/-', 1, 0, 'R');
    $pdf->Cell(40,10,$product_in_cart['subtotal'].' $/-', 1, 0, 'R');
    $pdf->Ln();
}
// Add the total price
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10,'Total Price: '.$total_price.' $/-', 0, 1, 'R');
// Add social media links at the bottom of the page
$pdf->Ln(20);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10,'Connect with us:', 0, 1, 'C');
$pdf->SetFont('Arial','',10);
$pdf->Cell(0,10,'Facebook: @skapere', 0, 1, 'C');
$pdf->Cell(0,10,'Instagram: @skapere', 0, 1, 'C');
$pdf->Cell(0,10,'Twitter: @skapere', 0, 1, 'C');
// Center the table on the page
$pdf->Output('D','shopping_cart.pdf');
?> 
