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
                  <option value="activo">Activo</option>
                  <option value="inactivo">Inactivo</option>


                  
                  </select>

</div>


</div>



<br><br>

<div class="row">
    <div class="col-lg-12">
      <div class="card">

        
        
    <div class="card-block">
        <table class="col-sm-12 table-bordered table-striped table-condensed cf" id="mostrarTablaPos">
        <thead>
          <tr>
            <td>Puesto de Trabajo</td>
            <td>Dni</td>
            <td>Primer Apellido</td>
            <td>Segundo Apellido</td>
            <td>Nombres</td>
            <td>Fecha de Nacimiento</td>
            <td>Correo</td>
            <td>Celular</td>
           
            <td>Estado</td>

          </tr>
        </thead>
        <tbody style="text-align: center;"></tbody>
 
       </table> 
  </div>

</div>  
</div> 
</div>



</div>
          

          

         <script type="text/javascript" src="js/postulant.js"></script>

        <script>
            cargarTabla(<?= $anio; ?>,<?= intval($mes);?>,<?= $estado;?>);
        </script>
@stop