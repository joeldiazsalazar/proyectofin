@extends('layouts.admin')

@section('contenido')


<h1>MOSTRAR CURSOS</h1>

{{-- /attorneys/show/{{ $attorneys->id }} --}}
 @if (auth()->check())


<table class="table table-hover">
	

<thead>
	<tr>
	<th>ID</th>
	<th>Cursos</th>
	</tr>
</thead>
<tbody>
	@foreach ($dett as $courses)
	<tr>
	<td>      
		<a href="{{ route('course_note.show', $courses->id )}}">{{ $courses->course->name }}</a>

	</td>

	</tr>
	@endforeach
</tbody>
</table>
@endif


@stop