@extends('layouts.admin')

@section('contenido')


 <div>
                <!-- Row Starts -->
                <div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Seccion Apoderado</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="{{ route('cpanel')}}"><i class="icofont icofont-home"></i></a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                    <div class="row">
                    <!-- Form Control starts -->
                    <div class="col-lg-6">
                        <div class="card">
                          

<div class="card-block">

{{-- /attorneys/show/{{ $attorneys->id }} --}}
 @if (auth()->check())


<table class="table table-hover">
	

<thead>
	<tr>
{{-- 	<th>ID</th> --}}
	<th>Nombre</th>

	</tr>
</thead>
<tbody>


	

	<tr>
{{-- 	<td>{{ $user->id }}</td> --}}

	<td>{{ $user->name }}</td>

	<td>

		@foreach($user->attorney as $users)
				<a href="{{ route('attorneys_student.show', $users->id) }}"> Hijos Matriculados
				</a>
		@endforeach
	</td>


	</tr>


{{-- 	<td>

		@foreach($user->student as $students)

		<a href="/students/show/{{ $students->id }}">

			{{ $students->dni }}

		</a>
		
		@endforeach
	</td>
 --}}



</tbody>
</table>

</div>
</div>
</div></div></div>
@endif


@stop