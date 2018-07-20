function check() {
    // document.getElementById("btnNuevaCuota").value = "Enviando...";style="pointer-events: none;
    
}

function funcEliminarFila() 
{
    $(this).parent().parent().fadeOut( "slow", function() { $(this).remove(); } );

}

function funcNuevoAlineamiento() 
{   
    $("#btnNuevaCuota").addClass('disabledbutton');
    // $('#btnNuevaCuota').prop('disabled',true);
    // document.getElementById("btnNuevaCuota").disabled = true;
    // check();
    for (var i = 1; i <= 5; i++) {

        $("#tablaCuotas")
        .append($('<tbody>')
        .append($('<tr>')
        .append(
            $('<td>')
            .append
            (
                $('<input>').attr('type', 'text').attr('value', i).addClass('form-control').attr('name', 'cuota[]').prop('readonly', true)

                
            )
        )
       
        .append
        (
            $('<td>')
            .append
            (
                $('<input>').attr('type', 'date').attr('id', 'example-date-input').addClass('form-control').attr('name', 'periodo_inicio[]')
            )
        )
        .append
        (
            $('<td>')
            .append
            (
                $('<input>').attr('type', 'date').attr('id', 'example-date-input').addClass('form-control').attr('name', 'periodo_fin[]')
            )
        )
        .append
        (
            $('<td>')
            .append
            (
                $('<input>').attr('type', 'text').attr('id', 'monto'+i).addClass('form-control').attr('name', 'monto[]').on('keyup', function(Valor){
                        
                    // dinamic++;

                    // var  = document.getElementById('monto1').value;
                    // var montox = document.getElementById('monto1').value;
                    var monto1 = document.getElementById('monto1').value;
                    var monto2 = document.getElementById('monto2').value;
                    var monto3 = document.getElementById('monto3').value;
                    var monto4 = document.getElementById('monto4').value;
                    var monto5 = document.getElementById('monto5').value;
                    // var monto1 = document.getElementById('monto1').value;
                    // //alert(nota1+"//"+nota2+"//"+nota3+"//"+nota4);

                    // alert(monto1);
                    var rest1 =(monto1);
                    var rest2 =(monto2);
                    var rest3 =(monto3);
                    var rest4 =(monto4);
                    var rest5 =(monto5);
                    // if(!isNaN(rest))
                    document.getElementById('adeuda1').value = rest1;
                    document.getElementById('adeuda2').value = rest2;
                    document.getElementById('adeuda3').value = rest3;
                    document.getElementById('adeuda4').value = rest4;
                    document.getElementById('adeuda5').value = rest5;

                })
            )
        )
        .append
        (
            $('<td>')
            .append
            (
                $('<input>').attr('type', 'text').attr('id', 'adeuda'+i).addClass('form-control').attr('name', 'adeuda[]').prop('readonly', true)
            )
        )
        .append
        (
            $('<td>')
            .append
            (
                $('<input>').attr('type', 'text').addClass('form-control').attr('name', 'estado[]').attr('value','pendiente').prop('readonly', true)
            )
        )

        .append
        (
            $('<td>').addClass('text-center')
            
            .append
            (
                $('<div>').addClass('btn btn-danger').text('Eliminar').on('click', funcEliminarFila)
            )            
        ).
        append('</tr>').

        append('</tbody>')        
    ));

          
          // return true;
    }   

}