<?php
include('./conexion.php');
$datos = array();
$pozo_id = array();
$medidas1 = array();
$medidas2 = array();
$fecha1 = array();
$fecha2 = array();
$resultado = mysqli_query($connection, 'SELECT * FROM historial');

while($file = mysqli_fetch_array($resultado)){
    $datos[] = ['pozoid'=>$file['pozo_id'],'medida'=>$file['medida'],'fecha'=>$file['fecha']];
    // if($file['pozo_id']== 1){
    //     $medidas1[] = $file['medida'];
    //     $fecha1[] = $file['fecha'];
    // }else if($file['pozo_id']== 2){

    // }
    // $pozo_id[] = $file['pozo_id'];
    
    // $i++;
}
// $datos = [
//     'pozo_id' => $medidas,
//     'medidas' => $medidas,
//     'fechas' => $fecha
// ];
$jsonDatos = json_encode($datos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
echo $jsonDatos;
?>