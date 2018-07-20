<!DOCTYPE html>
<html lang="es">

<head>

	<meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PROYECTO</title>

     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
     <!-- Favicon icon -->

    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/intranet.png')}}"/>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/icofont/css/icofont.css')}}">

     <!-- Google font-->
    <link href="{{ asset('assets/css/font-awesome.min.css" rel="stylesheet')}}" type="text/css">

     <!-- iconfont -->
     <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/icofont/css/icofont.css') }}">

     <!-- simple line icon -->
     <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/simple-line-icons/css/simple-line-icons.css')}}">

     <!-- Required Fremwork -->
     <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">

     <!-- Date Picker css -->
     <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" />

     <!-- Weather css -->
     <link href="{{ asset('assets/css/svg-weather.css')}}" rel="stylesheet">

     <!-- Echart js -->
     <script src="{{ asset('assets/plugins/charts/echarts/js/echarts-all.js')}}"></script>

     <!-- Style.css -->
     <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css')}}">

     <!-- Responsive.css-->
     <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css')}}">

     <!--color css-->
     <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color/color-1.min.css')}}" id="color"/>

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

     <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />


     <link href="{{ asset('css/mdtimepicker.css')}}" rel="stylesheet" type="text/css">


     <link rel="stylesheet" type="text/css" href="{{ asset('css/table.css')}}">

     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.2.7/css/select.dataTables.min.css">

     <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
     
 </head>

<body class="sidebar-mini fixed">
    <div class="loader-bg"> 
        <div class="loader-bar">
        </div>
    </div>
    <div class="wrapper">

<header class="main-header-top hidden-print">








    <a href="{{ route('cpanel')}}" class="logo">PROYECTOS</a>



