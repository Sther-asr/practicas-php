var xmlhttp = new XMLHttpRequest();
var container = document.getElementById('container');

function formPacientes(){
    container.innerHTML = "";
    var salida = `
    <h5 class="text-center">Registrar pacientes</h5>
    <form id="form" style="width: 30%; max-width:100%; margin: auto;" class="text-center">
    <input type="text" class="form-control"  id="pnombre" placeholder="Nombre:">
    <input type="email" class="form-control"  id="pmail" placeholder="Email:">
    <input type="number" class="form-control"  id="ptlf" placeholder="Telefono:">
    <div class="mt-3 mb-3">
    <button id="btn-reg" class="btn btn-block" onclick="regPacientes()">Registrar</button>
    </div>
    </form>
    `;
    container.innerHTML = salida;
}
function formOrdenes(){
    container.innerHTML = "";
    xmlhttp.onreadystatechange = function (){
        if(xmlhttp.readyState === 4 && xmlhttp.status === 200){
            // console.log(xmlhttp.responseText);
            var ver = xmlhttp.responseText;
            container.innerHTML = ver;
            var form = document.getElementById('form');
            form.addEventListener('submit', function(e){
                e.preventDefault();
            });
        }
    }
    xmlhttp.open("GET","./libs/formordenes.php", true);
    xmlhttp.send();
    
}

function regPacientes(){
    var form = document.getElementById('form');
    form.addEventListener('submit', function(e){
        e.preventDefault();

        var pnombre = document.getElementById('pnombre').value;
        var pmail = document.getElementById('pmail').value;
        var ptlf = document.getElementById('ptlf').value;

        var value = "pnombre="+pnombre+"&pmail="+pmail+"&ptlf="+ptlf;

        xmlhttp.onreadystatechange = function (){
            if(xmlhttp.readyState === 4 && xmlhttp.status === 200){
                var ver = xmlhttp.responseText;
                console.log(xmlhttp.responseText);
                alert(ver);

            }
        }
        xmlhttp.open("POST","./libs/regpacientes.php", true);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlhttp.send(value);
    });
    
}
function regOrdenes(){
    var paciente = document.getElementById('paciente').value;
    var personal = document.getElementById('personal').value;
    var examen = document.getElementById('examen').value;

    if(paciente == 0 ){
        alert("Seleccione un paciente");

    }else if(personal == 0){
        alert("Seleccione un personal");
    }
    else if(examen == 0){
        alert("Seleccione un examen");
        
    }else{

    var value = "paciente="+paciente+"&personal="+personal+"&examen="+examen;
        xmlhttp.onreadystatechange = function (){
            if(xmlhttp.readyState === 4 && xmlhttp.status === 200){
                console.log(xmlhttp.responseText);
                var ver = xmlhttp.responseText;
                alert(ver);
            }
        }
        xmlhttp.open("POST","./libs/regordenes.php", true);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlhttp.send(value);
    }
}