//Saludamos en la consola
console.log("Hola mundo");

//Saludamos en una alerta
alert("Hola mundo");

//Saludamos en el documento
document.write("<h1>Hola mundo</h1>");

/**
 * Escribe un mensaje en la consola si el numero es par
 * @param {number} numero El numero a evaluar
 */
function esPar(numero){
    if(numero%2==0){
        console.log("el numero "+numero+" es par");
    }else{
        console.log("el numero "+numero+" es impar");
    }     
}

function saludar(hora){
    if(hora<12){
        alert("Buenos dias");
    }else if(hora>=12 && hora <19){
        alert("Buenas Tardes");
    }else{
        alert("Buenas Noches");
    }
}