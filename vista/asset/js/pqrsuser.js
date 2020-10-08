var guardado = JSON.parse(sessionStorage.getItem('pqrs'));

console.log(guardado);

console.log(guardado.PQRs[0].asunto_pqr);

var contenido = document.getElementById("datospqr1");


for(let valor of guardado.PQRs){
    contenido.innerHTML += `
        <tr> 
            <td>${ valor.asunto_pqr }</td> 
            <td>${ valor.descripcion_pqr }</td>
            <td>${ valor.estado_pqr }</td>
            <td>${ valor.fecha_pqr }</td>
            <td><a href="">Ver</a> | <a href="">Elimiar</a></td> 
        </tr>`;
}
