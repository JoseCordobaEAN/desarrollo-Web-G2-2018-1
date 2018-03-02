var tequilas = ['cuervo', 'olmeca', 'maestro tequilero', '1800', 'cabrito', 'agave azul', 'mezcal', 'gusano rojo'];

for (var i = 0; i < tequilas.length; i++) {
    console.log(tequilas[i]);
}

while (tequilas.length>0){
    document.write("</br>"+tequilas.pop());
}

tequilas.push('gran reserva');

/**
 * Calcula el perimetro de un triangulo dados sus lados
 * @param   {Number[]} lado Agreglo con los lados del triangulo
 * @returns {Number} el perimetro del triangulo
 */
function areaTriangulo(lado){
    return lado[0] + lado [1] + lado[2];
}

/**
 * Calcula el semiperimetro de un triangulo dados sus lados
 * @param   {Number[]} lado Arreglo con los lados del triangulo
 * @returns {Number} el semiperimetro del triangulo
 */
var semiPerimetro = function(lado){
    return areaTriangulo(lado)/2;
}

/**
 * Calcula el area de un triangulo dados sus lados
 * @param   {Number[]} lado Arreglo con los lados del triangulo
 * @returns {Number} el area del triangulo
 */
var areaTriangulo = function(lado){
    var s = semiPerimetro(lado);
    return (s*(s-lado[0])*(s-lado[1])*(s-lado[2]))**(1/2);
}