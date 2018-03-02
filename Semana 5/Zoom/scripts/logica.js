var btnZoom = document.getElementById("btn-zoom");
var imagen = document.getElementById("img1");

var transform = function () {
    
    if (imagen.className === "tamano-normal") {
        imagen.className = "tamano-grande";
        btnZoom.textContent = "Shrink";
    }else{
        imagen.className = "tamano-normal";
        btnZoom.textContent = "Zoom";
    }
};

btnZoom.onclick = transform;
imagen.onclick = transform;

//alert(btnZoom);
