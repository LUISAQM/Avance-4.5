$(document).ready(function(){
    $("#btnCalcular").button();
    $("button").click(function(){
        var  numero = document.getElementById("numero").value;
        if(numero==""){
            alert("Debe indicar las piezas a comprar.");
            document.getElementById("numero").focus();
        }
        else if(numero == 1){
            alert("Compra mínima de $450 pesos.");
            resultado.innerText = 375;
        } 
        else if(numero>1){
             resultado.innerText = numero*375;
        }
    });

    $("#btnRealizarp").button();
});