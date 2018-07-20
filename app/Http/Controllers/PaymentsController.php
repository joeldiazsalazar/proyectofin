<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use App\Enrollment;
use App\Trimester;
use Illuminate\Support\Facades\DB;

class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $payment = Payment::all();  
        // return view('payment.index',compact('payment'));


        if ($request->search == "") {
           $payment = Payment::paginate(5);
           return view('payment.index',compact('payment'));
        }else{
            $payment = Payment::where(\DB::raw("CONCAT(enrollment_id, ' ', estado)"),'LIKE','%' . $request->search . '%')
                                ->paginate(5);
            $payment->appends($request->only('search'));
            return view('payment.index',compact('payment'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $payment = Payment::all();
        $enrollment = Enrollment::all();
        $trimester  = Trimester::all();
        return view('payment.create',compact('payment','enrollment','trimester'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $enrollment_ids=$request['enrollment_id'];


     // foreach ($enrollment_ids as $enrollment_id) {
             
     //             Qualification::create([
     //         'trimester_id'   => $request['trimester_id'],
     //         'course_id'   => $request['course_id'],
     //        'nota1'   => $request['nota1'],
     //         'nota2'   => $request['nota2'],
     //        'nota3'   => $request['nota3'],
     //        'nota4'   => $request['nota4'],
     //        'promedio'   => $request['promedio'],
     //        'enrollment_id'   => $enrollment_id
     //     ]);

     //      }
        // $id = $request['enrollment_id'];
        // $cuota=$request['cuota'];
        // $inicio = $request['periodo_inicio'];

        // for ($i=0; $i < sizeof($cuota); $i++) {

        //     Payment::create([
        //     'enrollment_id'   => $request['enrollment_id'],
        //     'periodo_inicio'   => $request['periodo_inicio'][$i],
        //     'cuota'   => $request['cuota'][$i]
        //  ]);



        // }
        // dd($request);
            for ($i=0; $i < count($request['cuota']); $i++) 
            {
                $products= new Payment; 
                $products->enrollment_id = $request['enrollment_id'];      
                $products->periodo_inicio = $request['periodo_inicio'][$i];
                $products->periodo_fin = $request['periodo_fin'][$i];
                $products->monto = $request['monto'][$i];
                $products->adeuda = $request['adeuda'][$i];
                $products->estado = $request['estado'][$i];
                $products->trimester_id = $request['trimester_id'];
                $products->cuota= $request['cuota'][$i];
                $products->save();
            }




        //     for ($i=0; $i < sizeof($request['cuota']); $i++) 
        // {
        //     $products= new Payment; 
        //     $products->trimester_id = $request['trimester_id'];      
        //     $products->cuota = $request['cuota'][$i];
        //     $products->periodo_inicio= $request['periodo_inicio'][$i];
        //     $products->periodo_fin= $request['periodo_fin'][$i];
        //     $products->monto= $request['monto'][$i];
        //     $products->adeuda= $request['adeuda'][$i];
        //     $products->estado= $request['estado'][$i];
        //     // $products->course_id = $request['course_id'];  
        //     $products->enrollment_id= $request['enrollment_id'];
        //     // $products->teacher_id = $request['teacher_id'];  
        //     // $products->programming_id = $request['programming_id'];

        //     $products->save(); 
       // dd($request);
    
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



    public function student($id){

        $enrollment = Enrollment::all()->where('user_id',$id);

        foreach ($enrollment as $enroll) {
           
           $var = $enroll->id;
        }

        $payment = Payment::all()->where('enrollment_id',$var)->where('trimester_id','1');
        // dd($payment);

        return view('payment.student.index', compact('payment'));
    }


    public function detail($id){
        $enrollment = Enrollment::all()->where('user_id',$id);

        foreach ($enrollment as $enroll) {
           
           $var = $enroll->id;
        }

        $payment = Payment::all()->where('enrollment_id',$var);
        // $total = Payment::all()->where('enrollment_id',$var)->sum('monto'); 
        // $cantidad = $payment->avg('monto');

        // dd($payment);

        return view('payment.student.show', compact('payment'));
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $payment = Payment::findOrFail($id);

        return view('payment.edit', compact('payment'));
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
       $payment = Payment::findOrFail($id);

        $payment->update($request->all());
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
