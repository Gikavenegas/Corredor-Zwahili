

function patronCanvas (){
    let canvas = document.getElementById("canvas");
    ctx = canvas.getContext("2d");

    ctx.font="40px Helvetica";
    ctx.translate(15,50);
    ctx.fillText("Promo en rollos", 0, 30);


    ctx.beginPath();
    ctx.arc(30, 120, 30, 0, 2 * Math.PI);
    ctx.fillStyle="#1DBF1D";
    ctx.fill();

    ctx.font="15px Helvetica";
    ctx.translate(0,50);
    ctx.fillText("Tela verde", 0, 30);


    ctx.beginPath();
    ctx.arc(120, 130, 30, 0, 2 * Math.PI);
    ctx.fillStyle="#A2167A";
    ctx.fill();

    ctx.font="15px Helvetica";
    ctx.translate(0,50);
    ctx.fillText("Tela fucsia", 80, 30);

    ctx.beginPath();
    ctx.arc(210, 150, 30, 0, 2 * Math.PI);
    ctx.fillStyle="#291DBF";
    ctx.fill();

    ctx.font="15px Helvetica";
    ctx.translate(0,50);
    ctx.fillText("Tela azul", 180, 60);
}

window.addEventListener("load", patronCanvas)
