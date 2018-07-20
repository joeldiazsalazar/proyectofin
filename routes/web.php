<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// App\User::create([

// 'name' => 'Joel Diaz',
// 'username' => 'jdiazs',
// 'password' => '123456',
// 'role_id' => '1'

// ]);

// App\Role::create([

// 'name' => 'admin',
// 'display_name' => 'Administrador'(
// ]);

			// para mostrar la relacion de roles->usuarios
		Route::get('/mostrarapoderados', function () {

			$pos = 1 ;
			$class = \App\Classroom::all()->where('id','1')->pluck("vacante");

		   return  $class - $pos;
		});		

		Route::get('/fecha', function(){
			date_default_timezone_set('Asia/Kolkata');
			$now = new \DateTime();
			dd($now);
		});

		Route::get('/', function () {
		    return view('auth.login');
		})->name('/');

		// Route::get('redirect', function (){ 
		    
		//     return redirect('/');
		// });

		Route::get('tipo/{type}', 'SweetController@notification');


		Route::get('home', 'PanelController@index')->name('cpanel');

		// Route::get('statistics', 'PagesController@index')->name('statistics.index');

		Route::get('listado_graficas', 'GraficasController@index')->name('statistics.index');
		

		Route::get('grafica_registros/{anio}/{mes}', 'GraficasController@registros_mes');

		Route::get('reportes_registros/{anio}/{mes}/{estado}', 'ReportsController@registros_m');
		Route::get('reports', 'ReportsController@index')->name('reports.index');

		Route::get('registros_postulantes/{anio}/{mes}/{estado}', 'ReportsController@registros_post');
		Route::get('reports_postulant', 'ReportsController@index_pos')->name('reports.postulant');


		Route::get('grafica_publicaciones', 'GraficasController@total_publicaciones');

		Route::get('/errors', function () {
		    return view('errors.index');
		});	

		// metodos para Role

		Route::get('roles',['as' => 'roles.index','uses' => 'RolesController@index']);
		Route::get('roles/create',['as' => 'roles.create','uses' => 'RolesController@create']);
		Route::post('roles',['as' => 'roles.store','uses' => 'RolesController@store']);
		Route::get('roles/show/{id}',['as' => 'roles.show','uses' => 'RolesController@show']);
		Route::get('roles/{id}/edit',['as' => 'roles.edit','uses' => 'RolesController@edit']);
		Route::delete('roles/{id}',['as' => 'roles.destroy','uses' => 'RolesController@destroy']);
		Route::put('roles/{id}',['as' => 'roles.update','uses' => 'RolesController@update']);

		// metodos para usuarios
		
		Route::get('users',['as' => 'users.index','uses' => 'UsersController@index']);

		Route::post('users',['as' => 'users.store','uses' => 'UsersController@store']);

		Route::get('users/create',['as' => 'users.create','uses' => 'UsersController@create']);

		Route::get('users/show/{id}',['as' => 'users.show','uses' => 'UsersController@show']);

		Route::get('users/{id}/edit',['as' => 'users.edit','uses' => 'UsersController@edit']);

		Route::delete('users/{id}',['as' => 'users.destroy','uses' => 'UsersController@destroy']);

		Route::put('users/{id}',['as' => 'users.update','uses' => 'UsersController@update']);


		// Route::any( '/search',['as' => 'users.search','uses' => 'UsersController@search']);


		Route::get('payments',['as' => 'payments.index','uses' => 'PaymentsController@index']);

		Route::post('payments',['as' => 'payments.store','uses' => 'PaymentsController@store']);

		Route::get('payments/create',['as' => 'payments.create','uses' => 'PaymentsController@create']);

		Route::get('payments/show/{id}',['as' => 'payments.show','uses' => 'PaymentsController@show']);

		Route::get('payments/{id}/edit',['as' => 'payments.edit','uses' => 'PaymentsController@edit']);

		Route::delete('payments/{id}',['as' => 'payments.destroy','uses' => 'PaymentsController@destroy']);

		Route::put('payments/{id}',['as' => 'payments.update','uses' => 'PaymentsController@update']);



		Route::get('students/payment/show/{id}',['as' => 'payments.student','uses' => 'PaymentsController@student']);
		Route::get('students/payment/detail/{id}',['as' => 'payments.student_detail','uses' => 'PaymentsController@detail']);





		// metodos para alumnos

		Route::get('students',['as' => 'students.index','uses' => 'StudentsController@index']);

		Route::post('students',['as' => 'students.store','uses' => 'StudentsController@store']);

		Route::get('students/create',['as' => 'students.create','uses' => 'StudentsController@create']);

		Route::get('students/show/{id}',['as' => 'students.show','uses' => 'StudentsController@show']);



		Route::get('students/detail/course/{id}',['as' => 'students_detail.index','uses' => 'StudentsController@index_detail']);

		
		Route::get('students/detail/show/{id}',['as' => 'students_detail.show','uses' => 'StudentsController@show_detail']);


		Route::get('students/detail/calendar/programming/{id}',['as' => 'detail.show','uses' => 'StudentsController@detail']);


		Route::get('students/detail/course/note/{id}',['as' => 'course_note.show','uses' => 'StudentsController@prog']);


		Route::get('students/detail/course/assistance/{id}',['as' => 'course_assistance.show','uses' => 'StudentsController@assistance']);


		

		Route::get('students/{id}/edit',['as' => 'students.edit','uses' => 'StudentsController@edit']);

		Route::delete('students/{id}',['as' => 'students.destroy','uses' => 'StudentsController@destroy']);

		Route::put('students/{id}',['as' => 'students.update','uses' => 'StudentsController@update']);

		// metodos para el apoderado

		Route::get('attorneys',['as' => 'attorneys.index','uses' => 'AttorneysController@index']);

		Route::post('attorneys',['as' => 'attorneys.store','uses' => 'AttorneysController@store']);

		Route::get('attorneys/create',['as' => 'attorneys.create','uses' => 'AttorneysController@create']);

		Route::get('attorneys/show/{id}',['as' => 'attorneys.show','uses' => 'AttorneysController@show']);

		Route::get('attorneys/students/{id}',['as' => 'attorneys_student.index','uses' => 'AttorneysController@index_student']);
		
		Route::get('attorneys/students/show/{id}',['as' => 'attorneys_student.show','uses' => 'AttorneysController@show_student']);

		Route::get('attorneys/{id}/edit',['as' => 'attorneys.edit','uses' => 'AttorneysController@edit']);

		Route::delete('attorneys/{id}',['as' => 'attorneys.destroy','uses' => 'AttorneysController@destroy']);

		Route::put('attorneys/{id}',['as' => 'attorneys.update','uses' => 'AttorneysController@update']);

		// metodos para el docente
		
		Route::get('teachers',['as' => 'teachers.index','uses' => 'TeachersController@index']);

		Route::post('teachers',['as' => 'teachers.store','uses' => 'TeachersController@store']);

		Route::get('teachers/create',['as' => 'teachers.create','uses' => 'TeachersController@create']);

		Route::get('teachers/show/{id}',['as' => 'teachers.show','uses' => 'TeachersController@show']);

		Route::get('teachers/{id}/edit',['as' => 'teachers.edit','uses' => 'TeachersController@edit']);

		Route::delete('teachers/{id}',['as' => 'teachers.destroy','uses' => 'TeachersController@destroy']);

		Route::put('teachers/{id}',['as' => 'teachers.update','uses' => 'TeachersController@update']);


		// metodos para los postulantes

		Route::get('postulants',['as' => 'postulants.index','uses' => 'PostulantsController@index']);

		Route::post('postulants',['as' => 'postulants.store','uses' => 'PostulantsController@store']);

		Route::get('postulants/create',['as' => 'postulants.create','uses' => 'PostulantsController@create']);

		Route::get('postulants/show/{id}',['as' => 'postulants.show','uses' => 'PostulantsController@show']);

		Route::get('postulants/{id}/edit',['as' => 'postulants.edit','uses' => 'PostulantsController@edit']);

		Route::delete('postulants/{id}',['as' => 'postulants.destroy','uses' => 'PostulantsController@destroy']);

		Route::put('postulants/{id}',['as' => 'postulants.update','uses' => 'PostulantsController@update']);




		Route::get('teacher/assistance/{id}', ['as' => 'teacher.assistance','uses' => 'TeachersController@listarCursos']);

		Route::get('teacher/assistance/show/{id}', ['as' => 'teacher.control','uses' => 'TeachersController@controlCursos']);

		Route::post('teachers/assistance/show/',['as' => 'teachers.sendAssistance','uses' => 'TeachersController@sendAssistance']);


		Route::get('teacher/qualification/{id}', ['as' => 'teacher.qualification','uses' => 'TeachersController@listarCursosQualification']);

		Route::get('teacher/qualification/show/{id}', ['as' => 'teacher.controlQualification','uses' => 'TeachersController@controlCursosQualification']);

		Route::post('teachers/qualification/show/',['as' => 'teachers.sendQualification','uses' => 'TeachersController@sendQualification']);










		

		// metodos para los cursos

		Route::get('courses',['as' => 'courses.index','uses' => 'CoursesController@index']);

		Route::post('courses',['as' => 'courses.store','uses' => 'CoursesController@store']);

		Route::get('courses/create',['as' => 'courses.create','uses' => 'CoursesController@create']);

		Route::get('courses/show/{id}',['as' => 'courses.show','uses' => 'CoursesController@show']);

		Route::get('courses/{id}/edit',['as' => 'courses.edit','uses' => 'CoursesController@edit']);

		Route::delete('courses/{id}',['as' => 'courses.destroy','uses' => 'CoursesController@destroy']);

		Route::put('courses/{id}',['as' => 'courses.update','uses' => 'CoursesController@update']);



		//metodos para la matricula

		Route::get('enrollments',['as' => 'enrollments.index','uses' => 'EnrollmentsController@index']);

		Route::post('enrollments',['as' => 'enrollments.store','uses' => 'EnrollmentsController@store']);

		Route::get('enrollments/create',['as' => 'enrollments.create','uses' => 'EnrollmentsController@create']);

		Route::get('enrollments/show/{id}',['as' => 'enrollments.show','uses' => 'EnrollmentsController@show']);

		Route::get('enrollments/{id}/edit',['as' => 'enrollments.edit','uses' => 'EnrollmentsController@edit']);

		Route::delete('enrollments/{id}',['as' => 'enrollments.destroy','uses' => 'EnrollmentsController@destroy']);

		Route::put('enrollments/{id}',['as' => 'enrollments.update','uses' => 'EnrollmentsController@update']);

		Route::get('dowload-enrollment/{id}', 'EnrollmentsController@pdf')->name('products.pdf');
		
		// metodos para el aula


		Route::get('classrooms',['as' => 'classrooms.index','uses' => 'ClassroomsController@index']);

		Route::post('classrooms',['as' => 'classrooms.store','uses' => 'ClassroomsController@store']);

		Route::get('classrooms/create',['as' => 'classrooms.create','uses' => 'ClassroomsController@create']);

		Route::get('classrooms/show/{id}',['as' => 'classrooms.show','uses' => 'ClassroomsController@show']);

		Route::get('classrooms/{id}/edit',['as' => 'classrooms.edit','uses' => 'ClassroomsController@edit']);

		Route::delete('classrooms/{id}',['as' => 'classrooms.destroy','uses' => 'ClassroomsController@destroy']);

		Route::put('classrooms/{id}',['as' => 'classrooms.update','uses' => 'ClassroomsController@update']);


		// metodos para la programacion


		Route::get('programmings',['as' => 'programmings.index','uses' => 'ProgrammingsController@index']);

		Route::post('programmings',['as' => 'programmings.store','uses' => 'ProgrammingsController@store']);

		Route::get('programmings/create',['as' => 'programmings.create','uses' => 'ProgrammingsController@create']);

		Route::get('programmings/show/{id}',['as' => 'programmings.show','uses' => 'ProgrammingsController@show']);

		Route::get('programmings/{id}/edit',['as' => 'programmings.edit','uses' => 'ProgrammingsController@edit']);

		Route::delete('programmings/{id}',['as' => 'programmings.destroy','uses' => 'ProgrammingsController@destroy']);

		Route::put('programmings/{id}',['as' => 'programmings.update','uses' => 'ProgrammingsController@update']);


		// metodos para el detalle de la programacion

		Route::get('details',['as' => 'details.index','uses' => 'DetailsController@index']);

		Route::post('details',['as' => 'details.store','uses' => 'DetailsController@store']);

		Route::get('details/create',['as' => 'details.create','uses' => 'DetailsController@create']);

		Route::get('details/show/{id}',['as' => 'details.show','uses' => 'DetailsController@show']);

		Route::get('details/{id}/edit',['as' => 'details.edit','uses' => 'DetailsController@edit']);

		Route::delete('details/{id}',['as' => 'details.destroy','uses' => 'DetailsController@destroy']);

		Route::put('details/{id}',['as' => 'details.update','uses' => 'DetailsController@update']);

		// metodos para el trimester escolar

		Route::get('trimesters',['as' => 'trimesters.index','uses' => 'TrimestersController@index']);

		Route::post('trimesters',['as' => 'trimesters.store','uses' => 'TrimestersController@store']);

		Route::get('trimesters/create',['as' => 'trimesters.create','uses' => 'TrimestersController@create']);

		Route::get('trimesters/show/{id}',['as' => 'trimesters.show','uses' => 'TrimestersController@show']);

		Route::get('trimesters/{id}/edit',['as' => 'trimesters.edit','uses' => 'TrimestersController@edit']);

		Route::delete('trimesters/{id}',['as' => 'trimesters.destroy','uses' => 'TrimestersController@destroy']);

		Route::put('trimesters/{id}',['as' => 'trimesters.update','uses' => 'TrimestersController@update']);

		// metodos para la calificaion



		Route::get('qualifications',['as' => 'qualifications.index','uses' => 'QualificationsController@index']);

		Route::post('qualifications',['as' => 'qualifications.store','uses' => 'QualificationsController@store']);

		Route::get('qualifications/create',['as' => 'qualifications.create','uses' => 'QualificationsController@create']);

		Route::get('qualifications/show/{id}',['as' => 'qualifications.show','uses' => 'QualificationsController@show']);

		Route::get('qualifications/{id}/edit',['as' => 'qualifications.edit','uses' => 'QualificationsController@edit']);

		Route::delete('qualifications/{id}',['as' => 'qualifications.destroy','uses' => 'QualificationsController@destroy']);

		Route::put('qualifications/{id}',['as' => 'qualifications.update','uses' => 'QualificationsController@update']);


		// metodos para asistencias

		Route::get('assistances',['as' => 'assistances.index','uses' => 'AssistancesController@index']);

		Route::post('assistances',['as' => 'assistances.store','uses' => 'AssistancesController@store']);

		Route::get('assistances/create',['as' => 'assistances.create','uses' => 'AssistancesController@create']);

		Route::get('assistances/show/{id}',['as' => 'assistances.show','uses' => 'AssistancesController@show']);

		Route::get('assistances/{id}/edit',['as' => 'assistances.edit','uses' => 'AssistancesController@edit']);

		Route::delete('assistances/{id}',['as' => 'assistances.destroy','uses' => 'AssistancesController@destroy']);

		Route::put('assistances/{id}',['as' => 'assistances.update','uses' => 'AssistancesController@update']);



		// Route::get('docente', 'PagesController@docente')->name('docente.view');

		// Route::get('apoderado', 'PagesController@apoderado')->name('apoderado.view');

	// aca pe 


		Route::get('/refresc','QualificationsController@lista');

		Auth::routes();


