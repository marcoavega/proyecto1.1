<?php
require 'fpdf/fpdf.php';
class PDF extends FPDF
{
    function Header()
    {
        $this->Image('../../imagenes/logo_iglesia_de_dios_valle_verde.png', 5, 5, 50);
        $this->SetFont('Arial', 'B', 15);
        $this->Cell(30);
        $this->Cell(120, 10, 'Reporte De Entradas de efectivo', 0, 0, 'C');
        $this->Ln(20);
    }
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}
?>