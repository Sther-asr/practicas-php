<?php

include('./conexion.php');

if(isset($_SESSION['id'])){
    echo "Emtró al Session</br>";
    
    $id = $_SESSION['id'];
    $namepozo = $_POST['namepozo'];

    // $update = "UPDATE cliente SET id_vehiculo = '$vehiculo' WHERE id = '$id_cliente'";
    $query = "UPDATE pozo SET nombre='$namepozo' WHERE id = '$id'";
    $sql = mysqli_query($connection, $query);
    
    if($sql){
        echo "</br>Okay";
        session_unset();
    }else {
        echo "</br>fail55";
    }
}
?>