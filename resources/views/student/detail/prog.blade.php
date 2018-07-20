@extends('layouts.admin')

@section('contenido')

 <div>
                <!-- Row Starts -->
                <div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Seccion Notas</h4>
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
	<th>Curso</th>
	<th>nota1</th>
	<th>nota2</th>
	<th>nota3</th>
	<th>nota4</th>
	<th>promedio</th>
	<th>Trimestre</th>
	</tr>
</thead>
<tbody>
	


	@foreach ($qualification as $notes)

	

	<tr>

	<td>{{ $notes->course->name }}</td>

	<td>

		@if(  $notes->nota1  >= 13)

			<span style="color: blue"> {{ $notes->nota1 }} </span>

		@else	

			<span style="color: red"> {{ $notes->nota1 }} </span>
		
		@endif


	</td>

	<td>

		@if(  $notes->nota2  >= 13)

			<span style="color: blue"> {{ $notes->nota2 }} </span>

		@else	

			<span style="color: red"> {{ $notes->nota2 }} </span>
		
		@endif


	</td>

	<td>

		@if(  $notes->nota3  >= 13)

			<span style="color: blue"> {{ $notes->nota3 }} </span>

		@else	

			<span style="color: red"> {{ $notes->nota3 }} </span>
		
		@endif


	</td>

	<td>

			@if(  $notes->nota4  >= 13)

			<span style="color: blue"> {{ $notes->nota4 }} </span>

		@else	

			<span style="color: red"> {{ $notes->nota4 }} </span>
		
		@endif



	</td>

	<td>

		@if(  $notes->promedio  >= 13)

			<span style="color: blue"> {{ $notes->promedio }} </span>

		@else	

			<span style="color: red"> {{ $notes->promedio }} </span>
		
		@endif

	</td>

	<td>{{ $notes->trimester->name }}</td>

</tr>

	@endforeach
</tbody>


</table>
</div>
</div>
</div>
</div></div>

@stop
