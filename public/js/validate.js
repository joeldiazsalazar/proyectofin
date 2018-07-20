
function calcular(Valor) {
var nota1 = parseFloat(document.getElementById('note1_'+Valor).value);
var nota2 =parseFloat(document.getElementById('note2_'+Valor).value);
var nota3 = parseFloat(document.getElementById('note3_'+Valor).value);
var nota4 = parseFloat(document.getElementById('note4_'+Valor).value);
//alert(nota1+"//"+nota2+"//"+nota3+"//"+nota4);
var pro =(nota1+nota2+nota3+nota4)/4;
if(!isNaN(pro))
document.getElementById('prom_'+Valor).value = pro.toFixed(2);
}

function checkSubmit() {
    document.getElementById("btn_note").value = "Enviando...";
    document.getElementById("btn_note").disabled = true;
    return true;
}


 function soloNumeros(e)
    {
        // capturamos la tecla pulsada
        var teclaPulsada=window.event ? window.event.keyCode:e.which;
        // capturamos el contenido del input
        var valor=document.getElementById("inputNumero").value;
 
        if(valor.length<10)
        {
            // 13 = tecla enter
            // Si el usuario pulsa la tecla enter o el punto y no hay ningun otro
            // punto
            if(teclaPulsada==13)
            {
                return true;
            }
 
            // devolvemos true o false dependiendo de si es numerico o no
            return /\d/.test(String.fromCharCode(teclaPulsada));
        }else{
            return false;
        }
    }

function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
}

function Card(event, el){//Validar nombre 
    //Obteniendo posicion del cursor 
    var val = el.value;//Valor de la caja de texto
    var pos = val.slice(0, el.selectionStart).length;
  
    var out = '';//Salida
    var filtro = '1234567890';
    var v = 0;//Contador de caracteres validos
  
    //Filtar solo los numeros
    for (var i=0; i<val.length; i++){
       if (filtro.indexOf(val.charAt(i)) != -1){
       v++;
       out += val.charAt(i);       
       //Agregando un espacio cada 4 caracteres
       if((v==3) || (v==6) || (v==9))
           out+=' ';
     }
    }
    //Reemplazando el valor
    el.value = out;
  
    //En caso de modificar un numero reposicionar el cursor
    if(event.keyCode==8){//Tecla borrar precionada
        el.selectionStart = pos;
        el.selectionEnd = pos;
    }
}




function validarEmail(valor) {
if (/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/.test(valor)){
return 0;
} else {
return -1;
}
}


// validar digitos de numeros 









