
var productos;
var soltar;
var src;
var codigo;

function iniciar (){
    productos = document.querySelectorAll("#Productos-catalogo img");
    for(var i=0; i<productos.length; i++){
        productos[i].addEventListener('dragstart', arrastrado, false);
    }

    soltar = document.getElementById("cajapreferencia");
    soltar.addEventListener("dragenter", function(e){
        e.preventDefault();
    }, false);
    
    soltar.addEventListener("dragover", function(e){
        e.preventDefault();
        console.log("drag over")}, false);
    soltar.addEventListener("drop", soltado, false);
}

function arrastrado(e){
    elemento=e.target;

    //Aqui tomamos la informacion del id de la imagen para enviarla
    e.dataTransfer.setData('Text', elemento.getAttribute('id'));
    console.log("drop");
} 

function soltado(e){
    e.preventDefault();

    /*Aqui tomamos la informacion del id de la imagen y la guardamos en la variable idImagen*/
    var idImagen=e.dataTransfer.getData('Text');

    var src=document.getElementById(idImagen).src;
    soltar.innerHTML="<img src='" + src + "'>";

} 
window.addEventListener('load', iniciar, false);