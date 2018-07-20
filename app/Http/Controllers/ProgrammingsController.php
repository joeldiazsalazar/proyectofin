<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Programming;
use App\Classroom;


use Alert;

class ProgrammingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->search == "") {

           $programming = Programming::where('estado','activo')->paginate(5);
           return view('programming.index',compact('programming'));
        }else{
            $programming = Programming::where(\DB::raw("CONCAT(nivel, ' ', grado , ' ', turno)"),'LIKE','%' . $request->search . '%')->orWhereHas('classroom', function ($query) use ($request) {
                
                $query->where('nombre','LIKE','%' . $request->search . '%');

            })->paginate(3);

                                
            $programming->appends($request->only('search'));
            return view('programming.index',compact('programming'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classroom = Classroom::all();
        return view('programming.create',compact('classroom'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
         $programming = Programming::create($request->all());

        // Redireccionar mensaje

        //Alert::success('Good job!')->persistent("Close");
        //return back()->with('info','Rol Agregado');   

        if ($programming) {
        // alert()->success('Rol Creado')->persistent("Cerrar");
        Alert::success('<a href="/programming/create/">Desea agregar otra programacion?</a>')->html()->persistent("No, Gracias");
            
        return redirect()->route('programmings.index');
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
        $programming = Programming::findOrFail($id);

       $classroom = Classroom::all();

       return view('programming.edit', compact('programming','classroom'));
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
        $programmings = Programming::findOrFail($id);

        $programmings->update($request->all());
        
        Alert::success('Programacion actualizado satisfactoriamente', 'Success')->persistent("Close");

        return redirect()->route('programmings.index');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $programmings = Programming::findOrFail($id);
        $programmings->estado='inactivo';
        $programmings->update();
        //redireccionar
        Alert::success('Programacion eliminado satisfactoriamente', 'Éxito')->persistent("Close");

        return back();
    }
}
