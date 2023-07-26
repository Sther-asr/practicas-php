<?php
include('./conexion.php');

$medida = $_POST['medida'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$idpozo = $_POST['idpozo'];
// echo $hora;
$sql2 = "SELECT * FROM pozo WHERE id= $idpozo";
$resultado2 = mysqli_query($connection, $sql2);
while($file = mysqli_fetch_array($resultado2)){
    $idpozo2 = $file['id'];
}
echo $idpozo2;

if(isset($_POST['medida'])){
    $query = "INSERT INTO historial (medida, fecha, hora, pozo_id)
    VALUES('$medida', '$fecha', '$hora', '$idpozo2')";
    $sql = mysqli_query($connection, $query);
    
    if($sql){
        echo "Okay";
    }else {
        echo "fail";
    }

}

?>