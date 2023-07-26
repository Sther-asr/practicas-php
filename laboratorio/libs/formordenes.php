<?php
include('./conexion.php');

$query = "SELECT id, nombre FROM paciente";
$sql = mysqli_query($con, $query);
$query2 = "SELECT id, nombre FROM personal WHERE id_cargo = 2";
$sql2 = mysqli_query($con, $query2);
$query3 = "SELECT id, nombre FROM examen";
$sql3 = mysqli_query($con, $query3);

echo '
<h5 class="text-center">Registrar ordenes</h5>

<form id="form" style="width: 30%; max-width:100%; margin: auto;" class="text-center">
    <select class="form-control" id="paciente" required>
        <option value="0">Seleccione un paciente:</option> '; 
?><?php
        while($file = mysqli_fetch_array($sql)){
            echo '<option value='.$file['id'].'>'.$file['nombre'].'</option>';
        };

echo '
    </select>
    <select class="form-control" id="personal" required>
        <option value="0">Seleccione un bionalista:</option>';
?><?php
        while($file = mysqli_fetch_array($sql2)){
            echo '<option value='.$file['id'].'>'.$file['nombre'].'</option>';
        };
echo '
    </select>
    <select class="form-control" id="examen" required>
        <option value="0">Seleccione un examen:</option>'; 
?><?php
        while($file = mysqli_fetch_array($sql3)){
            echo '<option value='.$file['id'].'>'.$file['nombre'].'</option>';
        };
echo '
    </select>
    <div class="mt-3 mb-3">
        <button id="btn-reg" class="btn btn-block" onclick="regOrdenes()">Registrar</button>
    </div>
</form>';
?>