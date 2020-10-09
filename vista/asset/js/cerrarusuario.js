function cerrar(){
    sessionStorage.removeItem('user');
    sessionStorage.removeItem('pqrs');
    window.location.href = "index.html";
}