<?php 
        function activeMenu($url){
            return request()->is($url) ? 'active' : '';
        }

        ?>

    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button--><a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
        <!-- Navbar Right Menu-->
        <div class="navbar-custom-menu f-right">
            
            <ul class="top-nav">
                        <li class="pc-rheader-submenu">
                            <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                                <i class="icon-size-fullscreen"></i>
                            </a>

                        </li>
                        <!-- User Menu-->
                        <li class="dropdown">

                        	@guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                        	@else

                            <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                                <span><img class="img-circle " src="{{ Storage::url(Auth::user()->avatar)}}" style="width:40px;" alt="User Image"></span>
                                <span>{{ Auth::user()->name }}<i class=" icofont icofont-simple-down"></i></span>

                            </a>
                            <ul class="dropdown-menu settings-menu">
                              
                                <li><a href="/users/show/{{auth()->id()}}"><i class="icon-user"></i> Mi cuenta</a></li>
                                
                               
                                <li class="p-0">
                                    <div class="dropdown-divider m-0"></div>
                                </li>
                               
                                <li>
                                	

                                	<a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="icon-logout"></i>
                                            Cerrar Sesion
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                </li>

                            </ul>
                            @endguest
                        </li>
                    </ul>

                    <!-- search -->
                 
                    <!-- search end -->
                </div>
            </nav>
        </header>
        <!-- Side-Nav-->
        <aside class="main-sidebar hidden-print " >
            <section class="sidebar" id="sidebar-scroll">
                
                <div class="user-panel">
                    <div class="f-left image"><img src="{{ Storage::url(Auth::user()->avatar)}}" alt="User Image" class="img-circle"></div>
                    <div class="f-left info">
                    	@guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                        <p>{{ Auth::user()->name }}</p>

                        <p class="designation">{{ Auth::user()->role->display_name }} <i class="icofont icofont-caret-down m-l-5"></i></p>
                    </div>
                </div>
                <!-- sidebar profile Menu-->
                <ul class="nav sidebar-menu extra-profile-list">
                    <li>
                        <a class="waves-effect waves-dark" href="/users/show/{{auth()->id()}}">
                            <i class="icon-user"></i>
                            <span class="menu-text">Mi Perfil</span>
                            <span class="selected"></span>
                        </a>
                    </li>
              
                    <li>
                    
                            	
                            	       <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="waves-effect waves-dark">
                                                     <i class="icon-logout"></i>
                                            Cerrar Sesion
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>

                     
                    </li>
                </ul>
                <!-- Sidebar Menu-->
                <ul class="sidebar-menu">
                    <li class="nav-level">Navigation</li>
                    <li class=" {{ activeMenu('cpanel')}} treeview">
                        <a class="waves-effect waves-dark" href="{{ route('cpanel')}}">
                            <i class="icon-speedometer"></i><span> Novedades</span>
                        </a>                
                    </li>

                    <li class="nav-level">Secciones</li>

                    @if (auth()->check())

                    @if (auth()->user()->hasRoles(['admin']))

                    <li class="{{ activeMenu('roles*')}} treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span>Roles</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="waves-effect waves-dark" href="{{ route('roles.index')}}"><i class="icon-arrow-right"></i> Lista Roles </a></li>

                          
                        </ul>
                    </li> 

                    <li class="{{ activeMenu('users*')}} treeview"><a class="waves-effect waves-dark" href="" type="_blank"><i class="icon-briefcase"></i><span>Seguridad</span><i class="icon-arrow-down"></i></a>


                        <ul class="treeview-menu">

                            
                            {{-- <li class="{{ activeMenu('users/create')}}"><a class="waves-effect waves-dark" href="{{ route('users.create')}}"><i class="icon-arrow-right"></i> Agregar usuario</a></li> --}}
                            <li class="{{ activeMenu('users/index')}}"><a class="waves-effect waves-dark" href="{{ route('users.index')}}"><i class="icon-arrow-right"></i> Lista Usuarios</a></li>
                            <li><a class="waves-effect waves-dark" href="{{ route('statistics.index')}}"><i class="icon-arrow-right"></i> Estadisticas</a></li>
                            <li><a class="waves-effect waves-dark" href="{{ route('reports.index')}}"><i class="icon-arrow-right"></i> Informes</a></li>                          
                        </ul>
                    </li>

                     <li class="{{ activeMenu('students*')}} treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span>Alumnos</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            
                            <li><a class="waves-effect waves-dark" href="{{ route('students.index')  }}"><i class="icon-arrow-right"></i>Lista Alumno</a></li>
                        </ul>
                    </li>

                     <li class="{{ activeMenu('teachers*')}} treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span>Docente</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="waves-effect waves-dark" href="{{ route('teachers.index')  }}"><i class="icon-arrow-right"></i>Lista docentes</a></li>
                            <li><a class="waves-effect waves-dark" href="{{ route('courses.index')  }}"><i class="icon-arrow-right"></i>Lista Cursos</a></li>
                          
                        </ul>
                    </li>

                     <li class="{{ activeMenu('attorneys*')}} treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span>Apoderado</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="waves-effect waves-dark" href="{{ route('attorneys.index')}}"><i class="icon-arrow-right"></i> Lista apoderados</a></li>
                          
                        </ul>
                    </li>
                    <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span>Trimestre</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="waves-effect waves-dark" href="{{ route('trimesters.index')}}"><i class="icon-arrow-right"></i>Listado Trimestre</a></li>
                            <li><a class="waves-effect waves-dark" href="{{ route('qualifications.index')}}"><i class="icon-arrow-right"></i>Registrar Notas</a></li>
                            <li><a class="waves-effect waves-dark" href="{{ route('assistances.index')}}"><i class="icon-arrow-right"></i>Registrar Asistencia</a></li>
                          
                        </ul>
                    </li>               
                        
                    <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span>Matricula</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="waves-effect waves-dark" href="{{ route('enrollments.index') }}"><i class="icon-arrow-right"></i> Registrar Matricula</a></li>
                            <li><a class="waves-effect waves-dark" href="{{ route('programmings.index')}}"><i class="icon-arrow-right"></i> Programacion</a></li>
                            <li><a class="waves-effect waves-dark" href="{{ route('details.index')}}"><i class="icon-arrow-right"></i> Detalle Programacion</a></li>
                        </ul>
                    </li>   

                    <li class="{{ activeMenu('classrooms*')}} treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span>Pabellon</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="waves-effect waves-dark" href="{{ route('classrooms.index') }}"><i class="icon-arrow-right"></i> Registrar Aula</a></li>
                          
                        </ul>
                    </li>   


                    @endif

                     @if (auth()->user()->hasRoles(['alumno']))

                    <li class="{{ activeMenu('students/detail*')}} treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span>Alumnos</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="waves-effect waves-dark" href="/students/detail/show/{{ auth()->id()}}"><i class="icon-arrow-right"></i> Mis Datos</a></li>
                            <li><a class="waves-effect waves-dark" href="/students/detail/calendar/programming/{{ auth()->id()}}"><i class="icon-arrow-right"></i> Horario</a></li>
                            <li><a class="waves-effect waves-dark" href="/students/detail/course/note/{{ auth()->id()}}"><i class="icon-arrow-right"></i> Notas</a></li>

                            <li><a class="waves-effect waves-dark" href="/students/detail/course/assistance/{{ auth()->id() }}"><i class="icon-arrow-right"></i> Historial Asistencia</a></li>

                        </ul>
                    </li>

                     <li class="{{ activeMenu('students/detail*')}} treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span>Pagos</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="waves-effect waves-dark" href="/students/payment/show/{{ auth()->id()}}"><i class="icon-arrow-right"></i> Mi pagos</a></li>
                            <li><a class="waves-effect waves-dark" href="/students/payment/detail/{{ auth()->id()}}"><i class="icon-arrow-right"></i> Historial Pagos</a></li>
                        </ul>
                    </li>
                    @endif

                    @if (auth()->user()->hasRoles(['apoderado']))

                   
                    
                    <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span>Apoderado</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            
                            <li><a class="waves-effect waves-dark" href="/attorneys/students/{{ auth()->id()}}"><i class="icon-arrow-right"></i> Mis hijos</a></li>
                          
                        </ul>
                    </li>

                    @endif



                     @if (auth()->user()->hasRoles(['docente']))

                    <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span>Docente</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">

                            <li><a class="waves-effect waves-dark" href="/teacher/assistance/{{ auth()->id()}}"><i class="icon-arrow-right"></i> Tomar Asistencia </a></li>
                            <li><a class="waves-effect waves-dark" href="/teacher/qualification/{{ auth()->id()}}"><i class="icon-arrow-right"></i> Registrar Notas </a></li>

                        </ul>
                    </li>

                    @endif


                    @if (auth()->user()->hasRoles(['rrhh']))

                    <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span>POSTULANTES</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">

                            <li><a class="waves-effect waves-dark" href="{{ route('postulants.index') }}"><i class="icon-arrow-right"></i>Registro</a></li>
                            <li><a class="waves-effect waves-dark" href="{{ route('reports.postulant')}}"><i class="icon-arrow-right"></i>Reportes</a></li>

                        </ul>
                    </li>

                    @endif

                  @endif


                </ul>
                     @endguest
            </section>
        </aside>
        <!-- Sidebar chat start -->
        
