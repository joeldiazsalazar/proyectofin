@extends('layouts.admin')

@section('contenido')

<div class="container">
<h3 class="text-center">FICHA DE MATRICULA <br>I.E.P "CESAR VALLEJO MENDOZA"</h3>
<br>
<div class="row">

	
	<div class="col-md-9">

	<table class="table table-border">

		<tbody>

			<tr>
			<td>Datos Personales</td>
			</tr>
			<tr>
				<td>
					
					<strong>Nombres: {{ $enrollment->student->nombres}}</strong>

				</td>
				<td><strong>Apellidos : {{ $enrollment->student->apellidoPaterno.' '.$enrollment->student->apellidoMaterno}}</strong></td>
				
			</tr>

			<tr>
				<td><strong>Direccion: {{ $enrollment->student->direccion}}</strong></td>
				<td><strong>DNI: {{ $enrollment->student->dni}}</strong></td>
				{{-- <td><strong>Email: {{ $enrollment->student->email}}</strong></td> --}}
			</tr>

			<tr>
				<td><strong>Fecha de nacimiento: {{ $enrollment->student->fecha_nacimiento}}</strong></td>
				<td><strong>Sexo: {{ $enrollment->student->sexo}}</strong></td>
			</tr>
		</tbody>

	</table>
	</div>
	<div class="col-md-2">
		

		<div class="picProfile">
			 <img class="img-fluid" src="{{ asset('assets/images/avatar-1.png')}}" alt="">
		</div>
		<h6 class="text-center">Codigo: {{ $enrollment->user->username }} </h6>



	</div>

</div>
<div class="row">
	<div class="col-md-12">

	<table class="table table-border">

		<tbody>

			<tr>
			<td>Datos Apoderado</td>
			</tr>
			<tr>
				<td>
					
					<strong>Nombres: {{ $enrollment->student->attorney->nombres}}</strong>

				</td>
				<td><strong>Apellidos : {{ $enrollment->student->attorney->apellidoPaterno.' '.$enrollment->student->attorney->apellidoMaterno}}</strong></td>
				
			</tr>

			<tr>
				<td><strong>Direccion: {{ $enrollment->student->attorney->direccion}}</strong></td>
				<td><strong>DNI: {{ $enrollment->student->attorney->dni}}</strong></td>
				{{-- <td><strong>Email: {{ $enrollment->student->email}}</strong></td> --}}
			</tr>

			<tr>
				<td><strong>Celular: {{ $enrollment->student->attorney->celular}}</strong></td>
				<td><strong>Sexo: {{ $enrollment->student->attorney->sexo}}</strong></td>
			</tr>
		</tbody>

	</table>
	</div>
</div>


<div class="row">
	<div class="col-md-12">

	<table class="table table-border">

		<tbody>

			<tr>
			<td>Detalle Matricula</td>
			</tr>
			<tr>
				<td><strong>Fecha de ingreso: {{ $enrollment->created_at}}</strong></td>
				<td>
							
					<strong>Programación: {{ $enrollment->programming->grado.'ero de '.$enrollment->programming->nivel.'-'.$enrollment->programming->classroom->pabellon}}</strong>

				</td>
				
				
			</tr>

			<tr>
				
				<td><strong>Aula : {{ $enrollment->programming->classroom->nombre.'-'.$enrollment->programming->classroom->pabellon}}</strong></td>
				<td><strong>Turno: {{ $enrollment->programming->turno}}</strong></td>
				{{-- <td><strong>Email: {{ $enrollment->student->email}}</strong></td> --}}
			</tr>
		</tbody>

	</table>
	</div>
</div>

<div class="row">
 <div class="col-md-12">
 	<a href="{{ route('products.pdf', $enrollment->id) }}" class="btn btn-sm btn-primary">
            Descargar Ficha de Matricula
        </a>
 </div>
</div>

</div>





@stop