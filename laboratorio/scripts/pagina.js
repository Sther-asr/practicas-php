var xmlhttp = new XMLHttpRequest();
var container = document.getElementById('container');
{/* <div>Bienvenido <?php echo $username; ?></div> */}

function onloadContenido(num){
    if(num==1){
        // var p = document.getElementById('p');
        // p.innerHTML = "Enfermera";
        console.log("Enfermera");
    }else if(num==2){
        // var p = document.getElementById('p');
        // p.innerHTML = "Bioanalista";
        console.log("Bioanalista");
        showOrdenes();
    }
}
function showOrdenes(){
    xmlhttp.onreadystatechange = function (){
        if(xmlhttp.readyState === 4 && xmlhttp.status === 200){
            // console.log(xmlhttp.responseText);
            var ver = xmlhttp.responseText;
            container.innerHTML = ver;
        }
    }
    xmlhttp.open("GET","./libs/showordenes.php", true);
    xmlhttp.send();
}
