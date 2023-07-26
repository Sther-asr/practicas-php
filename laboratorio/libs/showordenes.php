<?php
include('./conexion.php');
echo '
<h4 class="mb-3 font-weight-normal">Ordenes pendientes</h4>
<table id="table" class="table table-hover table-light">
<thead class="table-dark ">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Paciente</th>
        <th scope="col">Bioanalista</th>
        <th scope="col">Tipo de Examen</th>
        <th scope="col">Fecha</th>
    </tr>
</thead>
<tbody>
';
$sql = mysqli_query($con, "SELECT * FROM ordenes");
while($file = mysqli_fetch_array($sql)){
    $idpaciente = $file['id_paciente'];
    $idpersonal = $file['id_personal'];
    $idexamen = $file['id_examen'];

    $query = "SELECT nombre FROM paciente WHERE id= '$idpaciente'";
    $sql2 = mysqli_query($con, $query);
    if(mysqli_num_rows($sql2) == 1){
        $row = mysqli_fetch_array($sql2);
        $nombrepaciente = $row['nombre'];
    }
    $query2 = "SELECT nombre FROM personal WHERE id= '$idpersonal'";
    $sql3 = mysqli_query($con, $query2);
    if(mysqli_num_rows($sql3) == 1){
        $row = mysqli_fetch_array($sql3);
        $nombrepersonal = $row['nombre'];
    }
    $query3 = "SELECT nombre FROM examen WHERE id= '$idexamen'";
    $sql4 = mysqli_query($con, $query3);
    if(mysqli_num_rows($sql4) == 1){
        $row = mysqli_fetch_array($sql4);
        $nombrexamen = $row['nombre'];
    }

    echo '
    <tr>
    <td>'.$file['id'].'</td>
    <td>'.$nombrepaciente.'</td>
    <td>'.$nombrepersonal.'</td>
    <td>'.$nombrexamen.'</td>
    <td>'.$file['fecha'].'</td>
    </tr>
    ';
}
echo '</tbody></table>
';
?>
