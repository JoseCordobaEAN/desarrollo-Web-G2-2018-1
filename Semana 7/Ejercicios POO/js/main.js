//alert();

/**
 * Crea nuevas tareas
 * @param   {String} contenido El contenido de nuestra tarea
 * @param   {Date} fecha     La fecha de creación de nuestra tarea
 * @param   {bool} realizada Si ya realicé mi tarea
 * @returns {Tarea} una nueva instancia de mi clase Tarea con los parametros asignados
 */
function Tarea(contenido, fecha, realizada) {
    this.contenido = contenido;
    this.fecha = fecha;
    this.realizada = realizada;

    /**
     * Crea el html de la tarea
     * @param   {int} pos la poscicion en el documento html
     * @returns {String} cadena con el html de la tarea
     */
    this.generarHtml = function (pos) {
        var textoTarea = '<div id="tarea' + pos + '"><input type="checkbox" name="task'+pos+'" id="tarea'+pos+'"><label for="task'+pos+'">' + contenido + ' Generado en ' + fecha + '</label></div>'
        return textoTarea;
    }
}

var Tareas = [];
var btnAdd = document.getElementById("btn-add");

/**
 * Agrega una nueva tarea al DOM
 */
var addTask = function () {
    Tareas.push(new Tarea(document.getElementById("text-task").value, new Date().toDateString(), false));
    document.getElementById("task-area").innerHTML += Tareas[Tareas.length-1].generarHtml();
    document.getElementById("text-task").value = '';

}

document.getElementById("text-task").onkeypress = function(evt){
    if(evt.keyCode == 13){
        addTask();
    }
}

btnAdd.onclick = addTask;
