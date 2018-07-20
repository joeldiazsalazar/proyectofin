    <!DOCTYPE html>
<html lang="en">

<head>

	<meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
     <!-- Favicon icon -->

     <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png')}}" type="image/x-icon">
     <link rel="icon" href="{{ asset('assets/images/favicon.ico')}}" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/icofont/css/icofont.css')}}">

    <!-- Font Awesome -->
    <link href="{{ asset('assets/css/font-awesome.min.css" rel="stylesheet')}}" type="text/css">

    <!-- simple line icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/simple-line-icons/css/simple-line-icons.css')}}">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">

    <!-- Date Picker css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" />

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css')}}">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css')}}">

    <!--color css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color/color-1.min.css')}}" id="color"/>
 </head>




<body class="sidebar-mini fixed">
    <div class="loader-bg"> 
        <div class="loader-bar">
        </div>
    </div>
    <div class="wrapper">
    <!--   <div class="loader-bg">
    <div class="loader-bar">
    </div>
</div> -->
<!-- Navbar-->
<header class="main-header-top hidden-print">








    <a href="index.html" class="logo"><img class="img-fluid able-logo" src="{{ asset('assets/images/logo.png')}}" alt="Theme-logo"></a>



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
                <!--Notification Menu-->
                    
                <li class="dropdown pc-rheader-submenu message-notification search-toggle">
                    <a href="#!" id="morphsearch-search" class="drop icon-circle txt-white">
                        <i class="icofont icofont-search-alt-1"></i>
                    </a>
                </li>
                <li class="dropdown notification-menu">
                    <a href="#!" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
                        <i class="icon-bell"></i>
                        <span class="badge badge-danger header-badge">9</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="not-head">You have <b class="text-primary">4</b> new notifications.</li>
                        <li class="bell-notification">
                            <a href="javascript:;" class="media">
                                <span class="media-left media-icon">
                                    <img class="img-circle" src="{{ asset('assets/images/avatar-1.png')}}" alt="User Image">
                                </span>
                                <div class="media-body"><span class="block">Lisa sent you a mail</span><span class="text-muted block-time">2min ago</span></div></a>
                            </li>
                            <li class="bell-notification">
                                <a href="javascript:;" class="media">
                                    <span class="media-left media-icon">
                                        <img class="img-circle" src="{{ asset('assets/images/avatar-2.png')}}" alt="User Image">
                                    </span>
                                    <div class="media-body"><span class="block">Server Not Working</span><span class="text-muted block-time">20min ago</span></div></a>
                                </li>
                                <li class="bell-notification">
                                    <a href="javascript:;" class="media"><span class="media-left media-icon">
                                        <img class="img-circle" src="{{ asset('assets/images/avatar-3.png')}}" alt="User Image">
                                    </span>
                                    <div class="media-body"><span class="block">Transaction xyz complete</span><span class="text-muted block-time">3 hours ago</span></div></a>
                                </li>
                                <li class="not-footer">
                                    <a href="#!">See all notifications.</a>
                                </li>
                            </ul>
                        </li>
                        <!-- chat dropdown -->
                        <li class="pc-rheader-submenu ">
                            <a href="#!" class="drop icon-circle displayChatbox">
                                <i class="icon-bubbles"></i>
                                <span class="badge badge-danger header-badge blink">5</span>
                            </a>

                        </li>
                        <!-- window screen -->
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
                                <span><img class="img-circle " src="{{ asset('assets/images/avatar-1.png')}}" style="width:40px;" alt="User Image"></span>
                                <span>{{ Auth::user()->name }}<i class=" icofont icofont-simple-down"></i></span>

                            </a>
                            <ul class="dropdown-menu settings-menu">
                                <li><a href="#!"><i class="icon-settings"></i> Settings</a></li>
                                <li><a href="/users/{{auth()->id()}}/edit"><i class="icon-user"></i> Mi cuenta</a></li>
                                <li><a href="/users/show/{{auth()->id()}}"><i class="icon-user"></i> Mi cuenta en show</a></li>
                                <li><a href="/students/show/{{auth()->id()}}"><i class="icon-user"></i> Mi cuenta en  show student</a></li>
                                <li><a href="message.html"><i class="icon-envelope-open"></i> My Messages</a></li>
                                <li class="p-0">
                                    <div class="dropdown-divider m-0"></div>
                                </li>
                                <li><a href="lock-screen.html"><i class="icon-lock"></i> Lock Screen</a></li>
                                <li>
                                	

                                	<a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="icon-logout"></i>
                                            Logout
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
                    <div id="morphsearch" class="morphsearch">
                        <form class="morphsearch-form">

                            <input class="morphsearch-input" type="search" placeholder="Search..."/>

                            <button class="morphsearch-submit" type="submit">Search</button>

                        </form>
                        <div class="morphsearch-content">
                            <div class="dummy-column">
                                <h2>People</h2>
                                <a class="dummy-media-object" href="#!">
                                    <img class="round" src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&d=identicon&r=G" alt="Sara Soueidan"/>
                                    <h3>Sara Soueidan</h3>
                                </a>

                                <a class="dummy-media-object" href="#!">
                                    <img class="round" src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&d=identicon&r=G" alt="Shaun Dona"/>
                                    <h3>Shaun Dona</h3>
                                </a>
                            </div>
                            <div class="dummy-column">
                                <h2>Popular</h2>
                                <a class="dummy-media-object" href="#!">
                                    <img src="assets/images/avatar-1.png" alt="PagePreloadingEffect"/>
                                    <h3>Page Preloading Effect</h3>
                                </a>

                                <a class="dummy-media-object" href="#!">
                                    <img src="assets/images/avatar-1.png" alt="DraggableDualViewSlideshow"/>
                                    <h3>Draggable Dual-View Slideshow</h3>
                                </a>
                            </div>
                            <div class="dummy-column">
                                <h2>Recent</h2>
                                <a class="dummy-media-object" href="#!">
                                    <img src="assets/images/avatar-1.png" alt="TooltipStylesInspiration"/>
                                    <h3>Tooltip Styles Inspiration</h3>
                                </a>
                                <a class="dummy-media-object" href="#!">
                                    <img src="assets/images/avatar-1.png" alt="NotificationStyles"/>
                                    <h3>Notification Styles Inspiration</h3>
                                </a>
                            </div>
                        </div><!-- /morphsearch-content -->
                        <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
                    </div>
                    <!-- search end -->
                </div>
            </nav>
        </header>
        <!-- Side-Nav-->
        <aside class="main-sidebar hidden-print " >
            <section class="sidebar" id="sidebar-scroll">
                
                <div class="user-panel">
                    <div class="f-left image"><img src="assets/images/avatar-1.png" alt="User Image" class="img-circle"></div>
                    <div class="f-left info">
                    	@guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                        <p>{{ Auth::user()->name }}</p>

                        <p class="designation">UX Designer <i class="icofont icofont-caret-down m-l-5"></i></p>
                    </div>
                </div>
                <!-- sidebar profile Menu-->
                <ul class="nav sidebar-menu extra-profile-list">
                    <li>
                        <a class="waves-effect waves-dark" href="profile.html">
                            <i class="icon-user"></i>
                            <span class="menu-text">View Profile</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li>
                        <a class="waves-effect waves-dark" href="javascript:void(0)">
                            <i class="icon-settings"></i>
                            <span class="menu-text">Settings</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li>
                    
                            	
                            	       <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="waves-effect waves-dark">
                                                     <i class="icon-logout"></i>
                                            Logout
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
                            <i class="icon-speedometer"></i><span> Dashboard</span>
                        </a>                
                    </li>

             


                    <li class="nav-level">Components</li>

                    @if (auth()->check())

                    @if (auth()->user()->hasRoles(['admin']))

                    <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span>Roles</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="waves-effect waves-dark" href="{{ route('roles.create')}}"><i class="icon-arrow-right"></i> Agregar Rol </a></li>
                            <li><a class="waves-effect waves-dark" href="{{ route('roles.index')}}"><i class="icon-arrow-right"></i> Lista Roles </a></li>

                          
                        </ul>
                    </li> 

                    <li class="{{ activeMenu('users*')}} treeview"><a class="waves-effect waves-dark" href="usuarios.html" type="_blank"><i class="icon-briefcase"></i><span>Usuarios</span><i class="icon-arrow-down"></i></a>


                        <ul class="treeview-menu">

                            
                            <li class="{{ activeMenu('users/create')}}"><a class="waves-effect waves-dark" href="{{ route('users.create')}}"><i class="icon-arrow-right"></i> Agregar usuario</a></li>
                            <li class="{{ activeMenu('users/index')}}"><a class="waves-effect waves-dark" href="{{ route('users.index')}}"><i class="icon-arrow-right"></i> Lista Usuarios</a></li>
                            <li><a class="waves-effect waves-dark" href="label-badge.html"><i class="icon-arrow-right"></i>Reporte</a></li>                          
                        </ul>
                    </li>
                     <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span>Pagos</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="waves-effect waves-dark" href="accordion.html"><i class="icon-arrow-right"></i> Registrar TipoPago</a></li>
                            <li><a class="waves-effect waves-dark" href="accordion.html"><i class="icon-arrow-right"></i> Registrar Pago</a></li>
                            <li><a class="waves-effect waves-dark" href="accordion.html"><i class="icon-arrow-right"></i> Registrar Recibo</a></li>
                          
                        </ul>
                    </li>   
                     
                    <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span>Matricula</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="waves-effect waves-dark" href="accordion.html"><i class="icon-arrow-right"></i> Registrar Matricula</a></li>
                            <li><a class="waves-effect waves-dark" href="accordion.html"><i class="icon-arrow-right"></i> Detalle Programacion</a></li>
                        </ul>
                    </li>   

                    <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span>Pabellon</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="waves-effect waves-dark" href="accordion.html"><i class="icon-arrow-right"></i> Registrar Pabellon</a></li>
                            <li><a class="waves-effect waves-dark" href="accordion.html"><i class="icon-arrow-right"></i> Registrar Aula</a></li>
                          
                        </ul>
                    </li>   

                     <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span>Alumnos</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="waves-effect waves-dark" href=""><i class="icon-arrow-right"></i>Registrar Alumno</a></li>
                            <li><a class="waves-effect waves-dark" href=""><i class="icon-arrow-right"></i>Lista Alumno</a></li>
                        </ul>
                    </li>
                    

                     <li class=" treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span>Docente</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="waves-effect waves-dark" href="{{ route('docente.view')}}"><i class="icon-arrow-right"></i>Buscar Docente</a></li>
                            <li><a class="waves-effect waves-dark" href="button.html"><i class="icon-arrow-right"></i>Registrar Cursos</a></li>
                          
                        </ul>
                    </li>

                     <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span>Apoderado</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="waves-effect waves-dark" href="{{ route('apoderado.view')}}"><i class="icon-arrow-right"></i> Buscar Apoderado</a></li>
                          
                        </ul>
                    </li>


                    <li class=" treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span>Horario</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="waves-effect waves-dark" href="{{ route('docente.view')}}"><i class="icon-arrow-right"></i>Registrar Nivel</a></li>
                            <li><a class="waves-effect waves-dark" href="button.html"><i class="icon-arrow-right"></i>Registrar Horario</a></li>
                          
                        </ul>
                    </li>


                    @endif

                     @if (auth()->user()->hasRoles(['alumno']))

                    <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span>Alumnos</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="waves-effect waves-dark" href="accordion.html"><i class="icon-arrow-right"></i> Mis Datos</a></li>
                            <li><a class="waves-effect waves-dark" href="button.html"><i class="icon-arrow-right"></i> Horario</a></li>
                            <li><a class="waves-effect waves-dark" href="label-badge.html"><i class="icon-arrow-right"></i> Notas</a></li>
                            <li><a class="waves-effect waves-dark" href="bootstrap-ui.html"><i class="icon-arrow-right"></i> Cursos</a></li>
                          
                        </ul>
                    </li>

                    @endif

                  @endif

                  


                    <li class="nav-level">More</li>

                    <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-docs"></i><span>Pages</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li class="treeview"><a href="#!"><i class="icon-arrow-right"></i><span> Authentication</span><i class="icon-arrow-down"></i></a>
                                <ul class="treeview-menu">
                                    <li><a class="waves-effect waves-dark" href="register1.html" target="_blank"><i class="icon-arrow-right"></i> Register 1</a></li>
                                    
                                    <li><a class="waves-effect waves-dark" href="login1.html" target="_blank"><i class="icon-arrow-right"></i><span> Login 1</span></a></li>
                                    <li><a class="waves-effect waves-dark" href="forgot-password.html" target="_blank"><i class="icon-arrow-right"></i><span> Forgot Password</span></a></li>
                                    <li><a class="waves-effect waves-dark" href="profile.html"><i class="icon-arrow-right"></i> Profile</a></li>
                                </ul>
                            </li>
                            <li><a class="waves-effect waves-dark" href="lock-screen.html" target="_blank"><i class="icon-arrow-right"></i> Lock Screen</a></li>
                            <li><a class="waves-effect waves-dark" href="404.html" target="_blank"><i class="icon-arrow-right"></i> Error 404</a></li>
                            <li><a class="waves-effect waves-dark" href="sample-page.html"><i class="icon-arrow-right"></i> Sample Page</a></li>
                            <li><a class="waves-effect waves-dark" href="search-result.html"><i class="icon-arrow-right"></i> Search Result</a></li>
                        </ul>
                    </li>


                    <li class="nav-level">Menu Level</li>

                    <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icofont icofont-company"></i><span>Menu Level 1</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li>
                                <a class="waves-effect waves-dark" href="#!">
                                    <i class="icon-arrow-right"></i>
                                    Level Two
                                </a>
                            </li>
                            <li class="treeview">
                                <a class="waves-effect waves-dark" href="#!">
                                    <i class="icon-arrow-right"></i>
                                    <span>Level Two</span>
                                    <i class="icon-arrow-down"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li>
                                        <a class="waves-effect waves-dark" href="#!">
                                            <i class="icon-arrow-right"></i>
                                            Level Three
                                        </a>
                                    </li>
                                    <li>
                                        <a class="waves-effect waves-dark" href="#!">
                                            <i class="icon-arrow-right"></i>
                                            <span>Level Three</span>
                                            <i class="icon-arrow-down"></i>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li>
                                                <a class="waves-effect waves-dark" href="#!">
                                                    <i class="icon-arrow-right"></i>
                                                    Level Four
                                                </a>
                                            </li>
                                            <li>
                                                <a class="waves-effect waves-dark" href="#!">
                                                    <i class="icon-arrow-right"></i>
                                                    Level Four
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                     @endguest
            </section>
        </aside>
        <!-- Sidebar chat start -->
        <div id="sidebar" class="p-fixed header-users showChat">
            <div class="had-container">
                <div class="card card_main header-users-main">
                    <div class="card-content user-box">

                        <div class="md-group-add-on p-20">
                           <span class="md-add-on">
                            <i class="icofont icofont-search-alt-2 chat-search"></i>
                        </span>
                        <div class="md-input-wrapper">
                            <input type="text" class="md-form-control"  name="username" id="search-friends">
                            <label>Search</label>
                        </div>

                    </div>
                    <div class="media friendlist-main">

                        <h6>Friend List</h6>

                    </div>
                    <div class="main-friend-list">
                        <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Josephin Doe</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice"  data-toggle="tooltip" data-placement="left" title="Alice">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Alice</div>
                                <span>1 hour ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="7" data-status="offline" data-username="Michael Scofield" data-toggle="tooltip" data-placement="left" title="Michael Scofield">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-3.png" alt="Generic placeholder image">
                                <div class="live-status bg-danger"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Michael Scofield</div>
                                <span>3 hours ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="5" data-status="online" data-username="Irina Shayk" data-toggle="tooltip" data-placement="left" title="Irina Shayk">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-4.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Irina Shayk</div>
                                <span>1 day ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="6" data-status="offline" data-username="Sara Tancredi" data-toggle="tooltip" data-placement="left" title="Sara Tancredi">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-5.png" alt="Generic placeholder image">
                                <div class="live-status bg-danger"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Sara Tancredi</div>
                                <span>2 days ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Josephin Doe</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Alice</div>
                                <span>1 hour ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Josephin Doe</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Alice</div>
                                <span>1 hour ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip"  data-placement="left" title="Josephin Doe">

                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Josephin Doe</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice"  data-toggle="tooltip" data-placement="left" title="Alice">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Alice</div>
                                <span>1 hour ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Josephin Doe</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Josephin Doe</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Josephin Doe</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Josephin Doe</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="showChat_inner">
        <div class="media chat-inner-header">
            <a class="back_chatBox">
                <i class="icofont icofont-rounded-left"></i> Josephin Doe
            </a>
        </div>
        <div class="media chat-messages">
            <a class="media-left photo-table" href="#!">
                <img class="media-object img-circle m-t-5" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                <div class="live-status bg-success"></div>
            </a>
            <div class="media-body chat-menu-content">
                <div class="">
                    <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                    <p class="chat-time">8:20 a.m.</p>
                </div>
            </div>
        </div>
        <div class="media chat-messages">
            <div class="media-body chat-menu-reply">
                <div class="">
                    <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                    <p class="chat-time">8:20 a.m.</p>
                </div>
            </div>
            <div class="media-right photo-table">
                <a href="#!">
                    <img class="media-object img-circle m-t-5" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                    <div class="live-status bg-success"></div>
                </a>
            </div>
        </div>
        <div class="media chat-reply-box">
            <div class="md-input-wrapper">
                <input type="text" class="md-form-control" id="inputEmail" name="inputEmail" >
                <label>Share your thoughts</label>
                <span class="highlight"></span>
                <span class="bar"></span>  <button type="button" class="chat-send waves-effect waves-light">
                <i class="icofont icofont-location-arrow f-20 "></i>
            </button>

            <button type="button" class="chat-send waves-effect waves-light">
                <i class="icofont icofont-location-arrow f-20 "></i>
            </button>
        </div>

    </div>
