<?php

include('./conexion.php');

echo '<table>
<thead>
    <tr>
        <th>#</th>
        <th>Nombre</th>
    </tr>
</thead>
<tbody>
';
$resultado = mysqli_query($connection, "SELECT * FROM pozo");
while($file = mysqli_fetch_array($resultado)){
    echo '
    <tr>
    <td>'.$file['id'].'</td>
    <td>'.$file['nombre'].'</td>
    <td>
    <button class="btn btn-info btn-outline-light" onclick="editarPozo('.$file["id"].')">Editar</button>
    </td>
    <td>
    <button class="btn btn-info btn-outline-light" onclick="eliminarPozo('.$file["id"].')">Eliminar</button>
    </td>
    </tr>
    ';
}

echo '</tbody></table>
<div id="formpozo">

</div>
';

?>