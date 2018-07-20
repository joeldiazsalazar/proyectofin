@extends('layouts.admin')

@section('contenido')

 <div>
                <!-- Row Starts -->
                <div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Relacion de Estudiantes</h4>
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
                            

<div class="card-block">
<table class="table table-hover">
	

<thead>
	<tr>
	<th>ID</th>
	<th>Nombre</th>
	<th>Apellido Paterno</th>
	<th>Apellido Materno</th>
	<th>Email</th>
	<th>Dni</th>
	</tr>
</thead>
<tbody>
	
	@foreach ($as as $attorneys)
	<tr>
	<td>{{ $attorneys->id }}</td>

	<td>{{ $attorneys->nombres}}</td>

	<td>{{ $attorneys->apellidoPaterno}}</td>

	<td>{{ $attorneys->apellidoMaterno}}</td>
	<td>{{ $attorneys->email}}</td>

	<td>{{ $attorneys->dni}}</td>
	
</tr>

	@endforeach
</tbody>

</table>
</div>
</div>
</div></div></div>



@stop
