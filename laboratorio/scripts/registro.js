var xmlhttp = new XMLHttpRequest();

function registroPersonal(){
    var form = document.getElementById('form');
    form.addEventListener('submit', function(){
        var formdata = new FormData(form);
        xmlhttp.onreadystatechange = function (){
            if(xmlhttp.readyState === 4 && xmlhttp.status === 200){
                // console.log(xmlhttp.responseText);
                // console.log("Hola");
            }
        }
        xmlhttp.open("POST","./libs/registropersonal.php", true);
        // xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlhttp.send(formdata);
    });
}