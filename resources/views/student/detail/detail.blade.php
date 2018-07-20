@extends('layouts.admin')

@section('contenido')








<div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Mi Horario</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="{{ route('cpanel')}}"><i class="icofont icofont-home"></i></a>
                                </li>
                            
                                
                            </ol>
                        </div>
                    </div>
     </div>

<div class="container-fluid">
	
	<div class="card">
		
		<div class="card-header">
			<div class="card-block">
				
				<div class="row">
					

<div class="col-md-3 ">
						

<table class="table table-hover ">
<thead>
	<tr>
	<th>Lunes</th>
	</tr>
</thead>
<tbody>
	@foreach ($detalles as $detail)
	<tr>
	<td>

		{{ $detail->course->name }}<br>
		{{ $detail->teacher->nombres}}<br>
		{{ $detail->hour_start}} 
		{{ $detail->hour_end}}	<br>	
		{{ $detail->programming->classroom->nombre .'-'.$detail->programming->classroom->pabellon}}
	</td>
	</tr>

	@endforeach
</tbody>
</table>
</div>	
<div class="col-md-2 ">
<table class="table table-hover">
	
	<thead>
		<tr>
			<th>
				Martes
			</th>
		</tr>
	</thead>
	<tbody>
	@foreach($det_mart as $dd_m)
	<tr>
	<td>
		{{ $dd_m->course->name }}<br>
		{{ $dd_m->teacher->nombres}}<br>
		{{ $dd_m->hour_start}} 
		{{ $dd_m->hour_end}}	<br>	
		{{ $dd_m->programming->classroom->nombre .'-'.$dd_m->programming->classroom->pabellon}}

	</td>
	</tr>
	@endforeach
	</tbody>


</table>

</div>

<div class="col-md-2 ">
<table class="table table-hover">
	
	<thead>
		<tr>
			<th>
				Miercoles
			</th>
		</tr>
	</thead>
	<tbody>
	@foreach($det_mier as $dd_mier)
	<tr>
	<td>
		{{ $dd_mier->course->name }}<br>
		{{ $dd_mier->teacher->nombres}}<br>
		{{ $dd_mier->hour_start}} 
		{{ $dd_mier->hour_end}}	<br>	
		{{ $dd_mier->programming->classroom->nombre .'-'.$dd_mier->programming->classroom->pabellon}}

	</td>
	</tr>
	@endforeach
	</tbody>


</table>

</div>

<div class="col-md-2 ">
<table class="table table-hover">
	
	<thead>
		<tr>
			<th>
				Jueves
			</th>
		</tr>
	</thead>
	<tbody>
	@foreach($det_juev as $dd_juev)
	<tr>
	<td>
		{{ $dd_juev->course->name }}<br>
		{{ $dd_juev->teacher->nombres}}<br>
		{{ $dd_juev->hour_start}} 
		{{ $dd_juev->hour_end}}	<br>	
		{{ $dd_juev->programming->classroom->nombre .'-'.$dd_juev->programming->classroom->pabellon}}

	</td>
	</tr>
	@endforeach
	</tbody>


</table>

</div>

<div class="col-md-3 ">
<table class="table table-hover">
	
	<thead>
		<tr>
			<th>
				Viernes
			</th>
		</tr>
	</thead>
	<tbody>
	@foreach($det_vier as $dd_vier)
	<tr>
	<td>
		{{ $dd_vier->course->name }}<br>
		{{ $dd_vier->teacher->nombres}}<br>
		{{ $dd_vier->hour_start}} 
		{{ $dd_vier->hour_end}}	<br>	
		{{ $dd_vier->programming->classroom->nombre .'-'.$dd_vier->programming->classroom->pabellon}}

	</td>
	</tr>
	@endforeach
	</tbody>


</table>

</div>



					
				</div>
			</div>
		</div>
	</div>










</div>








@stop
