@extends('layouts.admin')

@section('contenido')

<div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Datos Personales</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="{{ route('cpanel')}}"><i class="icofont icofont-home"></i></a>
                                </li>
                            
                                
                            </ol>
                        </div>
                    </div>
     </div>


     <div class="row">
                    <!-- Form Control starts -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><h5 class="card-header-text"></h5>
                                


                            </div>

<div class="card-block">



<table class="table table-hover">
	

<thead>
	<tr>

	<th>Alumno</th>
{{-- 	<th>Usuario</th> --}}
	<th>Nivel</th>
	<th>Grado</th>
	<th>Turno</th>
	<th>Salon</th>
	<th>Seccion</th>
	</tr>
</thead>
<tbody>
	
	@foreach ($as as $enrollment)
	<tr>


	<td>{{ $enrollment->student->nombres .' '.$enrollment->student->apellidoPaterno.' '.$enrollment->student->apellidoMaterno}}</td>

{{-- 	<td>{{ $enrollment->user->username}}</td> --}}


	<td>{{ $enrollment->programming->nivel}}</td>

	<td>{{ $enrollment->programming->grado}}</td>

	<td>{{ $enrollment->programming->turno}}</td>

	<td>

		{{ $enrollment->programming->classroom->nombre }}

	</td>

		<td>

		{{ $enrollment->programming->classroom->pabellon }}

	</td>


	
</tr>

	@endforeach
</tbody>
</table>
</div>

</div>
</div>
</div>




@stop
