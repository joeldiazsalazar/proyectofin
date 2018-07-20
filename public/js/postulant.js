function cambiar_fecha_grafica(){

    var anio_sel=$("#anio_sel").val();
    var mes_sel=$("#mes_sel").val();
    var estatus_sel=$("#estatus_sel").val();

    cargarTabla(anio_sel,mes_sel,estatus_sel);
}

function cargarTabla(anio,mes,estado){

	var url = "registros_postulantes/"+anio+"/"+mes+"/"+estado+"";
    $.get(url,function(resul){
    var datos= jQuery.parseJSON(resul);
    var rest = datos.totalpost;

     $('#mostrarTablaPos').DataTable( {
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
        "resposive": true,
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
            { "data": "puesto_trabajo" },
            { "data": "dni" },
            { "data": "primer_apellido" },
            { "data": "segundo_apellido" },
            { "data": "nombres" },
            { "data": "fecha_nacimiento" },
            { "data": "correo" },
            { "data": "celular" },
            { "data": "estado" }
        ],

    } );

    });

    }
