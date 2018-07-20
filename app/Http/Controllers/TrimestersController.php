<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trimester;
use Alert;

class TrimestersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trimester = Trimester::all();
        return view('trimester.index',compact('trimester'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trimester.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
         $trimester = Trimester::create($request->all());

        Alert::success('<a href="/trimesters/create/">Desea agregar otro trimeste?</a>')->html()->persistent("No, Gracias");
            
        return redirect()->route('trimesters.index');



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
        $trimester = Trimester::findOrFail($id);
        return view('trimester.edit', compact('trimester'));
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
        $trimester = Trimester::findOrFail($id);

        $trimester->update($request->all());
        
        Alert::success('Trimestre actualizada satisfactoriamente', 'Success')->persistent("Close");

        return redirect()->route('trimesters.index');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
