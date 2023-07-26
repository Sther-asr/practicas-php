var xmlhttp = new XMLHttpRequest();
var container = document.getElementById('container');

function formExamenes(){
    var numorden = document.getElementById('numorden').value;
    xmlhttp.onreadystatechange = function (){
        if(xmlhttp.readyState === 4 && xmlhttp.status === 200){
            // console.log(xmlhttp.responseText);
            var ver = xmlhttp.responseText;
            if(ver == "Número de orden no existente"){
                alert("Número de orden no existente");
            }else if(ver == "Ingrese un número"){
                alert("Ingrese un número");
            }else{
                // container.innerHTML = ver;
                var datos = JSON.parse(xmlhttp.responseText);
                
                // console.log(datos[0]['paciente']);

                var paciente = document.getElementById('paciente');
                paciente.value = datos[0]['paciente'];
                // value='. $paciente
                var personal = document.getElementById('personal');
                personal.value = datos[0]['personal'];
                // value='. $personal
                var examen = document.getElementById('examen');
                examen.value = datos[0]['examen'];
                // value='. $examen .
                var select = document.getElementById('select');
                select.disabled = false;

                var btn = document.getElementById('btn-reg');
                btn.disabled = false;

                var form = document.getElementById('form');
                form.addEventListener('submit', function(e){
                    e.preventDefault();
                });
            }
            
        }
    }
    xmlhttp.open("GET","./libs/formexamenes.php?idorden="+numorden, true);
    xmlhttp.send();
}
function regExamenes(){
    var select = document.getElementById('select');
    if(select.selectedIndex<1){
        alert("Seleccione resultado del examen.");
    }else{
        var textselect = select.options[select.selectedIndex].text;
        var value = "value="+textselect;
        xmlhttp.onreadystatechange = function (){
            if(xmlhttp.readyState === 4 && xmlhttp.status === 200){
                console.log(xmlhttp.responseText);
                var ver = xmlhttp.responseText;
                alert(ver);
                var pdf = document.getElementById('pdf');
                pdf.style.backgroundColor = "#7D0801";
                // pdf.target = "_blank";
                pdf.disabled = false;
            }
        }
        xmlhttp.open("POST","./libs/regexamenes.php", true);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlhttp.send(value);
    }
}

function pdfSend(){
    xmlhttp.onreadystatechange = function (){
        if(xmlhttp.readyState === 4 && xmlhttp.status === 200){
            // console.log(xmlhttp.responseText);
            var ver = xmlhttp.responseText;
            console.log(ver);
            // var p = document.getElementById('messaje');
            // p.innerHTML = ver;
        }
    }
    xmlhttp.open("GET","./libs/pdf.php", true);
    xmlhttp.send();
}