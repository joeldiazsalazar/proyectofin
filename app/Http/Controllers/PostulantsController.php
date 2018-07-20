<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Postulant;
use Alert;
class PostulantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        
        if ($request->search == "") {
           $postulant = Postulant::paginate(5);
           return view('postulant.index',compact('postulant'));
        }else{
            $postulant = Postulant::where(\DB::raw("CONCAT(primer_apellido, ' ', segundo_apellido , ' ', nombres)"),'LIKE','%' . $request->search . '%')->orWhere('puesto_trabajo','LIKE','%' . $request->search . '%')
                                ->paginate(3);
            $postulant->appends($request->only('search'));
            return view('postulant.index',compact('postulant'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('postulant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $postulant = Postulant::create($request->all());
        if ($request->hasFile('avatar') && $request->hasFile('experiencia_laboral')) {
            $postulant->avatar = $request->file('avatar')->store('public/fotos');
            $postulant->experiencia_laboral = $request->file('experiencia_laboral')->store('public/documentos');
        }elseif ($request->hasFile('avatar')){

            $postulant->avatar = $request->file('avatar')->store('public/fotos');
        }elseif ($request->hasFile('experiencia_laboral')) {

            $postulant->experiencia_laboral = $request->file('experiencia_laboral')->store('public/documentos');
        }

        $postulant->save();
        Alert::success('<a href="/postulants/create/">Desea agregar otro postulante?</a>')->html()->persistent("No, Gracias");
        return redirect()->route('postulants.index');
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
         $postulant = Postulant::findOrFail($id);
        return view('postulant.edit',compact('postulant'));
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
        $postulant = Postulant::findOrFail($id);

        // if ($request->hasFile('documentos')) {

        //     $postulant->documentos = $request->file('documentos')->store('public');
        // }
        if ($request->hasFile('experiencia_laboral')) {

        $postulant->experiencia_laboral = $request->file('experiencia_laboral')->store('public');

        }

        $postulant->update($request->only('puesto_trabajo','dni','primer_apellido','segundo_apellido','nombres','avatar','fecha_nacimiento','correo','celular','telefono','direccion','estado_civil',
            'grado_academico','celular_corporativo','tipo_contrato','sueldo_basico','fecha_contrato','correo_corporativo','duracion'));
        Alert::success('Postulante actualizado satisfactoriamente', 'Success')->persistent("Close");
        // alert()->success('Category deleted successfully', 'Success')->persistent("Close");
       return redirect()->route('postulants.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $postulant = Postulant::findOrFail($id);
        $postulant->estado='inactivo';
        $postulant->update();
        //redireccionar
        Alert::success('Postulante eliminado satisfactoriamente', 'Éxito')->persistent("Close");

       return redirect()->route('postulants.index');  
    }
}
