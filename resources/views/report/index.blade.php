@extends('layouts.admin')

@section('contenido')


<?php  $nombremes=array("","ENERO","FEBRERO","MARZO","ABRIL","MAYO","JUNIO","JULIO","AGOSTO","SEPTIEMBRE","OCTUBRE","NOVIEMBRE","DICIEMBRE"); ?>

<div class="container">
<div  class="row" >
<div class="col-md-6">
                  <label>Año</label>
                  <select class="form-control" id="anio_sel"  onchange="cambiar_fecha_grafica();">

                  <?php  echo '<option value="'.$anio.'" >'.$anio.'</option>';   ?>
                    <option value="2015" >2015</option>
                    <option value="2016" >2016</option>
                    <option value="2017" >2017</option>
                    <option value="2018" >2018</option>
                    <option value="2019" >2019</option>
                  </select>

</div>


<div class="col-md-6">
                  <label>Mes</label>
                  <select class="form-control" id="mes_sel" onchange="cambiar_fecha_grafica();" >
                  <?php  echo '<option value="'.$mes.'" >'.$nombremes[intval($mes)].'</option>';   ?>
                    <option value="1">ENERO</option>
                    <option value="2">FEBRERO</option>
                    <option value="3">MARZO</option>
                    <option value="4">ABRIL</option>
                    <option value="5">MAYO</option>
                    <option value="6">JUNIO</option>
                    <option value="7">JULIO</option>
                    <option value="8">AGOSTO</option>
                    <option value="9">SEPTIEMBRE</option>
                    <option value="10">OCTUBRE</option>
                    <option value="11">NOVIEMBRE</option>
                    <option value="12">DICIEMBRE</option>
                  
                  </select>

</div>



<div class="col-md-6">
                  <label>Estado</label>
                  <select class="form-control" id="estatus_sel" onchange="cambiar_fecha_grafica();" >
                  <?php  echo '<option value="'.$estado.'" >'.$estado.'</option>';   ?>
                  <option value="cancelado">cancelado</option>
                  <option value="pendiente">pendiente</option>


                  
                  </select>

</div>

{{-- <div class="col-md-6">
  <a href="" class="btn btn-success" id="exportpdf" onclick="dowload();">Generate PDF</a>
</div> --}}


</div>



<br><br>

<div class="row">
    <div class="col-lg-12">
      <div class="card">

        
        
    <div class="card-block">
        <table class="col-sm-12 table-bordered table-striped table-condensed cf" id="mostrarTabla">
        <thead>
          <tr>
            <td>Codigo Matricula</td>
            <td>Cuota</td>
            <td>Periodo inicio</td>
            <td>Periodo fin</td>
            <td>Monto</td>
            <td>Estado</td>
           {{--  <td>Sumita</td>     --}} 
          </tr>
        </thead>
        <tbody style="text-align: center;"></tbody>
        {{-- <tfoot id="agregarSum"></tfoot> --}}
        <tfoot>
            <tr>
                <th colspan="3"></th>
                <th colspan="1" style="text-align:right;white-space: nowrap;">Total:</th>
                <th></th>
            </tr>
        </tfoot>
       </table> 
  </div>
{{-- {{ $pagos->links('vendor.pagination.bootstrap-4') }} --}}
  <div id="pagination"></div>
</div>  
</div> 
</div>



</div>
          

          
{{--          <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script> --}}
         <script type="text/javascript" src="js/reports.js"></script>

        <script>
            cargarTabla(<?= $anio; ?>,<?= intval($mes);?>,<?= $estado;?>);
        </script>
@stop