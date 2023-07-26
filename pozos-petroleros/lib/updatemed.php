<?php

include('./conexion.php');

if(isset($_SESSION['id'])){
    echo "Emtró al Session</br>";
    
    $id = $_SESSION['id'];

    echo $id;
    $medida = $_POST['medida'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $idpozo = $_POST['idpozo'];

    // $update = "UPDATE cliente SET id_vehiculo = '$vehiculo' WHERE id = '$id_cliente'";
    $query = "UPDATE historial SET medida ='$medida', fecha = '$fecha', hora = '$hora', pozo_id = '$idpozo' WHERE id = '$id'";
    
    $sql = mysqli_query($connection, $query);
    
    if($sql){
        echo "</br>Okay";
        session_unset();
    }else {
        echo "</br>fail55";
    }
}
?>