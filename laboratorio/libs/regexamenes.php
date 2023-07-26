<?php
include('./conexion.php');

$idorden = $_SESSION['idorden'];
$value = $_POST['value'];
if(isset($_POST['value'])){
    $query = "INSERT INTO resultados (id_orden, resultado) VALUES ('$idorden', '$value')";
    $sql = mysqli_query($con, $query);
    if($sql){
        echo "Registro realizado exitosamente";
    }else{
        echo "Falló al realizar el registro";
    }
}

?>