</div>
<!-- Sidebar chat end-->
<div class="content-wrapper">

   <!-- Container-fluid starts -->
   <!-- Main content starts -->
   <div class="container-fluid">
    
    <!-- 4-blocks row start -->
    <div class="row m-b-30 dashboard-header">
 

     @yield('contenido')


<!-- Main content ends -->
<!-- Container-fluid ends -->

</div>
</div>

<script src="{{ asset('assets/plugins/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{ asset('assets/plugins/tether/dist/js/tether.min.js')}}"></script>

<!-- Required Fremwork -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- waves effects.js -->
<script src="{{ asset('assets/plugins/Waves/waves.min.js')}}"></script>

<!-- Scrollbar JS-->
<script src="{{ asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<script src="{{ asset('assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js')}}"></script>

<!--classic JS-->
<script src="{{ asset('assets/plugins/classie/classie.js')}}"></script>

<!-- notification -->
<script src="{{ asset('assets/plugins/notification/js/bootstrap-growl.min.js')}}"></script>

<!-- pie chart.js -->
<script type="text/javascript" src="{{ asset('assets/plugins/bower-jquery-easyPieChart/dist/jquery.easypiechart.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/pages/counter.js')}}"></script>

<!-- Date picker.js -->
<script type="text/javascript" src="{{ asset('assets/plugins/moment/moment.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>

<!-- custom js -->
<script type="text/javascript" src="{{ asset('assets/js/main.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/pages/profile.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/pages/elements.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/menu.min.js')}}"></script>
 
</body>

</html>
