function validacion(){
    if(typeof(sessionStorage.getItem('user')) != "undefined" && sessionStorage.getItem('user') !== null) {
        alert("hola");
    }else{
        window.location.href = "index.html";
    }    
}

var guardado = JSON.parse(sessionStorage.getItem('user'));

console.log(guardado);
console.log('objeto obtenido', guardado.Usuario.nombre_usuario);

document.getElementById("nomb").textContent = guardado.Usuario.nombre_usuario;


