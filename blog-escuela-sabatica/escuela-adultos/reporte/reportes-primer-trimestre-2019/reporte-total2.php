<?php
include 'plantilla-totales2.php';
include "../../../conexion-blog.php";
//consulta para mostrar en el reporte combinando ingresos egresos y restando
$sql1    = "SELECT  nombre_usuario, count(*) AS total FROM respuestas_1 GROUP BY nombre_usuario";
$result1 = mysqli_query($conexion, $sql1);
//formato del documento con los datos
$pdf     = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFillColor(232, 232, 232);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(90, 6, 'NOMBRE USUARIO', 1, 0, 'C', 1);
$pdf->Cell(90, 6, 'PARTICIPACIONES PREGUNTA 1', 1, 1, 'C', 1);

$pdf->SetFont('Arial', '', 9);
while ($row1 = $result1->fetch_assoc()) {
    $pdf->Cell(90, 6, utf8_decode($row1['nombre_usuario']), 1, 0, 'C');
    $pdf->Cell(90, 6, $row1['total'], 1, 1, 'C');
}

$sql2    = "SELECT  nombre_usuario, count(*) AS total FROM respuestas_2 GROUP BY nombre_usuario";
$result2 = mysqli_query($conexion, $sql2);
$pdf->SetFillColor(232, 232, 232);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(90, 6, 'NOMBRE USUARIO', 1, 0, 'C', 1);
$pdf->Cell(90, 6, 'PARTICIPACIONES PREGUNTA 2', 1, 1, 'C', 1);
$pdf->SetFont('Arial', '', 9);
while ($row2 = $result2->fetch_assoc()) {
    $pdf->Cell(90, 6, utf8_decode($row2['nombre_usuario']), 1, 0, 'C');
    $pdf->Cell(90, 6, $row2['total'], 1, 1, 'C');
}

$sql3    = "SELECT  nombre_usuario, count(*) AS total FROM respuestas_3 GROUP BY nombre_usuario";
$result3 = mysqli_query($conexion, $sql3);
$pdf->SetFillColor(232, 232, 232);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(90, 6, 'NOMBRE USUARIO', 1, 0, 'C', 1);
$pdf->Cell(90, 6, 'PARTICIPACIONES PREGUNTA 3', 1, 1, 'C', 1);
$pdf->SetFont('Arial', '', 9);
while ($row3 = $result3->fetch_assoc()) {
    $pdf->Cell(90, 6, utf8_decode($row3['nombre_usuario']), 1, 0, 'C');
    $pdf->Cell(90, 6, $row3['total'], 1, 1, 'C');
}

$sql4    = "SELECT  nombre_usuario, count(*) AS total FROM respuestas_4 GROUP BY nombre_usuario";
$result4 = mysqli_query($conexion, $sql4);
$pdf->SetFillColor(232, 232, 232);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(90, 6, 'NOMBRE USUARIO', 1, 0, 'C', 1);
$pdf->Cell(90, 6, 'PARTICIPACIONES PREGUNTA 4', 1, 1, 'C', 1);
$pdf->SetFont('Arial', '', 9);
while ($row4 = $result4->fetch_assoc()) {
    $pdf->Cell(90, 6, utf8_decode($row4['nombre_usuario']), 1, 0, 'C');
    $pdf->Cell(90, 6, $row4['total'], 1, 1, 'C');
}

$sql5    = "SELECT  nombre_usuario, count(*) AS total FROM respuestas_5 GROUP BY nombre_usuario";
$result5 = mysqli_query($conexion, $sql5);
$pdf->SetFillColor(232, 232, 232);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(90, 6, 'NOMBRE USUARIO', 1, 0, 'C', 1);
$pdf->Cell(90, 6, 'PARTICIPACIONES PREGUNTA 5', 1, 1, 'C', 1);
$pdf->SetFont('Arial', '', 9);
while ($row5 = $result5->fetch_assoc()) {
    $pdf->Cell(90, 6, utf8_decode($row5['nombre_usuario']), 1, 0, 'C');
    $pdf->Cell(90, 6, $row5['total'], 1, 1, 'C');
}

