<?php
$directorio = $_POST["directorio"];
$fdir = "../notas/$directorio";
$diropen = opendir($fdir);
if($diropen){
    echo "Conexión abierta para $fdir";
    echo $diropen;
    while (!is_bool($file = readdir($diropen))) {
        echo "¿Qué es $file?";
    }
}else{
    echo "Conexión sin éxito para $fdir";
}

// while (!is_bool($file = readdir($diropen))) {
//     if(!is_dir("$fdir/$file")){
//         // $ruta = "$fdir/$file";
//         // unlink($ruta);
//         unlink($file);
//         echo "Nota $file eliminada con éxito";
//     }
// }
// rmdir($fdir);
// echo "Directorio eliminado con éxito";
?>