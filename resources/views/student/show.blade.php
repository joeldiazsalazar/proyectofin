    @extends('layouts.admin')

    @section('contenido')

    <div class="container-fluid">
                <div class="row">
                    <div class="main-header">
                        <h4>Profile</h4>
                        <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icofont icofont-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Extras</a>
                            </li>
                            <li class="breadcrumb-item"><a href="profile.html">Profile</a>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- Header end -->
                <div class="row">
                    <div class="col-xl-3 col-lg-4">
                        <div class="card faq-left">
                            <div class="social-profile">
                                <img class="img-fluid" src="{{ asset('assets/images/social/profile.jpg')}}" alt="">
                                <div class="profile-hvr m-t-15">
                                    <i class="icofont icofont-ui-edit p-r-10 c-pointer"></i>
                                    <i class="icofont icofont-ui-delete c-pointer"></i>
                                </div>
                            </div>
                            <div class="card-block">
                                <h4 class="f-18 f-normal m-b-10 txt-primary">{{ $students->name}}</h4>
                                <h5 class="f-14">Software Engineer</h5>
                                <p class="m-b-15">Lorem ipsum dolor sit amet, consectet
                                    ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte</p>
                                <ul>
                                    <li class="faq-contact-card">
                                        <i class="icofont icofont-telephone"></i>
                                        +(1234) - 5678910
                                    </li>
                                    <li class="faq-contact-card">
                                        <i class="icofont icofont-world"></i>
                                        <a href="http://phoenixcoded.com">www.phoenixcoded.com</a>
                                    </li>
                                    <li class="faq-contact-card">
                                        <i class="icofont icofont-email"></i>
                                        <a href="mailto:joe@example.com">demo@phoenixcoded.com</a>
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
                        <div class="tab-header">
                            <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Accesos</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#project" role="tab">Datos personales</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#questions" role="tab">Mis cursos</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#members" role="tab">Mis horarios</a>
                                    <div class="slide"></div>
                                </li>
                            </ul>
                        </div>
                        <!-- end of tab-header -->

                        <div class="tab-content">
                            <div class="tab-pane active" id="personal" role="tabpanel">
                                <div class="card">
                                    <div class="card-header"><h5 class="card-header-text">About Me</h5>


                                       {{--  @can('edit', $users)
                                 
                                            <a class="btn btn-primary waves-effect waves-light f-right" href="{{ route('users.edit', $users->id) }}"><i  class="icofont icofont-edit"></i>Editar</a>
                                        
    									@endcan --}}

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
                                                                        <td>{{ $students->nombres}}</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                          

                                                            <div class="col-lg-12 col-xl-6">
                                                                <table class="table">
                                                                    <tbody>
                                                                    <tr>
                                                                        <th scope="row">Email</th>
                                                                        <td><a href="#!"> {{ $students->dni}}</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Avatar</th>
                                                                        <td>(0123) - 4567891</td>
                                                                    </tr>
                                                                    
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                          
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
                                                                    
                                                                </table>
                                                            </div>
                                    <!-- end of row -->
                                </div>
                                <!-- end of card-main -->
                            </div>
                            <!-- end of project pane -->

                            <!-- start a question pane  -->

                            <div class="tab-pane" id="questions" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card-questioning">
                                            <div class="accordion-box" id="question-open">
                                                <div class="faq-accordion">
                                                    <a class="accordion-msg active">This is Photoshop's version  of Lorem Ipsum?</a>
                                                </div>
                                                <div class="faq-accordion">
                                                    <div class="accordion-desc">
                                                        <p>
                                                            This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="faq-accordion">
                                                    <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                                </div>
                                                <div class="faq-accordion">
                                                    <div class="accordion-desc">
                                                        <p>
                                                            This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="faq-accordion">
                                                    <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                                </div>
                                                <div class="faq-accordion">
                                                    <div class="accordion-desc">
                                                        <p>
                                                            This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="faq-accordion">
                                                    <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                                </div>
                                                <div class="faq-accordion">
                                                    <div class="accordion-desc">
                                                        <p>
                                                            This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="faq-accordion">
                                                    <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                                </div>
                                                <div class="faq-accordion">
                                                    <div class="accordion-desc">
                                                        <p>
                                                            This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="faq-accordion">
                                                    <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                                </div>
                                                <div class="faq-accordion">
                                                    <div class="accordion-desc">
                                                        <p>
                                                            This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="faq-accordion">
                                                    <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                                </div>
                                                <div class="faq-accordion">
                                                    <div class="accordion-desc">
                                                        <p>
                                                            This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="faq-accordion">
                                                    <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                                </div>
                                                <div class="faq-accordion">
                                                    <div class="accordion-desc">
                                                        <p>
                                                            This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="faq-accordion">
                                                    <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                                </div>
                                                <div class="faq-accordion">
                                                    <div class="accordion-desc">
                                                        <p>
                                                            This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="faq-accordion">
                                                    <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                                </div>
                                                <div class="faq-accordion">
                                                    <div class="accordion-desc">
                                                        <p>
                                                            This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="faq-accordion">
                                                    <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                                </div>
                                                <div class="faq-accordion">
                                                    <div class="accordion-desc">
                                                        <p>
                                                            This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="faq-accordion">
                                                    <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                                </div>
                                                <div class="faq-accordion">
                                                    <div class="accordion-desc">
                                                        <p>
                                                            This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="faq-accordion">
                                                    <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                                </div>
                                                <div class="faq-accordion">
                                                    <div class="accordion-desc">
                                                        <p>
                                                            This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="faq-accordion">
                                                    <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                                </div>
                                                <div class="faq-accordion">
                                                    <div class="accordion-desc">
                                                        <p>
                                                            This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                        </p>
                                                    </div>
                                                </div>


                                            </div>
                                            <!-- end of accrodion box class -->
                                        </div>
                                        <!-- end of class questing -->
                                    </div>
                                    <!-- end of col-lg-12 -->
                                </div>
                                <!-- end of row -->
                            </div>
                            <!-- end of tab pane question -->

                            <!-- start memeber ship tab pane -->

                            <div class="tab-pane" id="members" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-12">

                                        <div class="card-member">
                                            <div class="accordion-box" id="member-open">
                                                <div class="faq-accordion">
                                                    <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                                </div>
                                                <div class="faq-accordion">
                                                    <div class="accordion-desc">
                                                        <p>
                                                            This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="faq-accordion">
                                                    <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                                </div>
                                                <div class="faq-accordion">
                                                    <div class="accordion-desc">
                                                        <p>
                                                            This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="faq-accordion">
                                                    <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                                </div>
                                                <div class="faq-accordion">
                                                    <div class="accordion-desc">
                                                        <p>
                                                            This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="faq-accordion">
                                                    <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                                </div>
                                                <div class="faq-accordion">
                                                    <div class="accordion-desc">
                                                        <p>
                                                            This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="faq-accordion">
                                                    <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                                </div>
                                                <div class="faq-accordion">
                                                    <div class="accordion-desc">
                                                        <p>
                                                            This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="faq-accordion">
                                                    <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                                </div>
                                                <div class="faq-accordion">
                                                    <div class="accordion-desc">
                                                        <p>
                                                            This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="faq-accordion">
                                                    <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                                </div>
                                                <div class="faq-accordion">
                                                    <div class="accordion-desc">
                                                        <p>
                                                            This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="faq-accordion">
                                                    <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                                </div>
                                                <div class="faq-accordion">
                                                    <div class="accordion-desc">
                                                        <p>
                                                            This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="faq-accordion">
                                                    <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                                </div>
                                                <div class="faq-accordion">
                                                    <div class="accordion-desc">
                                                        <p>
                                                            This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="faq-accordion">
                                                    <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                                </div>
                                                <div class="faq-accordion">
                                                    <div class="accordion-desc">
                                                        <p>
                                                            This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="faq-accordion">
                                                    <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                                </div>
                                                <div class="faq-accordion">
                                                    <div class="accordion-desc">
                                                        <p>
                                                            This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="faq-accordion">
                                                    <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                                </div>
                                                <div class="faq-accordion">
                                                    <div class="accordion-desc">
                                                        <p>
                                                            This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="faq-accordion">
                                                    <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                                </div>
                                                <div class="faq-accordion">
                                                    <div class="accordion-desc">
                                                        <p>
                                                            This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="faq-accordion">
                                                    <a class="accordion-msg">This is Photoshop's version  of Lorem Ipsum?</a>
                                                </div>
                                                <div class="faq-accordion">
                                                    <div class="accordion-desc">
                                                        <p>
                                                            This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end of accrodion box class -->
                                        </div>
                                        <!-- end of class questing -->
                                    </div>
                                    <!-- end of col-lg-12 -->
                                </div>
                                <!-- end of row -->
                            </div>
                            <!-- end of memebership tab pane -->

                        </div>
                        <!-- end of main tab content -->
                    </div>
                </div>

            </div>




    @stop