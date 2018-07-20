<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Detail;
use App\Course;
use App\Teacher;
use App\Programming;
use Alert;
class DetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        if ($request->search == "") {

           $detail = Detail::paginate(5);
           return view('detail.index',compact('detail'));
        }else{
            $detail = Detail::where('day','LIKE','%' . $request->search . '%')->orWhereHas('teacher', function ($query) use ($request) {
                
                $query->where('nombres','LIKE','%' . $request->search . '%');

            })->orWhereHas('course', function ($query) use ($request) {
                
                $query->where('name','LIKE','%' . $request->search . '%');

            })->paginate(3);

                                
            $detail->appends($request->only('search'));
            return view('detail.index',compact('detail'));
        }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programming = Programming::all();
        $teacher = Teacher::all();
        $course = Course::all();

        return view('detail.create',compact('programming','teacher','course'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $detail = Detail::create($request->all());

        // Redireccionar mensaje

        //Alert::success('Good job!')->persistent("Close");
        //return back()->with('info','Rol Agregado');   

        if ($detail) {
        // alert()->success('Rol Creado')->persistent("Cerrar");
        Alert::success('<a href="/details/create/">Desea agregar otro detalle programado?</a>')->html()->persistent("No, Gracias");
            
        return redirect()->route('details.index');
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
        $detail = Detail::findOrFail($id);

        $programming = Programming::all();

        $teacher = Teacher::all();

        $course = Course::all();

        return view('detail.edit', compact('detail','programming','teacher','course'));
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
       $detail = Detail::findOrFail($id);

        $detail->update($request->all());
        
        Alert::success('Detalle actualizado satisfactoriamente', 'Success')->persistent("Close");

        return redirect()->route('details.index');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detail = Detail::findOrFail($id);
        $detail->delete();
        //redireccionar
        return back();
    }
}
