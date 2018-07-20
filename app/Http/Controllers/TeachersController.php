<?php

namespace App\Http\Controllers;
use App\Http\Requests\ValidateTeacherRequest;

use Illuminate\Http\Request;
use App\Teacher;
use Alert;
use App\User;
use App\Role;
use App\Detail;
use App\Enrollment;
use App\Programming;
use App\Course;
use Auth;
use App\Trimester;
use App\Assistance;
use App\Qualification;

class TeachersController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('roles:admin,docente',['except' => ['edit','update','destroy','create','index','store']]);
    }

    public function index(Request $request)
    {   


        if ($request->search == "") {
           $teacher = Teacher::where('estado','activo')->paginate(5);
           return view('teacher.index',compact('teacher'));
        }else{
            $teacher = Teacher::where(\DB::raw("CONCAT(nombres, ' ', apellidoPaterno , ' ', apellidoMaterno)"),'LIKE','%' . $request->search . '%')
                                ->where('estado','activo')
                                ->paginate(3);
            $teacher->appends($request->only('search'));
            return view('teacher.index',compact('teacher'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all()->where('name','docente');
        return view('teacher.create',compact('roles'));    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidateTeacherRequest $request)
    {
        $teacher = Teacher::create($request->all());
        $user = User::create($request->all());

        if ($request->hasFile('documentos')) {
           $teacher->documentos = $request->file('documentos')->store('public');
        }

        $teacher->save();
        $user->save();

        Alert::success('<a href="/teachers/create/">Desea agregar otro docente?</a>')->html()->persistent("No, Gracias");

        return redirect()->route('teachers.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teacher.edit',compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      

        $teacher = Teacher::findOrFail($id);

        // if ($request->hasFile('documentos')) {

        //     $teacher->documentos = $request->file('documentos')->store('public');
        // }
        if ($request->hasFile('documentos')) {

        $teacher->documentos = $request->file('documentos')->store('public');

        }

        $teacher->update($request->only('nombres','estado','apellidoPaterno','apellidoMaterno','dni','sexo','profesion','correo'));

        Alert::success('Docente actualizado satisfactoriamente', 'Success')->persistent("Close");
        // alert()->success('Category deleted successfully', 'Success')->persistent("Close");
       return redirect()->route('teachers.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->estado='inactivo';
        $teacher->update();
        //redireccionar
        alert()->success('Rol eliminado satisfactoriamente', 'Éxito')->persistent("Close");
        return back();
    }


    public function listarCursos($id){

         $user = User::findOrFail($id);
         
         foreach ($user->teacher as $key) {

            $var =  $key->id;

         }

         
        $detail = Detail::all()->where('teacher_id',$var);

        return view('teacher.assistance.listaCourse',compact('detail'));

    }


    public function controlCursos($id){


        $session = auth()->id();

        $userTeacher = User::findOrFail($session);
         
         foreach ($userTeacher->teacher as $ust) {

            $rest =  $ust->id; // return id teacher

         }

        $dds = Detail::all()->where('programming_id',$id)->where('teacher_id',$rest);

        // dd($dds);

        // $registro = Enrollment::all()->where('programming_id',$id);

        return view('teacher.assistance.controlCourse',compact('dds'));

    }

     public function sendAssistance(Request $request)
    {
         


    $user_ids=$request['user_id'];


     foreach ($user_ids as $user_id) {
             
            Assistance::create([
            'programming_id'   => $request['programming_id'],
            'course_id'   => $request['course_id'],
            'teacher_id'   => $request['teacher_id'],
            'user_id'   => $user_id
         ]);

          }
     
        Alert::success('Asistencia Tomada')->html()->persistent("Close");
            
        return redirect()->route('cpanel');
    }



        // Qualification

    public function listarCursosQualification($id){

         $user = User::findOrFail($id);
         
         foreach ($user->teacher as $key) {

            $var =  $key->id;

         }

         
        $detail = Detail::all()->where('teacher_id',$var);

        return view('teacher.qualification.listaCourse',compact('detail'));

    }


         public function controlCursosQualification($id){


        $session = auth()->id();

        $userTeacher = User::findOrFail($session);
         
         foreach ($userTeacher->teacher as $ust) {

            $rest =  $ust->id; // return id teacher

         }

        $ddNote = Detail::all()->where('programming_id',$id)->where('teacher_id',$rest);

        $not1=0;
        $not2=0;
        $not3=0;
        $not4=0;
        $prom=0;


        $id1=0;
        $id2=0;
        $id3=0;
        $id4=0;
        $id5=0;

        $met1=0;
        $met2=0;
        $met3=0;
        $met4=0;
        $met5=0;


        $trimester = Trimester::all()->where('id','1');

        // dd($dds);

        // $registro = Enrollment::all()->where('programming_id',$id);

        return view('teacher.qualification.controlCourse',compact('ddNote','trimester','not1','not2','not3','not4','prom','id1','id2','id3','id4','id5','met1','met2','met3','met4','met5'));

    }


         public function sendQualification(Request $request)
    {



     $bucle = $request['user_id'];
     $notas1 = $request['nota1'];
     $notas2 = $request['nota2'];
     $notas3 = $request['nota3'];
     $notas4 = $request['nota4'];
    $promedio = $request['promedio'];
   
  // dd($notas1);

    foreach ($bucle as $i  => $value) {

            Qualification::create([
            'trimester_id'   => $request['trimester_id'],
            'nota1'   => $request['nota1'][$i],
            'nota2'   => $request['nota2'][$i],
            'nota3'   => $request['nota3'][$i],
            'nota4'   => $request['nota4'][$i],
            'promedio'   => $request['promedio'][$i],
            'course_id'   => $request['course_id'],
            'teacher_id'   => $request['teacher_id'],
            'programming_id'   => $request['programming_id'],
            'user_id'   => $value
         ]);

    }

//     for ($i=0; $i < count($request['enrollment_id']); $i++) 
// {
//     $products= new Qualification; 
//     $products->trimester_id = $request['trimester_id'];      
//     $products->nota1 = $request['nota1'][$i];
//     $products->nota2= $request['nota2'][$i];
//     $products->nota3= $request['nota3'][$i];
//     $products->nota4= $request['nota4'][$i];
//     $products->promedio= $request['promedio'][$i];
//     $products->course_id = $request['course_id'];  
//     $products->enrollment_id= $request['enrollment_id'][$i];
//     $products->teacher_id = $request['teacher_id'];  
//     $products->programming_id = $request['programming_id'];






     
//     //$products->save();  
// }   
    
        Alert::success('Nota registrada')->html()->persistent("Close");
            
        return redirect()->route('cpanel');
    }

}
