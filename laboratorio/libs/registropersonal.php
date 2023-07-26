<?php
include('./conexion.php');

$nombre = $_POST['nombre'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$tlf = $_POST['tlf'];
$cargo = $_POST['cargo'];

if(isset($_POST['cargo'])){
    $query = "INSERT INTO personal (nombre, email, tlf, id_cargo)
    VALUES('$nombre', '$email', '$tlf', '$cargo')";
    $sql = mysqli_query($con, $query);

    $query2 = "SELECT id FROM personal WHERE nombre = '$nombre'";
    $sql2 = mysqli_query($con, $query2);
    while($file = mysqli_fetch_array($sql2)){
        $idpersonal = $file['id'];
    }
    // echo $idpersonal;
    
    $query3 = "INSERT INTO usuario (usuario, contraseña, id_personal)
    VALUES('$username', '$password', '$idpersonal')";
    $sql3 = mysqli_query($con, $query3);
    
    if($sql && $sql2 && $sql3){
        echo "Okay";
    }else {
        echo "fail";
    }

}
header("Location:../index.php");
?>