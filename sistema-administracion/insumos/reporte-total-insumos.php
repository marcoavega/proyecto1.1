<?php
include 'reportes/plantilla.php';
include "../conexion-sis-admin.php";
$query     = "SELECT id_detalle_entrada_insumos, nombre_usuario, nombre_articulo, descripcion_articulo, cantidad, codigo_barras, fecha FROM detalle_entrada_insumos";
$resultado = $conexion->query($query);
$pdf       = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFillColor(232, 232, 232);
$pdf->SetFont('Arial', 'B', 7);
$pdf->Cell(10, 6, 'ID', 1, 0, 'C', 1);
$pdf->Cell(20, 6, 'USUARIO', 1, 0, 'C', 1);
$pdf->Cell(25, 6, 'NOMBRE ARTICULO', 1, 0, 'C', 1);
$pdf->Cell(25, 6, 'DESCRIPCION', 1, 0, 'C', 1);
$pdf->Cell(35, 6, 'CANTIDAD EN INVENTARIO', 1, 0, 'C', 1);
$pdf->Cell(37, 6, 'CODIGO DE BARRAS', 1, 0, 'C', 1);
$pdf->Cell(30, 6, 'FECHA', 1, 1, 'C', 1);
$pdf->SetFont('Arial', '', 6);
while ($row = $resultado->fetch_assoc()) {
    $pdf->Cell(10, 6, utf8_decode($row['id_detalle_entrada_insumos']), 1, 0, 'C');
    $pdf->Cell(20, 6, $row['nombre_usuario'], 1, 0, 'C');
    $pdf->Cell(25, 6, utf8_decode($row['nombre_articulo']), 1, 0, 'C');
    $pdf->Cell(25, 6, utf8_decode($row['descripcion_articulo']), 1, 0, 'C');
    $pdf->Cell(35, 6, utf8_decode($row['cantidad']), 1, 0, 'C');
    $pdf->Cell(37, 6, utf8_decode($row['codigo_barras']), 1, 0, 'C');
    $pdf->Cell(30, 6, utf8_decode($row['fecha']), 1, 1, 'C');
}
$pdf->Output();
?> 