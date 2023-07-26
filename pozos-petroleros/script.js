var xmlhttp = new XMLHttpRequest();
var seccion = document.getElementById('seccion');
var showmsj = "";

function onloadContent(){
    seccion.style.display = "grid";
    seccion.style.gridTemplateColumns = "1fr 3fr";
    showmsj = `
    <div class="seccion-1">
        <button class="sec-btn btn btn-info btn-outline-light" onclick="onloadSelector()" type="button"
        >Historial de medidas</button>
        <button class="sec-btn btn btn-info btn-outline-light" onclick="showPozos()" type="button"
        >Ver pozos</button>
    </div>

    <div id="seccion-2" class="container">
    </div>
    `;
    seccion.innerHTML = showmsj;
}
function onloadSelector(){
    var seccion2 = document.getElementById('seccion-2');
    showmsj = `
    <div id="selector">
    </div>
    <div id="results">
    </div>
    `;
    seccion2.innerHTML = showmsj;

    xmlhttp.onreadystatechange = function (){
        if(xmlhttp.readyState === 4 && xmlhttp.status === 200){
            // console.log(xmlhttp.responseText);
            var ver = xmlhttp.responseText;
            selector.innerHTML = ver;
        }
    }
    xmlhttp.open("GET","./lib/onloadselector.php", true);
    xmlhttp.send();
}
function getSelectValue(){
    var selectedValue = document.getElementById('select').value;
    showMedidas(selectedValue);
    // console.log(selectedValue);
    
}
function onloadGraph(selectedValue){
    xmlhttp.onreadystatechange = function (){
        if(xmlhttp.readyState === 4 && xmlhttp.status === 200){
            var grafica = document.getElementById('myChart').getContext('2d');
            var labels = [];
            var datos = [];
            var data2 = JSON.parse(xmlhttp.responseText);
            var count = Object.keys(data2).length;
            // console.log(count);
            // console.log(data2[0]['fecha']);
            for(var i=0; i<=count-1; i++){
                var variable = data2[i]['pozoid'];
                // console.log(variable);
                if(selectedValue == variable ){
                    // datosGrafico.innerHTML += `${data[i].fecha} => ${data[i].medida} </br>`;
                    datos.push(data2[i]['medida']);
                    labels.push(data2[i]['fecha']);
                } 
            }
            // console.log(labels);
            // console.log(datos);
            const data = {
                labels: labels,
                datasets: [{
                    label: `Pozo ${selectedValue}`,
                    backgroundColor: 'rgb(238, 108, 77)',
                    borderColor: 'rgb(238, 108, 77)',
                    data: datos,
                }]
            };
            var myChart = new Chart(grafica,{ //config
                type: 'line',
                data: data
                // options: {}
            });
        }
    }
    xmlhttp.open("GET","./lib/getgraficos.php", true);
    xmlhttp.send();
}
//SELECT
function showMedidas(selectedValue){
    var value = "value="+selectedValue;
    xmlhttp.onreadystatechange = function (){
        if(xmlhttp.readyState === 4 && xmlhttp.status === 200){
            // console.log(xmlhttp.responseText);
            var ver = xmlhttp.responseText;
            results.innerHTML = ver;
            onloadGraph(selectedValue);
        }
    }
    xmlhttp.open("POST","./lib/showmed.php", true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send(value);
}
function showPozos(){
    var seccion2 = document.getElementById('seccion-2');
    seccion2.innerHTML = "";

    xmlhttp.onreadystatechange = function (){
        if(xmlhttp.readyState === 4 && xmlhttp.status === 200){
            // console.log(xmlhttp.responseText);
            var ver = xmlhttp.responseText;
            seccion2.innerHTML = ver;
        }
    }
    xmlhttp.open("GET","./lib/showpozos.php", true);
    xmlhttp.send();
}
//INSERT
function formPozos(){
    seccion.style.display = "block";
    showmsj = `
    <form>
        <label>Nombre:</label>
        <input class="campo" type="text" id="namepozo" >
        <button class="btn" onclick="regPozos()">Registar</button>
    </form>
    <button class="btn" onclick="onloadContent()" >Regresar</button>
    `;
    seccion.innerHTML = showmsj;
}
function formMedidas(){
    seccion.style.display = "block";
    xmlhttp.onreadystatechange = function (){
        if(xmlhttp.readyState === 4 && xmlhttp.status === 200){
            // console.log(xmlhttp.responseText);
            var ver = xmlhttp.responseText;
            seccion.innerHTML = ver;
            var form = document.getElementById('form');
            form.addEventListener('submit', function(e){
                e.preventDefault();
                regMedidas(form);
            });
        }
    }
    xmlhttp.open("GET","./lib/formedidas.php", true);
    xmlhttp.send();
}
function regMedidas(form){
    var form = document.getElementById('form');
    var formdata = new FormData(form);
    xmlhttp.onreadystatechange = function (){
        if(xmlhttp.readyState === 4 && xmlhttp.status === 200){
            console.log(xmlhttp.responseText);
            // var ver = xmlhttp.responseText;
            // results.innerHTML = ver;
        }
    }
    xmlhttp.open("POST","./lib/regmedidas.php", true);
    // xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send(formdata);
}
function regPozos(){
    var namepozo = document.getElementById('namepozo').value;
    var send = "namepozo="+namepozo;
    xmlhttp.onreadystatechange = function (){
        if(xmlhttp.readyState === 4 && xmlhttp.status === 200){
            console.log(xmlhttp.responseText);
            // var ver = xmlhttp.responseText;
            // results.innerHTML = ver;
        }
    }
    xmlhttp.open("POST","./lib/regpozos.php", true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send(send);
}
//DELETE
function eliminarPozo(id){
    var sendid = id;
    var send = "id="+sendid;
    xmlhttp.onreadystatechange = function (){
        if(xmlhttp.readyState === 4 && xmlhttp.status === 200){
            console.log(xmlhttp.responseText);
            showPozos();
        }
    }
    xmlhttp.open("POST","./lib/eliminarpozo.php", true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send(send);
}
function eliminarMedida(id){
    var sendid = id;
    var send = "id="+sendid;
    xmlhttp.onreadystatechange = function (){
        if(xmlhttp.readyState === 4 && xmlhttp.status === 200){
            console.log(xmlhttp.responseText);

            var selectedValue = document.getElementById('select').value;
            showMedidas(selectedValue);
        }
    }
    xmlhttp.open("POST","./lib/eliminarmed.php", true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send(send);
}
//UPDATE
function editarMedida(id){
    var divcanva = document.getElementById('div-canva');
    divcanva.innerHTML = "";

    var sendid = id;
    var send = "id="+sendid;
    xmlhttp.onreadystatechange = function (){
        if(xmlhttp.readyState === 4 && xmlhttp.status === 200){
            // console.log(xmlhttp.responseText);
            var ver = xmlhttp.responseText;
            divcanva.innerHTML = ver;

            var form = document.getElementById('form');
            form.addEventListener('submit', function(e){
                e.preventDefault();
                console.log("Hola")
                updateMed(form)
            });
        }
    }
    xmlhttp.open("POST","./lib/editmed.php", true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send(send);
}
function updateMed(form){
    
    var form = document.getElementById('form');
    var formdata = new FormData(form);
    xmlhttp.onreadystatechange = function (){
        if(xmlhttp.readyState === 4 && xmlhttp.status === 200){
            console.log(xmlhttp.responseText);

            var selectedValue = document.getElementById('select').value;
            showMedidas(selectedValue);
        }
    }
    xmlhttp.open("POST","./lib/updatemed.php", true);
    xmlhttp.send(formdata);
}
function editarPozo(id){
    var sendid = id;
    var send = "id="+sendid;
    xmlhttp.onreadystatechange = function (){
        if(xmlhttp.readyState === 4 && xmlhttp.status === 200){
            var divpozo = document.getElementById('formpozo');
            // console.log(xmlhttp.responseText);
            var ver = xmlhttp.responseText;
            divpozo.innerHTML = ver;

            var btnpozo = document.getElementById('btn-pozo');
            btnpozo.addEventListener('click', function(e){
                e.preventDefault();
                console.log("Hola");
            });
        }
    }
    xmlhttp.open("POST","./lib/editpozo.php", true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send(send);
}
function updatePozo(){

    var namepozo = document.getElementById('namepozo').value;
    var send = "namepozo="+namepozo;

    xmlhttp.onreadystatechange = function (){
        if(xmlhttp.readyState === 4 && xmlhttp.status === 200){
            console.log(xmlhttp.responseText);
            showPozos();
        }
    }
    xmlhttp.open("POST","./lib/updatepozo.php", true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send(send);
    
}