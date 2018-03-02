var elemento = document.createElement("h1");
elemento.textContent = "Hola Mundo";
document.getElementsByTagName("body")[0].appendChild(elemento);

var elementoPorId = document.getElementById("por-id");
elementoPorId.getElementsByTagName("p")[0].textContent = "Este texto cambió";

var aEliminar = elementoPorId.getElementsByTagName("p")[0]
elementoPorId.removeChild(aEliminar);