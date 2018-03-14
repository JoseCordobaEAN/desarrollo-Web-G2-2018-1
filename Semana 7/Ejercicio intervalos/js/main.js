var espere2 = function(){
  document.getElementById("texto-intervalo-2seg").innerHTML += "<br/>son las "+ new Date();
};

setInterval(espere2, 2000);
//alert();