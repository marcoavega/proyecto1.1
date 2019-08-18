<?php
include 'plantilla-totales.php';
include "../../../conexion-blog.php";
//consulta para mostrar en el reporte combinando ingresos egresos y restando
$sql    = "SELECT * FROM respuestas_1 ORDER BY nombre_usuario DESC";
$result = mysqli_query($conexion, $sql);
//formato del documento con los datos
$pdf    = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFillColor(232, 232, 232);
$pdf->SetFont('Arial', 'B', 7);


$pdf->SetFont('Arial', '', 6);
while ($row = $result->fetch_assoc()) {
    
    $pdf->SetFont('Arial', 'B', 11);
    $pdf->Cell(60, 6, 'USUARIO', 1, 0, 'C', 1);
    
    $pdf->MultiCell(0, 6, $row['nombre_usuario'], 1, 1);
    $pdf->Cell(60, 6, 'COMENTARIO', 1, 0, 'C', 1);
    $pdf->MultiCell(0, 6, utf8_decode($row['comentario']), 1, 1);
    $pdf->Cell(60, 6, 'FECHA DE COMENTARIO', 1, 0, 'C', 1);
    $pdf->MultiCell(0, 6, utf8_decode($row['fecha_comentario']), 1, 1);
    $pdf->Cell(60, 15, 'PREGUNTA', 1, 0, 'C', 1);
    $pdf->MultiCell(0, 10, utf8_decode($row['pregunta']), 1, 1);
    $pdf->Ln();
}

$sql2    = "SELECT * FROM respuestas_2 ORDER BY nombre_usuario DESC";
$result2 = mysqli_query($conexion, $sql2);
while ($row2 = $result2->fetch_assoc()) {
    
    $pdf->SetFont('Arial', 'B', 11);
    $pdf->Cell(60, 6, 'USUARIO', 1, 0, 'C', 1);
    
    $pdf->MultiCell(0, 6, $row2['nombre_usuario'], 1, 1);
    $pdf->Cell(60, 6, 'COMENTARIO', 1, 0, 'C', 1);
    $pdf->MultiCell(0, 6, utf8_decode($row2['comentario']), 1, 1);
    $pdf->Cell(60, 6, 'FECHA DE COMENTARIO', 1, 0, 'C', 1);
    $pdf->MultiCell(0, 6, utf8_decode($row2['fecha_comentario']), 1, 1);
    $pdf->Cell(60, 15, 'PREGUNTA', 1, 0, 'C', 1);
    $pdf->MultiCell(0, 10, utf8_decode($row2['pregunta']), 1, 1);
    $pdf->Ln();
}

$sql3    = "SELECT * FROM respuestas_3 ORDER BY nombre_usuario DESC";
$result3 = mysqli_query($conexion, $sql3);
while ($row3 = $result3->fetch_assoc()) {
    
    $pdf->SetFont('Arial', 'B', 11);
    $pdf->Cell(60, 6, 'USUARIO', 1, 0, 'C', 1);
    
    $pdf->MultiCell(0, 6, $row3['nombre_usuario'], 1, 1);
    $pdf->Cell(60, 6, 'COMENTARIO', 1, 0, 'C', 1);
    $pdf->MultiCell(0, 6, utf8_decode($row3['comentario']), 1, 1);
    $pdf->Cell(60, 6, 'FECHA DE COMENTARIO', 1, 0, 'C', 1);
    $pdf->MultiCell(0, 6, utf8_decode($row3['fecha_comentario']), 1, 1);
    $pdf->Cell(60, 15, 'PREGUNTA', 1, 0, 'C', 1);
    $pdf->MultiCell(0, 10, utf8_decode($row3['pregunta']), 1, 1);
    $pdf->Ln();
}

$sql4    = "SELECT * FROM respuestas_4 ORDER BY nombre_usuario DESC";
$result4 = mysqli_query($conexion, $sql4);
while ($row4 = $result4->fetch_assoc()) {
    
    $pdf->SetFont('Arial', 'B', 11);
    $pdf->Cell(60, 6, 'USUARIO', 1, 0, 'C', 1);
    
    $pdf->MultiCell(0, 6, $row4['nombre_usuario'], 1, 1);
    $pdf->Cell(60, 6, 'COMENTARIO', 1, 0, 'C', 1);
    $pdf->MultiCell(0, 6, utf8_decode($row4['comentario']), 1, 1);
    $pdf->Cell(60, 6, 'FECHA DE COMENTARIO', 1, 0, 'C', 1);
    $pdf->MultiCell(0, 6, utf8_decode($row4['fecha_comentario']), 1, 1);
    $pdf->Cell(60, 15, 'PREGUNTA', 1, 0, 'C', 1);
    $pdf->MultiCell(0, 10, utf8_decode($row4['pregunta']), 1, 1);
    $pdf->Ln();
}

