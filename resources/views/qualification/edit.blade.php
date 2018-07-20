@extends('layouts.admin')

@section('contenido')

<div class="container-fluid">

    @if(session()->has('info'))


    <div class="alert alert-success">{{ session('info')}}</div>

    @else
            <!-- Main content starts -->
            <div>
                <!-- Row Starts -->
                <div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Control de Notas</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="{{ route('cpanel')}}"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('qualifications.create')}}">Agregar Nota</a>
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
<form method="POST" action=" {{ route('qualifications.update', $qualification->id)}} " id="update">

    {!! method_field('PUT') !!}
    
    {!! csrf_field() !!}


      {{--   <select name="trimester_id">

        @foreach($qualification as $see)

        <option value="{{ $see->trimester_id }}" id="trimester_id"> {{ $see->trimester_id }}</option>

        @endforeach
     </select>
      <select name="course_id">

        @foreach($qualification as $courses)

        <option value="{{ $courses->course_id }}" id="course_id"> {{ $courses->course_id }}</option>

        @endforeach
     </select> --}}


{{--       <select name="">

        @foreach($selector as $selectors)

        <option value="{{ $selectors->id }}" > {{ $selectors->nivel.''.$selectors->grado.''.$selectors->classroom->pabellon }}</option>

        @endforeach
     </select> --}}


<div id="no-more-tables">
    <table class="col-sm-12 table-bordered table-striped table-condensed cf">
    
    <thead class="">
        <tr>
            <td class="">Alumnos</td>
            <td class="">Notas 1</td>
            <td class="">Notas 2</td>
            <td class="">Notas 3</td>
            <td class="">Notas 4</td>
            <td class="">promedio</td> 
                 

        </tr>
    </thead>
    <tbody class="">

       
        <tr>
            
            <td data-title="Codigo"> 

             <input type="checkbox" name="user_id" checked="" value="{{ $qualification->user_id }}">{{ $qualification->user->name }}   
               <!-- <input type="text" name="enrollment_id" >-->

            </td>
         
            <td data-title="Nota 1" ><input class="form-control" type="text" name="nota1"  id="n1" value="{{ $qualification->nota1}}" onkeyup="calcularUpdate();" 
            style="width: 60px; text-align: center;" /></td>
            <td data-title="Nota 2"><input class="form-control" type="text" name="nota2"  id="n2" value="{{ $qualification->nota2}}" onkeyup="calcularUpdate();" style="width: 60px; text-align: center;" /></td>
            <td data-title="Nota 3"><input class="form-control" type="text" name="nota3"  id="n3" value="{{ $qualification->nota3}}" onkeyup="calcularUpdate();" style="width: 60px; text-align: center;" /></td>
            <td data-title="Nota 4"><input class="form-control" type="text" name="nota4"  id="n4" value="{{ $qualification->nota4}}" onkeyup="calcularUpdate();" style="width: 60px; text-align: center;" /></td>
            <td data-title="Promedio"> <input class="form-control" type="text" name="promedio" id="total"  value="{{ $qualification->promedio}}" style="width: 60px; text-align: center;" /></td>
         
    </tr>
</tbody>
</table>
</div>

 
<input class="btn btn-success waves-effect waves-light m-r-30" type="submit" name="Enviar">

</form>
</div>
</div>
</div>
    </div>
    </div>
    </div>



@endif


@stop