<!-- Sidebar chat end-->
<div class="content-wrapper">

   <!-- Container-fluid starts -->
   <!-- Main content starts -->
   <div class="container-fluid">
    
    <!-- 4-blocks row start -->
    <div class="row m-b-30 dashboard-header">
 

     @yield('contenido')

</div>
</div>
</div>
</div>

    
      
       
     
      <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>

      
      <script type="text/javascript" src="{{ asset('js/pagos.js')}}" ></script>
      <script type="text/javascript">
          function calcularUpdate() { 
              n1 = parseFloat(document.getElementById('n1').value); 
              n2 = parseFloat(document.getElementById('n2').value); 
              n3 = parseFloat(document.getElementById('n3').value); 
              n4 = parseFloat(document.getElementById('n4').value); 
              var rest =(n1+n2+n3+n4)/4;
                if(!isNaN(rest))
                document.getElementById('total').value = rest.toFixed(2);
            }

            function actualizarPago() { 
              pagos = (document.getElementById('pago').value); 
              precioPago = (document.getElementById('precioPago').value); 
              // n3 = parseFloat(document.getElementById('n3').value); 
              // n4 = parseFloat(document.getElementById('n4').value); 
              var rest =(pagos-precioPago);


              var estatus = "cancelado";
              var estatusdef  = "pendiente";
              var restdefaul = "0";

              var pgdeuda = document.getElementById('pagodeuda').value;

                  if ( rest == '0') {
                    $("#pagoestado").addClass('aaaa');
                    document.getElementById('pagodeuda').value = rest;
                    document.getElementById('pagoestado').value = estatus;
                  }else if( rest > 0){
                    $("#pagoestado").removeClass('aaaa');
                    document.getElementById('pagodeuda').value = restdefaul;
                    document.getElementById('devolucion').value = rest;
                    document.getElementById('pagoestado').value = estatus;
                    
                  }else if( pagos !== null && pagos !== ''){
                    $("#pagoestado").removeClass('aaaa');
                    document.getElementById('pagodeuda').value = precioPago;
                    document.getElementById('pagoestado').value = estatusdef;
                    document.getElementById('devolucion').value = restdefaul;
                  }  
                
                
                        
                    
                // document.getElementById('pagodeuda').value = rest.toFixed(2);


            } 
            
            $('#cardnumber')
              .keypress(function (event) {
                // El código del carácter 0 es 48
                // El código del carácter 9 es 57
                if (event.which < 48 || event.which > 57 || this.value.length === 8) {
                  return false;
                }
              });
                $('#numberCel')
              .keypress(function (event) {
                // El código del carácter 0 es 48
                // El código del carácter 9 es 57
                if (event.which < 48 || event.which > 57 || this.value.length === 9) {
                  return false;
                }
              });
                 $('#numberHome')
              .keypress(function (event) {
                // El código del carácter 0 es 48
                // El código del carácter 9 es 57
                if (event.which < 48 || event.which > 57 || this.value.length === 7) {
                  return false;
                }
              });

                 $('#numberCorp')
              .keypress(function (event) {
                // El código del carácter 0 es 48
                // El código del carácter 9 es 57
                if (event.which < 48 || event.which > 57 || this.value.length === 9) {
                  return false;
                }
              });

                $('#numberSueld')
              .keypress(function (event) {
                // El código del carácter 0 es 48
                // El código del carácter 9 es 57
                if (event.which < 48 || event.which > 57 || this.value.length === 10) {
                  return false;
                }
              });

      </script>

      <script type="text/javascript" src="{{ asset('js/validate.js')}}" ></script>
     


      <script src="{{ asset('js/mdtimepicker.js')}}"></script>
                <script>
                  $(document).ready(function(){
                    $('#timepicker').mdtimepicker(); //Initializes the time picker
                     $('#timepicker1').mdtimepicker(); //Initializes the time picker
                     $('#timepicker3').mdtimepicker(); //Initializes the time picker

                  });
                </script>


      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

       

        @include('sweet::alert')

      <script type="text/javascript">

        function copiar()
        {
            document.getElementById("vacante").value=document.getElementById("capacidad").value;
        }

        function copyuser(){
            document.getElementById("name").value=document.getElementById("nombres").value;
        }

        function  copyteacher(){
            
            document.getElementById("name").value=document.getElementById("nombres").value;
        }

        function copyatt(){
            document.getElementById("name").value=document.getElementById("nombres").value;
        }

        function copymonto(){
            document.getElementById("adeuda").value=document.getElementById("monto").value;
        }

      </script>
      

        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

        <script type="text/javascript">
                    $(document).ready(function(){

                    $('#mibuscador').select2();

                    $('#schearProgramming').select2();

                    $('#schearDetail').select2();

                    $('#schearCourse').select2();

                     $('#schearEnrollmentUser').select2();

                      $('#schearEnrollmentStudent').select2();

                       $('#schearProgrammingClass').select2();

                       
                       $('#selectorPost').select2();

                     

            });
        </script>





      <script src="{{asset('assets/plugins/tether/dist/js/tether.min.js')}}"></script>

      <!-- Required Fremwork -->
      <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

     
      <!-- waves effects.js -->
      <script src="{{asset('assets/plugins/Waves/waves.min.js')}}"></script>

      <!-- Scrollbar JS-->
      <script src="{{asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
      <script src="{{asset('assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js')}}"></script>

      <!--classic JS-->
      <script src="{{asset('assets/plugins/classie/classie.js')}}"></script>

      <!-- notification -->
      <script src="{{asset('assets/plugins/notification/js/bootstrap-growl.min.js')}}"></script>

      <script src="{{asset('assets/plugins/waypoints/jquery.waypoints.min.js')}}"></script>
      <script src="{{asset('assets/plugins/countdown/js/jquery.counterup.js')}}"></script>

        <!-- custom js -->




      <!-- custom js -->
      <script type="text/javascript">
        
        'use strict';

    $(document).ready(function() {

    //sidebar dropdown open
    $(".designation").on('click', function() {
        $(".extra-profile-list").slideToggle();
    });

    /*chatbar js start*/
    /*chat box scroll*/
    var a = $(window).height() - 50;
    $(".main-friend-list ").slimScroll({
        height: a,
        allowPageScroll: false,
        wheelStep: 5,
        color: '#1b8bf9'
    });

    // search
    $("#search-friends").on("keyup", function() {

        var g = $(this).val().toLowerCase();
        $(".friendlist-box .media-body .friend-header").each(function() {

            var s = $(this).text().toLowerCase();
            $(this).closest('.friendlist-box')[s.indexOf(g) !== -1 ? 'show' : 'hide']();
        });
    });

    // open chat box
    $('.displayChatbox').on('click', function() {

        var options = {
            direction: 'right'
        };
        $('.showChat').toggle('slide', options, 500);
    });
    //open friend chat
    $('.friendlist-box').on('click', function() {


        var options = {
            direction: 'right'
        };
        $('.showChat_inner').toggle('slide', options, 500);
    });
    //back to main chatbar
    $('.back_chatBox').on('click', function() {
        var options = {
            direction: 'right'
        };
        $('.showChat_inner').toggle('slide', options, 500);
        $('.showChat').css('display', 'block');
    });
    /*chatbar js start*/

    $("[data-toggle='utility-menu']").on('click', function() {
        $(this).next().slideToggle(300);
        $(this).toggleClass('open');
        return false;
    });

});



