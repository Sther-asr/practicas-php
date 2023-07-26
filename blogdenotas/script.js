var options = document.getElementById("bgn__sec-btn");
var divInput = document.getElementById("bgn__gestion");
var mensajes = document.getElementById("mensajes");
var xmlhttp = new XMLHttpRequest();
function sendOption(num){
    var salida = "";
    divInput.innerHTML = salida;
    mensajes.innerHTML = salida;
    if(num == 0){
        salida = `
        <button id="pb-btn-1" onclick="crudArchivo(0)">Crear archivo</button>
        <button id="pb-btn-2" onclick="crudArchivo(1)">Editar archivo</button>
        <button id="pb-btn-3" onclick="crudArchivo(2)">Eliminar archivo</button>
        <button id="pb-btn-4" onclick="crudArchivo(3)">Ver archivo</button>
        `;
        options.innerHTML = salida; 
    }else if(num == 1 ){
        salida = `
        <button id="sec-btn-1" onclick="crudDir(0)">Crear directorio</button>
        <button id="sec-btn-2" onclick="crudDir(1)">Editar nota</button>
        <button id="sec-btn-3" onclick="crudDir(2)">Agregar nota</button>
        `;
        options.innerHTML = salida; 
    }
    divInput.style.paddingTop = "0";
    divInput.style.paddingBottom = "0";
}
function crudDir(num){
    var salida = "";
    mensajes.innerHTML = salida;
    if(num==0){
        salida = `
        <p>Ingrese el nombre de su directorio:</p>
        <input type="text" id="name-dir">
        <p>Ingrese el nombre de su nota:</p>
        <input type="text" id="name-archivo">
        <p>Escriba su nota:</p>
        <textarea id="textarea"></textarea>
        <button id="dir-crear" onclick="ajaxCreateDir()">Crear</button>
        `;
        divInput.innerHTML = salida;
        
    }else if(num==1){
        salida = `
        <p>Ingrese el nombre de su directorio:</p>
        <input type="text" id="name-dir">
        <p>Ingrese el nombre de su nota:</p>
        <input type="text" id="name-archivo">
        <button onclick="ajaxVerDir()">Buscar</button>
        <p>Edite su nota:</p>
        <textarea id="textarea"></textarea>
        <button onclick="ajaxEditarDir()">Guardar</button>
        `;
        divInput.innerHTML = salida;
        
    }else if(num==2){
        salida = `
        <p>Ingrese el nombre de su directorio:</p>
        <input type="text" id="name-dir">
        <p>Ingrese el nombre de su nueva nota:</p>
        <input type="text" id="name-archivo">
        <p>Escriba su nota:</p>
        <textarea id="textarea"></textarea>
        <button onclick="ajaxAgregarDir()">Agregar</button>
        `;
        divInput.innerHTML = salida;
    }
    divInput.style.paddingTop = "2em";
    divInput.style.paddingBottom = "2em";
}
function crudArchivo(num){
    var salida = "";
    mensajes.innerHTML = salida;
    if(num==0){
        salida = `
        <p>Ingrese el nombre de su nota:</p>
        <input type="text" id="name-archivo">
        <p>Escriba su nota:</p>
        <textarea id="textarea"></textarea>
        <button id="ar-crear" onclick="ajaxCreateArch()">Crear</button>
        `;
        divInput.innerHTML = salida;
        
    }else if(num==1){
        salida = `
        <p>Ingrese el nombre de su nota:</p>
        <input type="text" id="name-archivo">
        <button id="ar-buscar" onclick="ajaxVerArch()">Buscar</button>
        <p>Edite su nota:</p>
        <textarea id="textarea"></textarea>
        <button id="ar-editar" onclick="ajaxEditarArch()">Guardar</button>
        `;
        divInput.innerHTML = salida;
    }else if(num==2){
        salida = `
        <p>Ingrese el nombre de su nota:</p>
        <input type="text" id="name-archivo">
        <button id="ar-eliminar" onclick="ajaxEliminarArch()">Eliminar</button>
        `;
        divInput.innerHTML = salida;
    }else if(num==3){
        salida = `
        <p>Ingrese el nombre de su nota:</p>
        <input type="text" id="name-archivo">
        <button id="ar-ver" onclick="ajaxVerArch()">Ver</button>
        <textarea id="textarea" disabled></textarea>
        `;
        divInput.innerHTML = salida;
    }
    divInput.style.paddingTop = "2em";
    divInput.style.paddingBottom = "2em";
}
function ajaxCreateArch(){
    var nombre = document.getElementById("name-archivo").value;
    var textarea = document.getElementById("textarea").value;
    var mensj = "nombre="+nombre+"&textarea="+textarea;

    xmlhttp.onreadystatechange = function (){
        if(xmlhttp.readyState === 4 && xmlhttp.status === 200){
            console.log(xmlhttp.responseText);
            var vernota = xmlhttp.responseText;
            document.getElementById("mensajes").innerHTML = vernota;
        }
    }
    xmlhttp.open("POST","./lib/createarchivo.php", true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send(mensj);
}
function ajaxEliminarArch(){
    var nombre = document.getElementById("name-archivo").value;
    var mensj = "nombre="+nombre;

    xmlhttp.onreadystatechange = function (){
        if(xmlhttp.readyState === 4 && xmlhttp.status === 200){
            console.log(xmlhttp.responseText);
            var vernota = xmlhttp.responseText;
            document.getElementById("mensajes").innerHTML = vernota;
        }
    }
    xmlhttp.open("POST","./lib/eliminararchivo.php", true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send(mensj);
}
function ajaxVerArch(){
    var nombre = document.getElementById("name-archivo").value;
    var mensj = "nombre="+nombre;

    xmlhttp.onreadystatechange = function (){
        if(xmlhttp.readyState === 4 && xmlhttp.status === 200){
            console.log(xmlhttp.responseText);
            var vernota = xmlhttp.responseText;
            document.getElementById("textarea").innerHTML = vernota;
        }
    }
    xmlhttp.open("POST","./lib/verarchivo.php", true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send(mensj);
}
function ajaxEditarArch(){
    var nombre = document.getElementById("name-archivo").value;
    var textarea = document.getElementById("textarea").value;
    var mensj = "nombre="+nombre+"&textarea="+textarea;

    xmlhttp.onreadystatechange = function (){
        if(xmlhttp.readyState === 4 && xmlhttp.status === 200){
            console.log(xmlhttp.responseText);
            var vernota = xmlhttp.responseText;
            document.getElementById("mensajes").innerHTML = vernota;
        }
    }
    xmlhttp.open("POST","./lib/editararchivo.php", true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send(mensj);
}
function ajaxCreateDir(){
    var directorio = document.getElementById("name-dir").value;
    var nombre = document.getElementById("name-archivo").value;
    var textarea = document.getElementById("textarea").value;
    var mensj = "nombre="+nombre+"&textarea="+textarea+"&directorio="+directorio;

    xmlhttp.onreadystatechange = function (){
        if(xmlhttp.readyState === 4 && xmlhttp.status === 200){
            console.log(xmlhttp.responseText);
            document.getElementById("mensajes").innerHTML = vernota;
        }
    }
    xmlhttp.open("POST","./lib/createdirectorio.php", true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send(mensj);
}
function ajaxVerDir(){
    var directorio = document.getElementById("name-dir").value;
    var nombre = document.getElementById("name-archivo").value;
    var mensj = "nombre="+nombre+"&directorio="+directorio;

    xmlhttp.onreadystatechange = function (){
        if(xmlhttp.readyState === 4 && xmlhttp.status === 200){
            console.log(xmlhttp.responseText);
            var vernota = xmlhttp.responseText;
            document.getElementById("textarea").innerHTML = vernota;
        }
    }
    xmlhttp.open("POST","./lib/verdirectorio.php", true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send(mensj);
}
function ajaxEditarDir(){
    var directorio = document.getElementById("name-dir").value;
    var nombre = document.getElementById("name-archivo").value;
    var textarea = document.getElementById("textarea").value;
    var mensj = "nombre="+nombre+"&textarea="+textarea+"&directorio="+directorio;

    xmlhttp.onreadystatechange = function (){
        if(xmlhttp.readyState === 4 && xmlhttp.status === 200){
            console.log(xmlhttp.responseText);
            var vernota = xmlhttp.responseText;
            document.getElementById("mensajes").innerHTML = vernota;
        }
    }
    xmlhttp.open("POST","./lib/editardirectorio.php", true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send(mensj);
}
function ajaxAgregarDir(){
    var directorio = document.getElementById("name-dir").value;
    var nombre = document.getElementById("name-archivo").value;
    var textarea = document.getElementById("textarea").value;
    var mensj = "nombre="+nombre+"&textarea="+textarea+"&directorio="+directorio;

    xmlhttp.onreadystatechange = function (){
        if(xmlhttp.readyState === 4 && xmlhttp.status === 200){
            console.log(xmlhttp.responseText);
            var vernota = xmlhttp.responseText;
            document.getElementById("mensajes").innerHTML = vernota;
        }
    }
    xmlhttp.open("POST","./lib/agregardirectorio.php", true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send(mensj);
}