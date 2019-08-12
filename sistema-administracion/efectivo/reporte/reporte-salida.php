<?php
include 'plantilla-salida.php';
require '../../conexion-sis-admin.php';
//consulta para los datos y guardar en variable resultado
$query     = "SELECT id_detalle_salida_efectivo, nombre_usuario, cantidad, descripcion, tipo_comprobante, numero_comprobante, fecha_salida FROM detalle_salida_efectivo";
$resultado = $conexion->query($query);
//consulta para la suma y guardar en varianle result
$sql       = "SELECT SUM(cantidad) as total FROM detalle_salida_efectivo";
$result    = mysqli_query($conexion, $sql);
//formato del documento con los datos
$pdf       = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFillColor(232, 232, 232);
$pdf->SetFont('Arial', 'B', 7);
$pdf->Cell(10, 6, 'ID', 1, 0, 'C', 1);
$pdf->Cell(20, 6, 'USUARIO', 1, 0, 'C', 1);
$pdf->Cell(20, 6, 'CANTIDAD', 1, 0, 'C', 1);
$pdf->Cell(25, 6, 'DESCRIPCION', 1, 0, 'C', 1);
$pdf->Cell(35, 6, 'TIPO DE COMPROBANTE', 1, 0, 'C', 1);
$pdf->Cell(37, 6, 'NUMERO DE COMPROBANTE', 1, 0, 'C', 1);
$pdf->Cell(30, 6, 'FECHA DE INGRESO', 1, 1, 'C', 1);
$pdf->SetFont('Arial', '', 6);
while ($row = $resultado->fetch_assoc()) {
    $pdf->Cell(10, 6, utf8_decode($row['id_detalle_salida_efectivo']), 1, 0, 'C');
    $pdf->Cell(20, 6, $row['nombre_usuario'], 1, 0, 'C');
    $pdf->Cell(20, 6, utf8_decode($row['cantidad']), 1, 0, 'C');
    $pdf->Cell(25, 6, utf8_decode($row['descripcion']), 1, 0, 'C');
    $pdf->Cell(35, 6, utf8_decode($row['tipo_comprobante']), 1, 0, 'C');
    $pdf->Cell(37, 6, utf8_decode($row['numero_comprobante']), 1, 0, 'C');
    $pdf->Cell(30, 6, utf8_decode($row['fecha_salida']), 1, 1, 'C');
}
while ($row2 = $result->fetch_assoc()) {
    $pdf->SetFont('Arial', 'B', 8);
    $pdf->Cell(30, 6, utf8_decode('Total:'), 1, 0, 'C');
    $pdf->Cell(20, 6, utf8_decode($row2['total']), 1, 1, 'C');
}
$pdf->Output();
?>