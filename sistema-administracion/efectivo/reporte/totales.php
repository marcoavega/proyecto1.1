<?php
$db = mysqli_connect("localhost", "root", "", "iglesia");
/* verificar la conexión */
if (mysqli_connect_errno()) {
    die("Conexión fallida:" . mysqli_connect_error());
}
$sql    = "SELECT SUM(cantidad) as total FROM ingreso_efectivo";
$result = mysqli_query($db, $sql);
$res    = mysqli_query($db, $sql);
while ($row = mysqli_fetch_assoc($res))
    $total = $row['total'];
echo $total; //muestra la suma total en este archivo de prueba
?>