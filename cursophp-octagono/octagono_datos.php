<?php
if(isset($_POST['calcular1']) && !empty($_POST['lado'])){
    $lado = trim($_POST['lado']);
    $perimetro = $lado * 8;

    echo "<style>";
    echo ".disable{
        background: palevioletred;
        font-weight: bold;
        color: black;}";
    echo "</style>";

}
if(isset($_POST['calcular2']) && !empty($_POST['apotema']) && !empty($_POST['perimetro2'])){
    $perimetro = trim($_POST['perimetro2']);
    $apotema = trim($_POST['apotema']);

    $area = ($perimetro * $apotema)/2;

}
?>
