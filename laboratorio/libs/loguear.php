<?php
include('./conexion.php');

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM usuario WHERE usuario = '$username' and contraseña = '$password'";
$sql = mysqli_query($con, $query);

if(mysqli_num_rows($sql) == 1){
    $row = mysqli_fetch_array($sql);
    $idpersonal = $row['id_personal'];

    $query2 = "SELECT id_cargo FROM personal WHERE id = '$idpersonal'";
    $sql2 = mysqli_query($con, $query2);
    if(mysqli_num_rows($sql2) == 1){
        $row = mysqli_fetch_array($sql2);
        $idcargo = $row['id_cargo'];

        $_SESSION['username'] = $username;
        $_SESSION['idcargo'] = $idcargo;
        if($idcargo == '1'){
            header("Location:../enfermeros.php");
        }else if($idcargo == '2'){
            header("Location:../pagina.php");
        }
        

    }
}else{
    echo "Contraseña Incorrecta";
}


?>