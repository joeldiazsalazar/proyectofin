@extends('layouts.admin')

@section('contenido')

<div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Historial Asistencia</h4>
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

	<th>ID PROGRAMACION</th>
	<th>COURSE ID</th>
	<th>USER ID</th>
	<th>TEACHER ID</th>
	<td>FECHA</td>
	</tr>
</thead>
<tbody>
	
	@foreach ($assistance as $assistances)
	<tr>

		<td>{{ $assistances->programming_id }}</td>
		<td>{{ $assistances->course->name }}</td>
		<td>{{ $assistances->user->name }}</td>
		<td>{{ $assistances->teacher->nombres }}</td>
		<td>{{ $assistances->created_at}}</td>


	
</tr>

	@endforeach
</tbody>
</table>
</div>

</div>
</div>
</div>




@stop
