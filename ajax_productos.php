<?php
include("conexion.php");
$cn = ConectaBD();
if (!$cn) {
  die('Error al conectarse a la base de datos');
}
$query = "SELECT * FROM productos_almacen WHERE id NOT IN(9,10,13,14,15) AND tipo=1";

$result = mysqli_query($cn, $query);
if (!$result) {
  die('Consulta fallida');
}
$json = array();
    
$productos = array(); // arreglo para almacenar todos los objetos

while ($filaProductos = mysqli_fetch_array($result)) {
    $tamanos = array();
    $precios = array();
    
    $consultaTamanos = "SELECT * FROM productos_almacen_tamanos
                        WHERE idProducto = " . $filaProductos['id'];
    
    $resultadoTamanos = mysqli_query($cn, $consultaTamanos);

    while ($filaTamanos = mysqli_fetch_assoc($resultadoTamanos)){
        
        if (!in_array($filaTamanos['precio'], $precios)) {
            $precios[] = number_format($filaTamanos['precio'], 2);
        }

        if (!in_array($filaTamanos['tamano'], $tamanos)) {
            $tamanos[] = $filaTamanos['tamano'];
        }

    }//fin de filaTamanos
       
    $productos[] = array(
        'id' => $filaProductos['id'],
        'nombre' => $filaProductos['nombre'],
        'rutaimagen' => $filaProductos['rutaImagen'],
        'tipo' => $filaProductos['tipo'],
        'precio'=> $precios,
        'talla' => $tamanos
    );
        
}//fin de while

$json['productos'] = $productos; // agregar el arreglo de objetos al objeto JSON

$jsonString = json_encode($json);
echo $jsonString;

?>