/*Show tooltip*/
$('[data-toggle="tooltip"]').tooltip();
$('[data-toggle="popover"]').popover({
    animation: true,
    delay: {
        show: 100,
        hide: 100
    }
});


// wave effect js

Waves.init();
Waves.attach('.flat-buttons', ['waves-button']);
Waves.attach('.float-buttons', ['waves-button', 'waves-float']);
Waves.attach('.float-button-light', ['waves-button', 'waves-float', 'waves-light']);
Waves.attach('.flat-buttons', ['waves-button', 'waves-float', 'waves-light', 'flat-buttons']);

// side button js code start
$.pushMenu = {
    activate: function(toggleBtn) {

        //Enable sidebar toggle
        $(toggleBtn).on('click', function(e) {
            e.preventDefault();

            //Enable sidebar push menu
            if ($(window).width() > (767)) {
                if ($("body").hasClass('sidebar-collapse')) {
                    $("body").removeClass('sidebar-collapse').trigger('expanded.pushMenu');
                } else {
                    $("body").addClass('sidebar-collapse').trigger('collapsed.pushMenu');
                }
            }
            //Handle sidebar push menu for small screens
            else {
                if ($("body").hasClass('sidebar-open')) {
                    $("body").removeClass('sidebar-open').removeClass('sidebar-collapse').trigger('collapsed.pushMenu');
                } else {
                    $("body").addClass('sidebar-open').trigger('expanded.pushMenu');
                }
            }
            if ($('body').hasClass('fixed') && $('body').hasClass('sidebar-mini') && $('body').hasClass('sidebar-collapse')) {
                $('.sidebar').css("overflow", "visible");
                $('.main-sidebar').find(".slimScrollDiv").css("overflow", "visible");
            }
            if ($('body').hasClass('only-sidebar')) {
                $('.sidebar').css("overflow", "visible");
                $('.main-sidebar').find(".slimScrollDiv").css("overflow", "visible");
            };
        });

        $(".content-wrapper").on('click', function() {
            //Enable hide menu when clicking on the content-wrapper on small screens
            if ($(window).width() <= (767) && $("body").hasClass("sidebar-open")) {
                $("body").removeClass('sidebar-open');
            }
        });
    }
};
$.tree = function(menu) {
    var _this = this;
    var animationSpeed = 200;
    $(document).on('click', menu + ' li a', function(e) {
        //Get the clicked link and the next element
        var $this = $(this);
        var checkElement = $this.next();

        //Check if the next element is a menu and is visible
        if ((checkElement.is('.treeview-menu')) && (checkElement.is(':visible'))) {
            //Close the menu
            checkElement.slideUp(animationSpeed, function() {
                checkElement.removeClass('menu-open');
                //Fix the layout in case the sidebar stretches over the height of the window
                //_this.layout.fix();
            });
            checkElement.parent("li").removeClass("active");
        }
        //If the menu is not visible
        else if ((checkElement.is('.treeview-menu')) && (!checkElement.is(':visible'))) {
            //Get the parent menu
            var parent = $this.parents('ul').first();
            //Close all open menus within the parent
            var ul = parent.find('ul:visible').slideUp(animationSpeed);
            //Remove the menu-open class from the parent
            ul.removeClass('menu-open');
            //Get the parent li
            var parent_li = $this.parent("li");

            //Open the target menu and add the menu-open class
            checkElement.slideDown(animationSpeed, function() {
                //Add the class active to the parent li
                checkElement.addClass('menu-open');
                parent.find('li.active').removeClass('active');
                parent_li.addClass('active');
            });
        }
        //if this isn't a link, prevent the page from being redirected
        if (checkElement.is('.treeview-menu')) {
            e.preventDefault();
        }
    });
};
// Activate sidenav treemenu
$.tree('.sidebar');
$.pushMenu.activate("[data-toggle='offcanvas']");
// side button js code end


