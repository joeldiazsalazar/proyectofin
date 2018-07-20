<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Enrollment;
use App\Student;
use App\Attorney;
use Alert;
use App\Programming;
use App\Classroom;
use Barryvdh\DomPDF\Facade as PDF;

class EnrollmentsController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('roles:admin',['except' => ['edit','update','destroy','create','index','store','show']]);
    }

    public function index(Request $request)
    {
        if ($request->search == "") {

           $enrollment = Enrollment::where('estado','activo')->paginate(5);
           return view('enrollment.index',compact('enrollment'));
        }else{
            $enrollment = Enrollment::whereHas('user', function ($query) use ($request) {
                
                $query->where('username','LIKE','%' . $request->search . '%');

            })->paginate(3);
                                
            $enrollment->appends($request->only('search'));
            return view('enrollment.index',compact('enrollment'));
        }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $student = Student::all();

        $user = User::all()->where('role_id','2');

        $programming = Programming::all();

        return view('enrollment.create',compact('student','user','programming'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $getProgId = $request->programming_id;

        if ($getProgId) {
  
             $class = Classroom::findOrFail($getProgId);

             $getIDclass = $class->vacante;
             if ($getIDclass === 0) {
                 Alert::warning('No hay vacantes disponibles')->html()->persistent("Entendido");
                 return back();
             
             }else{
                $c = '1';
                $enrollment = Enrollment::create($request->all());
                $enrollment->save();

                $rest = $class->vacante;

                $class->vacante =  $rest - $c;

                $class->update();


             Alert::success('<a href="/enrollments/create/">Desea agregar otro Matricula?</a>')->html()->persistent("No, Gracias");
            
             return redirect()->route('enrollments.index');
             }
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $enrollment = Enrollment::findOrFail($id);

        $objuser = $enrollment->user_id;

        return view('enrollment.show', compact('enrollment'));
    }


    public function pdf($id)
    {        
        /**
         * toma en cuenta que para ver los mismos 
         * datos debemos hacer la misma consulta
        **/
        $enrollment = Enrollment::findOrFail($id);
        $object = $enrollment->id;

        date_default_timezone_set('America/Bogota');

        $now = new \DateTime();

        $getFecha  = $now->format('d/m/Y:H:i:s');

        // return view('pdf.enrollments', compact('enrollment','now'));

        $pdf = PDF::loadView('pdf.enrollments', compact('enrollment','getFecha'));


        return $pdf->download($getFecha.''.'.pdf');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $enrollment = Enrollment::findOrFail($id);

       $programming = Programming::all();

       $user = User::where('role_id','2')->pluck('username','id');

       $students = Student::pluck('nombres','id');

       return view('enrollment.edit', compact('enrollment','programming','user','students'));
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
        $enrollment = Enrollment::findOrFail($id);

        $enrollment->update($request->all());
        
        Alert::success('Matricula actualizada satisfactoriamente', 'Success')->persistent("Close");

        return redirect()->route('enrollments.index');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $enrollment = Enrollment::findOrFail($id);
        $enrollment->estado='pendiente';
        $enrollment->update();
        //redireccionar
        Alert::success('Matricula eliminado satisfactoriamente', 'Éxito')->persistent("Close");

       return redirect()->route('enrollments.index');  
    }
}
