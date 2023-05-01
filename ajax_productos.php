<?php
include("conexion.php");
$cn = ConectaBD();
if (!$cn) {
  die('Error al conectarse a la base de datos');
}
$query = "SELECT * FROM productos_almacen";
$result = mysqli_query($cn, $query);
if (!$result) {
  die('Consulta fallida');
}
$json = array();
while ($fila = mysqli_fetch_array($result)) {
  $json[] = array(
    'id' => $fila['id'],
    'nombre' => $fila['nombre'],
    'rutaimagen' => $fila['rutaImagen'],
    'tipo' => $fila['tipo']
  );
}
$jsonString = json_encode($json);
echo $jsonString;
?>