/* Search header start */

/* Search header end */

// toggle full screen
function toggleFullScreen() {
    if (!document.fullscreenElement && // alternative standard method
        !document.mozFullScreenElement && !document.webkitFullscreenElement) { // current working methods
        if (document.documentElement.requestFullscreen) {
            document.documentElement.requestFullscreen();
        } else if (document.documentElement.mozRequestFullScreen) {
            document.documentElement.mozRequestFullScreen();
        } else if (document.documentElement.webkitRequestFullscreen) {
            document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
        }
    } else {
        if (document.cancelFullScreen) {
            document.cancelFullScreen();
        } else if (document.mozCancelFullScreen) {
            document.mozCancelFullScreen();
        } else if (document.webkitCancelFullScreen) {
            document.webkitCancelFullScreen();
        }
    }
}

// viral
// chat-sidebar
var ost = 0;
$(window).scroll(function() {
    var $window = $(window);
    var windowHeight = $(window).innerHeight();
    if ($window.width() <= 767) {
        var cOst = $(this).scrollTop();
        if (cOst == 0) {
            $('.showChat').removeClass('top-showChat').addClass('fix-showChat');
        } else if (cOst > ost) {
            $('.showChat').removeClass('fix-showChat').addClass('top-showChat');
        }
        ost = cOst;
    }
});

