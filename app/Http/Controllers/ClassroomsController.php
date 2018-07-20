<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classroom;
use Alert;

class ClassroomsController extends Controller
{
         public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('roles:admin',['except' => ['edit','update','destroy','create','index','store']]);
    }

  public function index(Request $request)
    {   

        if ($request->search == "") {
           $classroom = Classroom::paginate(5);
           return view('classroom.index',compact('classroom'));
        }else{
            $classroom = Classroom::where(\DB::raw("CONCAT(nombre, ' ', pabellon)"),'LIKE','%' . $request->search . '%')
                                ->paginate(3);
            $classroom->appends($request->only('search'));
            return view('classroom.index',compact('classroom'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('classroom.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $classroom = Classroom::create($request->all());

        // Redireccionar mensaje

        //Alert::success('Good job!')->persistent("Close");
        //return back()->with('info','Rol Agregado');   


        // alert()->success('Rol Creado')->persistent("Cerrar");
        Alert::success('<a href="/classrooms/create/">Desea agregar otra aula?</a>')->html()->persistent("No, Gracias");
            
        return redirect()->route('classrooms.index');

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
        $classroom = Classroom::findOrFail($id);

        return view('classroom.edit',compact('classroom'));
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
        
        $classroom = Classroom::findOrFail($id);

        $classroom->update($request->all());

        Alert::success('Aula actualizado satisfactoriamente', 'Éxito')->persistent("Close");
         return redirect()->route('classrooms.index'); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $classroom = Classroom::findOrFail($id);
        $classroom->delete();
        //redireccionar
        Alert::success('Aula eliminado satisfactoriamente', 'Éxito')->persistent("Close");
        return back();
    }
}
