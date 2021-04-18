//Creación de una función encargada de validar
//la entrada de números mediante una expresión regular.

function validarn(e){
    var teclado = (document.all)?e.keyCode:e.which;
    if(teclado == 8)return true;

    var patron = /[0-9\d .]/;

    var prueba = String.fromCharCode(teclado);
    return patron.test(prueba);
}

function calculo(){
    var valor = document.formulario.cantidad.value;
    var result = parseInt(valor);
    var interes = result*0.02;
    var mes = interes*document.formulario.mes.value;
    var total = result+mes;

    document.formulario.sueldoti.value = total + " $";
}

function borrar(){
    document.formulario.cantidad.value = "";
    document.formulario.mes.value = "";
    document.formulario.sueldoti.value = "";
}