$sql6    = "SELECT  nombre_usuario, count(*) AS total FROM respuestas_6 GROUP BY nombre_usuario";
$result6 = mysqli_query($conexion, $sql6);
$pdf->SetFillColor(232, 232, 232);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(90, 6, 'NOMBRE USUARIO', 1, 0, 'C', 1);
$pdf->Cell(90, 6, 'PARTICIPACIONES PREGUNTA 6', 1, 1, 'C', 1);
$pdf->SetFont('Arial', '', 9);
while ($row6 = $result6->fetch_assoc()) {
    $pdf->Cell(90, 6, utf8_decode($row6['nombre_usuario']), 1, 0, 'C');
    $pdf->Cell(90, 6, $row6['total'], 1, 1, 'C');
}

$sql7    = "SELECT  nombre_usuario, count(*) AS total FROM respuestas_7 GROUP BY nombre_usuario";
$result7 = mysqli_query($conexion, $sql7);
$pdf->SetFillColor(232, 232, 232);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(90, 6, 'NOMBRE USUARIO', 1, 0, 'C', 1);
$pdf->Cell(90, 6, 'PARTICIPACIONES PREGUNTA 7', 1, 1, 'C', 1);
$pdf->SetFont('Arial', '', 9);
while ($row7 = $result7->fetch_assoc()) {
    $pdf->Cell(90, 6, utf8_decode($row7['nombre_usuario']), 1, 0, 'C');
    $pdf->Cell(90, 6, $row7['total'], 1, 1, 'C');
}

$sql8    = "SELECT  nombre_usuario, count(*) AS total FROM respuestas_8 GROUP BY nombre_usuario";
$result8 = mysqli_query($conexion, $sql8);
$pdf->SetFillColor(232, 232, 232);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(90, 6, 'NOMBRE USUARIO', 1, 0, 'C', 1);
$pdf->Cell(90, 6, 'PARTICIPACIONES PREGUNTA 8', 1, 1, 'C', 1);
$pdf->SetFont('Arial', '', 9);
while ($row8 = $result8->fetch_assoc()) {
    $pdf->Cell(90, 6, utf8_decode($row8['nombre_usuario']), 1, 0, 'C');
    $pdf->Cell(90, 6, $row8['total'], 1, 1, 'C');
}


$query1     = "SELECT sum(total) AS total1, nombre_usuario
from (
    select count(*) as total, nombre_usuario
    from respuestas_1 
    group by nombre_usuario

    union all

    select count(*) as total, nombre_usuario
    from respuestas_2 
    group by nombre_usuario

    union all
    select count(*) as total, nombre_usuario
    from respuestas_3 
    group by nombre_usuario

    union all
    select count(*) as total, nombre_usuario
    from respuestas_4 
    group by nombre_usuario

    union all
    select count(*) as total, nombre_usuario
    from respuestas_5 
    group by nombre_usuario

    union all
    select count(*) as total, nombre_usuario
    from respuestas_6 
    group by nombre_usuario

    union all
    select count(*) as total, nombre_usuario
    from respuestas_7 
    group by nombre_usuario

    union all
    select count(*) as total, nombre_usuario
    from respuestas_8 
    group by nombre_usuario
) t
group by nombre_usuario";

$resultado1 = $conexion->query($query1);

$pdf->SetFillColor(232, 232, 232);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(90, 6, 'NOMBRE USUARIO', 1, 0, 'C', 1);
$pdf->Cell(90, 6, 'PARTICIPACIONES TOTALES', 1, 1, 'C', 1);
$pdf->SetFont('Arial', '', 9);
while ($rowtotal = $resultado1->fetch_assoc()) {
    $pdf->Cell(90, 6, utf8_decode($rowtotal['nombre_usuario']), 1, 0, 'C');
    $pdf->Cell(90, 6, $rowtotal['total1'], 1, 1, 'C');
}


$pdf->Output();
?> 