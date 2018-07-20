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
                            <h4>Control de Matricula</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="{{ route('cpanel')}}"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('enrollments.create')}}">Agregar Matricula</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
                </div>
                    <div class="row">
                    <!-- Form Control starts -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header"><h5 class="card-header-text">Registro de Matriculas</h5>
                                <div class="f-right">
                                    <a href="" data-toggle="modal" data-target="#input-type-Modal"><i class="icofont icofont-code-alt"></i></a>
                                </div>
                            </div>

            <div class="card-block">
            <form method="POST" action=" {{ route('enrollments.store')}} ">

                {!! csrf_field() !!}

            <div class="form-group col-md-6">
                <label for="student_id" class="form-control-label">Alumno</label>
                <select name="student_id" id="schearEnrollmentStudent">
                @foreach($student as $students)
                <option value="{{ $students->id }}"> {{ $students->nombres}}</option>
                @endforeach

            </select>

                {!! $errors->first('student_id','<span class=error>:message</span>')!!}
            </div>

            <div class="form-group col-md-6">
                <label for="user_id" class="form-control-label">User</label>
                <select name="user_id" id="schearEnrollmentUser">
                @foreach($user as $users)
                <option value="{{ $users->id }}"> {{ $users->username}}</option>
                @endforeach

                </select>

                {!! $errors->first('user_id','<span class=error>:message</span>')!!}
            </div>
            <div class="form-group col-md-6">
                <label for="programming_id" class="form-control-label">Nivel</label>
                <select name="programming_id" id="mibuscador">
                @foreach($programming as $programmings)
                <option value="{{ $programmings->id }}"> {{ $programmings->nivel . ' - ' .$programmings->grado . '- ' .$programmings->classroom->pabellon}}</option>
                @endforeach

                </select>

                {!! $errors->first('programming_id','<span class=error>:message</span>')!!}
            </div>
            <div class="form-group col-md-6">
                <label for="monto" class="form-control-label">Monto</label>
                    <input type="text" name="monto" class="form-control">

                {!! $errors->first('monto','<span class=error>:message</span>')!!}
            </div>

            <div class="form-group col-md-12">
                <label for="estado" class="form-control-label">estado</label>
                
            <br>
                    <label class="radio-inline"><input type="radio" name="estado" value="activo">Cancelado</label>
                    <label class="radio-inline"><input type="radio" name="estado" value="inactivo">Pendiente</label>  

                {!! $errors->first('estado','<span class=error>:message</span>')!!}
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