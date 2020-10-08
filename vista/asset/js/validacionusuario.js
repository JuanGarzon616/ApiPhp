function validacion(){
    if(typeof(sessionStorage.getItem('user')) != "undefined" && sessionStorage.getItem('user') !== null) {
        //alert("hola");
    }else{
        window.location.href = "index.html";
    }    
}

function decodeutf8(s){
    return decodeURIComponent(escape(s));
}

var guardado = JSON.parse(sessionStorage.getItem('user'));

console.log(guardado);

console.log(guardado.Usuario.img_usuario);

console.log('objeto obtenido', guardado.Usuario.nombre_usuario);

document.getElementById("nomb").textContent = guardado.Usuario.nombre_usuario+" "+decodeutf8(guardado.Usuario.primer_apellido);

function setimtg(){
    var userimg = document.getElementById("imguser");
    userimg.innerHTML = "<img src="+guardado.Usuario.img_usuario+" alt=\"imgUser\"></img>";
}
setimtg();

/*
if(guardado.Usuario.fk_rolid_rol == ){

}*/

// 1 admin
// 2 usuario
// 3 empresa