var btnNumeros = document.getElementsByClassName("btn-num");

var clickNum = function(){
    var pantalla = document.getElementById("pantalla");
    var numero = parseInt(pantalla.getAttribute("Value")+this.textContent);
    pantalla.setAttribute("value",numero);
};

for(var i = 0; i<btnNumeros.length;i++){
    btnNumeros[i].onclick = clickNum;
}
//alert(btnNumeros);