function cambiar_fecha_grafica(){

    var anio_sel=$("#anio_sel").val();
    var mes_sel=$("#mes_sel").val();
    var estatus_sel=$("#estatus_sel").val();

    cargarTabla(anio_sel,mes_sel,estatus_sel);
}

function cargarTabla(anio,mes,estado){

	var url = "reportes_registros/"+anio+"/"+mes+"/"+estado+"";
    $.get(url,function(resul){
    var datos= jQuery.parseJSON(resul);
    var rest = datos.registros;
    var suma = datos.suma;
    // $('#mostrarTabla').DataTable( {
    //     "destroy": true,
    //     "dom": 'Bfrtip',
    //     "buttons": [
    //         'copyHtml5',
    //         'excelHtml5',
    //         'csvHtml5',
    //         'pdfHtml5'
    //     ],

    //     "data": rest,
    //     "columns": [
    //         { "data": "enrollment_id" },
    //         { "data": "cuota" },
    //         { "data": "periodo_inicio" },
    //         { "data": "periodo_fin" },
    //         { "data": "monto" },
    //         { "data": "estado" }
    //     ]
    // } );


     $('#mostrarTabla').DataTable( {
        "destroy": true,
        "dom": 'Blfrtip',
        "buttons": [
            { extend: 'copyHtml5', footer: true },
            { extend: 'excelHtml5', footer: true },
            { extend: 'csvHtml5', footer: true },
            { extend: 'pdfHtml5', footer: true },
            { extend: 'print',

              text: 'Imprimir Todo',
              footer: true,
              exportOptions: {
                    modifier: {
                        selected: null
                    }
                }
            }
        ],
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
        "language": {
            "lengthMenu": "Display _MENU_ records per page",
            "zeroRecords": "No hay resuldatos, lo sentimos",
            "info": "Showing page _PAGE_ of _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtered from _MAX_ total records)"
        },

        "select": true,
        "data": rest,
        "columns": [
            { "data": "enrollment_id" },
            { "data": "cuota" },
            { "data": "periodo_inicio" },
            { "data": "periodo_fin" },
            { "data": "monto" },
            { "data": "estado" }
        ],

        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
 
            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
            // Total over all pages
            total = api
                .column( 4 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            // Total over this page
            pageTotal = api
                .column( 4, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            // Update footer
            $( api.column( 4 ).footer() ).html(
                'S/.'+pageTotal +' ( S/.'+ total +' total)'
            );
        }
    } );



    
    // $("#agregarSum").html(suma);

    });

    }



    // var pag = datos.pagination;
    
  //   var html='';
  //   var total = 0;
  //   for (var i in rest) {
  //    html+=`<tr>  
  //     	<td align="center" valign="middle">${rest[i].enrollment_id}</td>
  //       <td align="center" valign="middle">${rest[i].cuota}</td>
  //       <td align="center" valign="middle">${rest[i].periodo_inicio}</td>
  //       <td align="center" valign="middle">${rest[i].periodo_fin}</td>
  //       <td align="center" valign="middle">${rest[i].monto}</td>
  //       <td align="center" valign="middle">${rest[i].estado}</td>
  //      </tr>`
		// ;

  //   }




    // foreach($datos as $items){
    // 	$total =+ $items->monto;
    // }
    // console.log($total);

    // $('table#mostrarTabla > tbody').html(html);



	




// function dowload(){
// 	var doc = new jsPDF();
//     var specialElementHandlers = {
//     '#editor': function (element, renderer) {
//         return true;
//     }
//     };

//     doc.fromHTML($('#mostrarTabla').html(), 15, 15, {
//         'width': 170,
//             'elementHandlers': specialElementHandlers
//     });
//     doc.save('sample-file.pdf');
	
// }