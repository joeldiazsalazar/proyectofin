
@extends('layouts.admin')


@section('contenido')

  <div>
                <!-- Row Starts -->
                <div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Control de Notas</h4>
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
                            <div class="card-header"><h5 class="card-header-text">Registro de Notas</h5>
                                <div class="f-right">
                                    <a href="" data-toggle="modal" data-target="#input-type-Modal"><i class="icofont icofont-code-alt"></i></a>
                                </div>
                            </div>

<div class="card-block">


<form method="POST" action=" {{ route('teachers.sendQualification')}} " onsubmit="return checkSubmit();">
	{!! csrf_field() !!}
	<table class="table">
		<h4>Descripcion</h4>

		@foreach($trimester as $ttr)
			<input type="checkbox" name="trimester_id" value="{{ $ttr->id }}" checked="">{{ $ttr->name }}
	
		@endforeach


		<thead>
			<tr>
				<td>PROGRAMACION</td>
				<td>CURSO</td>
				<td>Docente</td>
			</tr>
		</thead>
		<tbody>
			@foreach($ddNote as $desk)
			<tr>
				<td><input type="checkbox" checked name="programming_id" value="{{ $desk->programming_id }}"> {{ $desk->programming->nivel .'  '. $desk->programming->classroom->nombre .''. $desk->programming->classroom->pabellon }}</td>
				<td>
					<input type="checkbox" checked name="course_id" value="{{ $desk->course_id}}">{{ $desk->course->name }}
					
				</td>

				<td><input type="checkbox" checked value="{{ $desk->teacher_id }}" name="teacher_id"> {{ $desk->teacher->nombres}}</td>
			
			</tr>

			@endforeach



		</tbody>
	</table>
<table class="table-responsive table-hover">
	<thead>
		<tr>
			<td>PROGRAMACION DE CURSO</td>

			<tr>
			<td>ALUMNO</td>
			<td class="">Nota 1</td>
            <td class="">Notas 2</td>
            <td class="">Notas 3</td>
            <td class="">Notas 4</td>
            <td class="">Promedio</td> 

			</tr>
		</tr>
	</thead>


	<tbody>

    
	    	
		@foreach($ddNote as $pro)
			
		<tr>

			@foreach($pro->programming->enrollment as $wtf)
			<tr class="row">
			<td> 
				<input  type="checkbox" name="user_id[]" checked value="{{ $wtf->user_id }}">{{ $wtf->user->name }}
			</td>
			 <td><input class="form-control" type="text" name="nota1[{{$not1++}}]"  id="note1_{{$id1++}}"  style="width: 70px; text-align: center;" onkeyup="calcular({{$met1++}});" maxlength="2" ></td>
             <td> <input class="form-control" type="text" name="nota2[{{$not2++}}]"  id="note2_{{$id2++}}"  style="width: 70px; text-align: center;" onkeyup="calcular({{$met2++}})" maxlength="2"></td>
             <td> <input class="form-control" type="text" name="nota3[{{$not3++}}]"  id="note3_{{$id3++}}"  style="width: 70px; text-align: center;"  onkeyup="calcular({{$met3++}})" maxlength="2"></td>
             <td> <input class="form-control" type="text" name="nota4[{{$not4++}}]"  id="note4_{{$id4++}}"  style="width: 70px; text-align: center;" onkeyup="calcular({{$met4++}})" maxlength="2"></td>
             <td> <input class="form-control" type="text" name="promedio[{{$prom++}}]"  id="prom_{{$id5++}}"  style="width: 70px; text-align: center;" ></td>
         
			</tr>
			@endforeach
			
		</tr>

		@endforeach
	</tbody>
</table>

<input class="btn btn-success waves-effect waves-light m-r-30" type="submit" name="Enviar" id="btn_note">

</form>

</div>
</div>
</div>
    </div>
    </div>
@stop