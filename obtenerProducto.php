<?php
include("conexion.php");
$cn = ConectaBD();
if (!$cn) {
  die('Error al conectarse a la base de datos');
}
$productoID = $_GET["id"];
$consultaProducto = "SELECT * FROM productos_almacen WHERE id = " . $productoID . " LIMIT 1";

$result = mysqli_query($cn, $consultaProducto);
if (!$result) {
  die('Consulta fallida');
}
$json = array();
    
while ($filaProducto = mysqli_fetch_array($result)) {
    $tamanos = array();
    $precios = array();
    
    $consultaTamanos = "SELECT * FROM productos_almacen_tamanos
    WHERE id NOT IN(17,41,42,48,49,53,53,54,66,56) AND idProducto = " . $productoID;;
    
    $resultadoTamanos = mysqli_query($cn, $consultaTamanos);

    if ($resultadoTamanos && (mysqli_num_rows($resultadoTamanos) > 0)) {
        while ($filaTamanos = mysqli_fetch_assoc($resultadoTamanos)){
        
            if (!in_array($filaTamanos['precio'], $precios)) {
                $precios[] = number_format($filaTamanos['precio'], 2);
            }

            if (!in_array($filaTamanos['tamano'], $tamanos)) {
                $tamanos[] = $filaTamanos['tamano'];
            }
            
            $tamanosLista = implode(' / ', $tamanos);
            $preciosLista = implode(' - ', $precios);
        
        }//fin de filaTamanos
       
$json[] = array(
            'id' => $filaProducto['id'],
            'nombre' => $filaProducto['nombre'],
            'rutaimagen' => $filaProducto['rutaImagen'],
            'tipo' => $filaProducto['tipo'],
            'precio'=> $preciosLista,
            'tallas' => $tamanosLista
        );
        


    }//fin del if

    }//fin de while

$jsonString = json_encode($json);

echo $jsonString;


?>