// Start [ Menu-bottom ]
$(document).ready(function() {
    $(".dropup-mega, .dropup").hover(function() {
        var dropdownMenu = $(this).children(".dropdown-menu");
        $(this).toggleClass("open");
    });
});
// End [ Menu ]



        </script>
      <script type="text/javascript" src="{{asset('assets/pages/dashboard.js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/pages/profile.js')}}"></script>
      <script type="text/javascript" src="{{asset('assets/pages/elements.js')}}"></script>
      <script src="{{asset('assets/js/menu.min.js')}}"></script>

      <script>
        var $window = $(window);
        var nav = $('.fixed-button');
        $window.scroll(function(){
            if ($window.scrollTop() >= 200) {
             nav.addClass('active');
         }
         else {
             nav.removeClass('active');
         }
     });
    </script>

    
    <script type="text/javascript"
    >
    	$(window).on('load', function() {
    var $window = $(window);
    $('.loader-bar').animate({ width:$window.width()},2000);
    setTimeout(function() {
        while ($('.loader-bar').width() == $window.width()) {
            removeloader();
            break;
        }
    }, 2500);

    //Welcome Message (not for login page)
    function notify(message, type) {
        $.growl({
            message: message
        }, {
            type: type,
            allow_dismiss: false,
            label: 'Cancel',
            className: 'btn-xs btn-inverse',
            placement: {
                from: 'bottom',
                align: 'right'
            },
            delay: 2500,
            animate: {
                enter: 'animated fadeInRight',
                exit: 'animated fadeOutRight'
            },
            offset: {
                x: 30,
                y: 30
            }
        });
    };

 // copiar javascript
    
    $('.loader-bg').fadeOut('slow');

});
    </script>





  



</body>

</html>
