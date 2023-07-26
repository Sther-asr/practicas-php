<?php
include('./conexion.php');

$paciente = $_POST['paciente'];
$personal = $_POST['personal'];
$examen = $_POST['examen'];

if(isset($_POST['paciente']) && isset($_POST['personal']) && isset($_POST['examen'])){
    $fecha = date('Y-m-d');
    $query = "INSERT INTO ordenes (id_paciente, id_personal, id_examen, fecha)
    VALUES('$paciente', '$personal', '$examen', '$fecha')";
    $sql = mysqli_query($con, $query);
    
    if($sql){
        echo "Okay";
    }else {
        echo "fail";
    }

}else{
    echo "Complete los campos";
}
?>