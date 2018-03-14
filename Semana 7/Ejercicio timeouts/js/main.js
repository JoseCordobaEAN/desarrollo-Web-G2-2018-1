document.getElementById("texto-0").innerHTML = "son las "+ new Date();

var espere5 = function(){
  document.getElementById("texto-5seg").innerHTML = "son las "+ new Date();
};

setTimeout(espere5, 5000);
//alert();