$sql5    = "SELECT * FROM respuestas_5 ORDER BY nombre_usuario DESC";
$result5 = mysqli_query($conexion, $sql5);
while ($row5 = $result5->fetch_assoc()) {
    
    $pdf->SetFont('Arial', 'B', 11);
    $pdf->Cell(60, 6, 'USUARIO', 1, 0, 'C', 1);
    
    $pdf->MultiCell(0, 6, $row5['nombre_usuario'], 1, 1);
    $pdf->Cell(60, 6, 'COMENTARIO', 1, 0, 'C', 1);
    $pdf->MultiCell(0, 6, utf8_decode($row5['comentario']), 1, 1);
    $pdf->Cell(60, 6, 'FECHA DE COMENTARIO', 1, 0, 'C', 1);
    $pdf->MultiCell(0, 6, utf8_decode($row5['fecha_comentario']), 1, 1);
    $pdf->Cell(60, 15, 'PREGUNTA', 1, 0, 'C', 1);
    $pdf->MultiCell(0, 10, utf8_decode($row5['pregunta']), 1, 1);
    $pdf->Ln();
}

$sql6    = "SELECT * FROM respuestas_6 ORDER BY nombre_usuario DESC";
$result6 = mysqli_query($conexion, $sql6);
while ($row6 = $result6->fetch_assoc()) {
    
    $pdf->SetFont('Arial', 'B', 11);
    $pdf->Cell(60, 6, 'USUARIO', 1, 0, 'C', 1);
    
    $pdf->MultiCell(0, 6, $row6['nombre_usuario'], 1, 1);
    $pdf->Cell(60, 6, 'COMENTARIO', 1, 0, 'C', 1);
    $pdf->MultiCell(0, 6, utf8_decode($row6['comentario']), 1, 1);
    $pdf->Cell(60, 6, 'FECHA DE COMENTARIO', 1, 0, 'C', 1);
    $pdf->MultiCell(0, 6, utf8_decode($row6['fecha_comentario']), 1, 1);
    $pdf->Cell(60, 15, 'PREGUNTA', 1, 0, 'C', 1);
    $pdf->MultiCell(0, 10, utf8_decode($row6['pregunta']), 1, 1);
    $pdf->Ln();
}

$sql7    = "SELECT * FROM respuestas_7 ORDER BY nombre_usuario DESC";
$result7 = mysqli_query($conexion, $sql7);
while ($row7 = $result7->fetch_assoc()) {
    
    $pdf->SetFont('Arial', 'B', 11);
    $pdf->Cell(60, 6, 'USUARIO', 1, 0, 'C', 1);
    
    $pdf->MultiCell(0, 6, $row7['nombre_usuario'], 1, 1);
    $pdf->Cell(60, 6, 'COMENTARIO', 1, 0, 'C', 1);
    $pdf->MultiCell(0, 6, utf8_decode($row7['comentario']), 1, 1);
    $pdf->Cell(60, 6, 'FECHA DE COMENTARIO', 1, 0, 'C', 1);
    $pdf->MultiCell(0, 6, utf8_decode($row7['fecha_comentario']), 1, 1);
    $pdf->Cell(60, 15, 'PREGUNTA', 1, 0, 'C', 1);
    $pdf->MultiCell(0, 10, utf8_decode($row7['pregunta']), 1, 1);
    $pdf->Ln();
}

$sql8    = "SELECT * FROM respuestas_8 ORDER BY nombre_usuario DESC";
$result8 = mysqli_query($conexion, $sql8);
while ($row8 = $result8->fetch_assoc()) {
    
    $pdf->SetFont('Arial', 'B', 11);
    $pdf->Cell(60, 6, 'USUARIO', 1, 0, 'C', 1);
    
    $pdf->MultiCell(0, 6, $row8['nombre_usuario'], 1, 1);
    $pdf->Cell(60, 6, 'COMENTARIO', 1, 0, 'C', 1);
    $pdf->MultiCell(0, 6, utf8_decode($row8['comentario']), 1, 1);
    $pdf->Cell(60, 6, 'FECHA DE COMENTARIO', 1, 0, 'C', 1);
    $pdf->MultiCell(0, 6, utf8_decode($row8['fecha_comentario']), 1, 1);
    $pdf->Cell(60, 15, 'PREGUNTA', 1, 0, 'C', 1);
    $pdf->MultiCell(0, 10, utf8_decode($row8['pregunta']), 1, 1);
    $pdf->Ln();
}

$pdf->Output();
?> 