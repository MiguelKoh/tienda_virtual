<?php
include("conexion.php");
$cn = ConectaBD();
if (!$cn) {
  die('Error al conectarse a la base de datos');
}
$query = "SELECT * FROM productos_almacen WHERE id NOT IN(9,10,13,14,15) AND tipo=1;
";
$result = mysqli_query($cn, $query);
if (!$result) {
  die('Consulta fallida');
}
while ($fila = mysqli_fetch_array($result)) {
    
    $queryTallas = "SELECT * FROM productos_almacen_tamanos WHERE idProducto =". $fila['id'];
    $resultadoTallas = mysqli_query($cn, $queryTallas);
    
    while ($filaTallas = mysqli_fetch_array($resultadoTallas)){
        $filaTallas['tamano'];
    }
    
    



}

/*$jsonString = json_encode($json);
echo $jsonString;
*/




?>
