<?php

include('./conexion.php');
$value = $_POST['value'];
$i = 1;

echo '
<table id="table">
<thead>
    <tr>
        <th>#</th>
        <th>Medida (PSI)</th>
        <th>Fecha</th>
        <th>Hora</th>
        <th>Pozo</th>
    </tr>
</thead>
<tbody>
';
$resultado = mysqli_query($connection, "SELECT * FROM historial WHERE pozo_id = $value");
while($file = mysqli_fetch_array($resultado)){
    echo '
    <tr>
    <td>'.$i++.'</td>
    <td>'.$file['medida'].'</td>
    <td>'.$file['fecha'].'</td>
    <td>'.$file['hora'].'</td>
    <td>'.$file['pozo_id'].'</td>
    <td>
    <button name="editmed" class="btn btn-info btn-outline-light" onclick="editarMedida('.$file["id"].')">Editar</button>
    </td>
    <td>
    <button class="btn btn-info btn-outline-light" onclick="eliminarMedida('.$file["id"].')">Eliminar</button>
    </td>
    </tr>
    ';
}
echo '</tbody></table>
<div id="div-canva">
  <canvas id="myChart"></canvas>
  </div>
';

?>