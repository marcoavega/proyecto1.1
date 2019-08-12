<?php
include 'plantilla-totales.php';
require '../../conexion-sis-admin.php';
//consulta para mostrar en el reporte combinando ingresos egresos y restando
$query      = "SELECT id_detalle_entrada_efectivo AS id, nombre_usuario, cantidad AS cant, descripcion, tipo_comprobante, numero_comprobante, fecha_ingreso AS fecha FROM detalle_entrada_efectivo";
$resultado  = $conexion->query($query);
$query2     = "SELECT id_detalle_salida_efectivo AS id, nombre_usuario, cantidad AS cant, descripcion, tipo_comprobante, numero_comprobante, fecha_salida AS fecha FROM detalle_salida_efectivo";
$resultado2 = $conexion->query($query2);
$sql        = "SELECT (SELECT SUM(cantidad) FROM detalle_entrada_efectivo) + (SELECT SUM(cantidad) FROM detalle_salida_efectivo) as total";
$result     = mysqli_query($conexion, $sql);
//formato del documento con los datos
$pdf        = new PDF();
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
    $pdf->Cell(10, 6, utf8_decode($row['id']), 1, 0, 'C');
    $pdf->Cell(20, 6, $row['nombre_usuario'], 1, 0, 'C');
    $pdf->Cell(20, 6, utf8_decode($row['cant']), 1, 0, 'C');
    $pdf->Cell(25, 6, utf8_decode($row['descripcion']), 1, 0, 'C');
    $pdf->Cell(35, 6, utf8_decode($row['tipo_comprobante']), 1, 0, 'C');
    $pdf->Cell(37, 6, utf8_decode($row['numero_comprobante']), 1, 0, 'C');
    $pdf->Cell(30, 6, utf8_decode($row['fecha']), 1, 1, 'C');
}
while ($row2 = $resultado2->fetch_assoc()) {
    $pdf->Cell(10, 6, utf8_decode($row2['id']), 1, 0, 'C');
    $pdf->Cell(20, 6, $row2['nombre_usuario'], 1, 0, 'C');
    $pdf->Cell(20, 6, utf8_decode($row2['cant']), 1, 0, 'C');
    $pdf->Cell(25, 6, utf8_decode($row2['descripcion']), 1, 0, 'C');
    $pdf->Cell(35, 6, utf8_decode($row2['tipo_comprobante']), 1, 0, 'C');
    $pdf->Cell(37, 6, utf8_decode($row2['numero_comprobante']), 1, 0, 'C');
    $pdf->Cell(30, 6, utf8_decode($row2['fecha']), 1, 1, 'C');
}
while ($row3 = $result->fetch_assoc()) {
    $pdf->SetFont('Arial', 'B', 8);
    $pdf->Cell(30, 6, utf8_decode('Total:'), 1, 0, 'C');
    $pdf->Cell(20, 6, utf8_decode($row3['total']), 1, 1, 'C');
}
$pdf->Output();
?>