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
<form method="POST" action=" {{ route('qualifications.store')}} ">

    {!! csrf_field() !!}


        <select name="trimester_id">

        @foreach($trimester as $see)

        <option value="{{ $see->id }}" id="trimester_id"> {{ $see->name }}</option>

        @endforeach
     </select>
      <select name="course_id">

        @foreach($course as $courses)

        <option value="{{ $courses->id }}" id="course_id"> {{ $courses->name }}</option>

        @endforeach
     </select>


      <select name="programacion" id="programacion">

        @foreach($selector as $selectors)

        <option value="{{ $selectors->id }}" > {{ $selectors->nivel.''.$selectors->grado.''.$selectors->classroom->pabellon }}</option>

        @endforeach
     </select>





<table class="table-responsive">
    
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

        @foreach($enrollment as $enrollments)
        <tr>
            
            <td class=""> 

             <input type="checkbox" name="enrollment_id[]" value="{{ $enrollments->id }}">{{ $enrollments->user->username }}   
               <!-- <input type="text" name="enrollment_id" >-->

            </td>
            <td class=""> <input type="text" name="nota1" value="0"></td>
             <td class=""> <input type="text" name="nota2" value="0"></td>
             <td class=""> <input type="text" name="nota3" value="0"></td>
                <td class=""> <input type="text" name="nota4" value="0"></td>
             <td class=""> <input type="text" name="promedio" value="0"></td>
           

        </tr>

        @endforeach
    </tbody>

</table>

 
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