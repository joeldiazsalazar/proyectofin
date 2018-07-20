<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Qualification;
use App\Trimester;
use App\Detail;
use App\Enrollment;
use App\Course;
use App\Programming;
use Alert;


class QualificationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
   public function lista(Request $request){
      
    //$selector = Programming::all();
    //ejemplos
    //$enrollment= Enrollment::all()->where('programming_id','llo que viene del request y vota la lista');
        $valor_combo_id=$request->valor_combo_id;
        $enrollment= Enrollment::all()->where('programming_id',$valor_combo_id); 
        $response = [
           
            'enrollment' => $enrollment,
        
        ]; 
        return response()->json($response);

    

     // return "1"; //aqui pasas los valores del ajax y haces tu wbda..?? y consumes ese json q te va a boar con el mismo jquery y 
     // te olvidas del foreach de tu view nose json   
   }

  
    public function index(Request $request)
    {
        if ($request->search == "") {

           $qualification = Qualification::paginate(5);
           return view('qualification.index',compact('qualification'));
        }else{
            $qualification = Qualification::whereHas('user', function ($query) use ($request) {
                
                $query->where(\DB::raw("CONCAT(name, ' ', username)"),'LIKE','%' . $request->search . '%');

            })->paginate(3);

                                
            $qualification->appends($request->only('search'));
            return view('qualification.index',compact('qualification'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $selector = Programming::with('enrollment')->get();
        //  $x = array();
        //  $enrollment=array();
        // foreach ($selector as $p) {
        //   $x[]=$p->id;
        // }
        
        
        $enrollment= Enrollment::all()->where('programming_id', '1'); 

        $trimester = Trimester::all();
        $course = Course::all();

        return view('qualification.create',compact('enrollment','trimester','course','selector'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         


    $enrollment_ids=$request['enrollment_id'];


     foreach ($enrollment_ids as $enrollment_id) {
             
                 Qualification::create([
             'trimester_id'   => $request['trimester_id'],
             'course_id'   => $request['course_id'],
            'nota1'   => $request['nota1'],
             'nota2'   => $request['nota2'],
            'nota3'   => $request['nota3'],
            'nota4'   => $request['nota4'],
            'promedio'   => $request['promedio'],
            'enrollment_id'   => $enrollment_id
         ]);

          }
    

    //dd($request);
    //   dd(

    //     Qualification::create([
    //         'trimester_id'   => $request['trimester_id'],
    //         'course_id'   => $request['course_id'],
    //         'nota1'   => $request['nota1'],
    //         'nota2'   => $request['nota2'],
    //         'nota3'   => $request['nota3'],
    //         'nota4'   => $request['nota4'],
    //         'promedio'   => $request['promedio'],
    //         'enrollment_id'   => $request['enrollment_id']
    //    ])
        
    
    // );
                
        Alert::success('<a href="/qualifications/create/">Desea agregar otra Calificacion?</a>')->html()->persistent("No, Gracias");
            
        return redirect()->route('qualifications.index');
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
        $qualification = Qualification::findOrFail($id);

        return view('qualification.edit',compact('qualification'));
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
        $qualification = Qualification::findOrFail($id);
        
        $qualification->update($request->all());

        // $enrollment_ids=$request['enrollment_id'];

        // foreach ($enrollment_ids as $enrollment_id) {

        //  $qualification->update([

        //     'trimester_id'   => $request['trimester_id'],
        //     'course_id'   => $request['course_id'],
        //     'nota1'   => $request['nota1'],
        //     'nota2'   => $request['nota2'],
        //     'nota3'   => $request['nota3'],
        //     'nota4'   => $request['nota4'],
        //     'promedio'   => $request['promedio'],
        //     'enrollment_id'   => $enrollment_id
        //  ]);
        //  }


        Alert::success('Calificacion actualizado satisfactoriamente', 'Éxito')->persistent("Close");
        
         return redirect()->route('qualifications.index');
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
