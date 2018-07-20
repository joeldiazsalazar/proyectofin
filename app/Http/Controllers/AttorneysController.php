<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\ValidateAttorneyRequest;
use App\Attorney;
use App\User;
use App\Student;
use Alert;
use App\Role;
use DB;

class AttorneysController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('roles:admin,apoderado',['except' => ['edit','update','destroy','create','index','store','show']]);
       
    }

    public function index(Request $request)
    {

        if ($request->search == "") {
           $attorney = Attorney::where('estado','activo')->paginate(5);
           return view('attorney.index',compact('attorney'));
        }else{
            $attorney = Attorney::where(\DB::raw("CONCAT(nombres, ' ', apellidoPaterno , ' ', apellidoMaterno)"),'LIKE','%' . $request->search . '%')
                                ->where('estado','activo')
                                ->paginate(3);
            $attorney->appends($request->only('search'));
            return view('attorney.index',compact('attorney'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all()->where('name','apoderado'); 
        return view('attorney.create',compact('roles'));    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidateAttorneyRequest $request)
    {
        Attorney::create($request->all());

        User::create($request->all());
        // Redireccionar mensaje
        //Alert::success('Good job!')->persistent("Close");
        //return back()->with('info','Rol Agregado');   
        // alert()->success('Rol Creado')->persistent("Cerrar");
        Alert::success('<a href="/attorneys/create/">Desea agregar otro apoderado?</a>')->html()->persistent("No, Gracias");
            
        return redirect()->route('attorneys.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $attorney = Attorney::findOrFail($id);

        return view('attorney.show',compact('attorney'));
    }



    public function index_student($id)
    {

        // dd($assg = DB::table('attorneys')
        //             ->join('assigned_attorneys', 'attorneys.id', '=', 'assigned_attorneys.attorney_id')
        //             ->where('attorney_id','id')
        //             ->select('attorneys.id')
        //             ->get());

        // $us = auth()->id();

        $user = User::findOrFail($id);

        return view('attorney.student.index',compact('user'));
    }

      public function show_student($id)
    {

        $as = Student::all()->where('attorney_id',$id);
        return view('attorney.student.show',compact('as'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $attorney = Attorney::findOrFail($id);
        $att = Attorney::all();

        return view('attorney.edit',compact('attorney','att'));
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
        $attorney = Attorney::findOrFail($id);

        $attorney->update($request->all());

        Alert::success('Apoderado actualizado satisfactoriamente', 'Éxito')->persistent("Close");
        return redirect()->route('attorneys.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $attorney = Attorney::findOrFail($id);
        $attorney->estado='inactivo';
        $attorney->update();
        //redireccionar
        Alert::success('Apoderado eliminado satisfactoriamente', 'Éxito')->persistent("Close");
        return back();
    }
}
