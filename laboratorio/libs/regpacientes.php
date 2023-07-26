<?php
include('./conexion.php');

$pnombre = $_POST['pnombre'];
$pmail = $_POST['pmail'];
$ptlf = $_POST['ptlf'];

if(isset($_POST['pnombre']) && isset($_POST['pmail']) && isset($_POST['pmail'])){
    $query = "INSERT INTO paciente (nombre, email, tlf) VALUES ('$pnombre', '$pmail', '$ptlf')";
    
    $sql = mysqli_query($con, $query);
    if($sql){
        echo "Registro realizado exitosamente";
    }else{
        echo "Falló al realizar el registro";
    }
}else{
    echo "Complete todos los campos";
}
?>