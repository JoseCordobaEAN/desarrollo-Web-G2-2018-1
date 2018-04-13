var horaCliente = document.getElementById('horacliente');
var imprimeHora = function(){
    var fecha = new Date();
    horaCliente.textContent = 'La hora del cliente es '+fecha.toTimeString();
}

setTimeout(imprimeHora, 3000);