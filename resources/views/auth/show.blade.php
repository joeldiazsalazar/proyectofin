    @extends('layouts.admin')

    @section('contenido')

    <div class="container-fluid">
        <div class="row">
            <div class="main-header">
                <h4>Perfil</h4>
                <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                    <li class="breadcrumb-item"><a href="{{ route('cpanel')}}"><i class="icofont icofont-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('cpanel')}}">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('users.show',$users->id)}}">Perfil</a>
                    </li>
                </ol>
            </div>
        </div>
        <!-- Header end -->
        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <div class="card faq-left">
                    <div class="social-profile">
                        <img class="img-fluid" src="{{ Storage::url($users->avatar) }}" alt="">
                        
                    </div>
                    <div class="card-block">
                        <h4 class="f-18 f-normal m-b-10 txt-primary">{{ $users->name}}</h4>
                        
                        
                        <ul>
                            <li class="faq-contact-card">
                                <i class="icofont icofont-world"></i>
                                <a href="http://phoenixcoded.com">www.phoenixcoded.com</a>
                            </li>
                        </ul>


                    </div>
                </div>
                <!-- end of card-block -->
                
                <!-- end of card -->
            </div>
            <!-- end of col-lg-3 -->

            <!-- start col-lg-9 -->
            <div class="col-xl-9 col-lg-8">
                <!-- Nav tabs -->
                <div class="tab-header ">
                    <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Accesos</a>
                            <div class="slide"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#project" role="tab">Datos personales</a>
                            <div class="slide"></div>
                        </li>
                      
                    </ul>
                </div>
                <!-- end of tab-header -->

                <div class="tab-content">
                    <div class="tab-pane active" id="personal" role="tabpanel">
                        <div class="card">
                            <div class="card-header"><h5 class="card-header-text"></h5>


                                @can('edit', $users)

                                <a class="btn btn-primary waves-effect waves-light f-left" href="{{ route('users.edit', $users->id) }}"><i  class="icofont icofont-edit"></i>Cambiar Contraseña</a>

                                @endcan

                            </div>
                            <div class="card-block">
                                <div class="view-info">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="general-info">
                                                <div class="row">
                                                    <div class="col-lg-12 col-xl-6">
                                                        <table class="table m-0">
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">Nombre</th>
                                                                    <td>{{ $users->name}}</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- end of table col-lg-6 -->

                                                    <div class="col-lg-12 col-xl-6">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">Codigo</th>
                                                                    <td><a href="#!"> {{ $users->username}}</a></td>
                                                                </tr>
                                                                

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- end of table col-lg-6 -->
                                                </div>
                                                <!-- end of row -->
                                            </div>
                                            <!-- end of general info -->
                                        </div>
                                        <!-- end of col-lg-12 -->
                                    </div>
                                    <!-- end of row -->
                                </div>
                                <!-- end of view-info -->


                                <!-- end of view-info -->
                            </div>
                            <!-- end of card-block -->
                        </div>
                        <!-- end of card-->

                    </div>
                    <!-- end of tab-pane -->
                    <!-- end of about us tab-pane -->

                    <!-- start tab-pane of project tab -->
                    <div class="tab-pane" id="project" role="tabpanel">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-header-text">Datos personales</h5>

                            </div>
                            <!-- end of card-header  -->
                            <div class="row">
                                <div class="col-lg-12 col-xl-6">
                                    <table class="table m-0">
                                        <tbody>
                                            <tr>
                                            @foreach($users->student as $students)                                 
                                            <th scope="row">Full Name</th>
                                            <td>
                                                    {{ $students->nombres }}
                                            </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">Apellido Paterno</th>

                                                <td>{{ $students->apellidoPaterno }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Apellido Materno</th>
                                                <td>{{ $students->apellidoMaterno }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Email</th>
                                                <td>{{ $students->email }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Dni</th>
                                                <td>{{ $students->dni }}</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <table class="table">
                                        <tbody>

                                            <tr>
                                                <th scope="row">Sexo</th>
                                                <td>{{ $students->sexo }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Fecha nacimiento</th>
                                                <td>{{ $students->fecha_nacimiento }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Distrito</th>
                                                <td>{{ $students->distrito }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Departamento</th>
                                                <td>{{ $students->departamento }}</td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                           

                           <div class="row">
                               
                                    <div class="col-lg-12 col-xl-6">
                                    <table class="table m-0">
                                        <tbody>
                                            <tr>
                                            @foreach($users->attorney as $attorneys)                                 
                                            <th scope="row">Full Name</th>
                                            <td>
                                                    {{ $attorneys->nombres }}
                                            </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">Apellido Paterno</th>

                                                <td>{{ $attorneys->apellidoPaterno }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Apellido Materno</th>
                                                <td>{{ $attorneys->apellidoMaterno }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Dni</th>
                                                <td>{{ $attorneys->dni }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Sexo</th>
                                                <td>{{ $attorneys->sexo }}</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <table class="table">
                                        <tbody>

                                            <tr>
                                                <th scope="row">Estado Civil</th>
                                                <td>{{ $attorneys->est_civil }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Direccion</th>
                                                <td>{{ $attorneys->direccion }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Celular</th>
                                                <td>{{ $attorneys->celular }}</td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>


                           </div>
                        </div>
                    </div>
                    <!-- end of main tab content -->
                </div>
            </div>

        </div>
        @stop