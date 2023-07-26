<?php
include('./conexion.php');
echo '
    <select class="campo" name="select" id="select" onchange="getSelectValue()">
        <option value="0">
            Seleccione un pozo:
        </option>
';
$resultado = mysqli_query($connection, 'SELECT * FROM pozo');

while($file = mysqli_fetch_array($resultado)){
    echo '
    <option value='.$file['id'].'>'.$file['nombre'].'</option>
    ';
}
echo '</select>';

?>