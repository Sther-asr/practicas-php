<?php
include('./conexion.php');
$idorden = $_GET['idorden'];
$datos = array();

if(!empty($_GET['idorden'])){
    $query = "SELECT * FROM ordenes WHERE id='$idorden'";
    $sql = mysqli_query($con, $query);
    
    if(mysqli_num_rows($sql) == 1){
        $row = mysqli_fetch_array($sql);
        $_SESSION['idorden'] = $idorden;
        $idpaciente = $row['id_paciente'];
        $idpersonal = $row['id_personal'];
        $idexamen = $row['id_examen'];
        
        $query2 = "SELECT nombre FROM paciente WHERE id='$idpaciente'";
        $sql2 = mysqli_query($con, $query2);
        if(mysqli_num_rows($sql2) == 1){
            $row = mysqli_fetch_array($sql2);
            $paciente = $row['nombre'];
        }
        
        $query3 = "SELECT nombre FROM personal WHERE id='$idpersonal'";
        $sql3 = mysqli_query($con, $query3);
        if(mysqli_num_rows($sql3) == 1){
            $row = mysqli_fetch_array($sql3);
            $personal = $row['nombre'];
        }
        $query4 = "SELECT nombre FROM examen WHERE id='$idexamen'";
        $sql4 = mysqli_query($con, $query4);
        if(mysqli_num_rows($sql4) == 1){
            $row = mysqli_fetch_array($sql4);
            $examen = $row['nombre'];
        }

        $datos[] = ['paciente'=>$paciente,'personal'=>$personal,'examen'=>$examen];
        $jsonDatos = json_encode($datos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        echo $jsonDatos;
    }else{
        echo "Número de orden no existente";
    }
}else{
    echo "Ingrese un número";
}

?>
