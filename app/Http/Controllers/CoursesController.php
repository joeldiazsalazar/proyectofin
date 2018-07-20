<?php

namespace App\Http\Controllers;
use App\Http\Requests\ValidateCourseRequest;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Course;
use App\Teacher;
use Alert;
class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
            if ($request->search == "") {
           $course = Course::paginate(5);
           return view('course.index', compact('course'));
        }else{
            $course = Course::where('name','LIKE','%' . $request->search . '%')->paginate(3);
            $course->appends($request->only('search'));
            return view('course.index', compact('course'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('course.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidateCourseRequest $request)
    {
        $course = Course::create($request->all());

        // Redireccionar mensaje

        //Alert::success('Good job!')->persistent("Close");
        //return back()->with('info','Rol Agregado');   

        if ($course) {
        // alert()->success('Rol Creado')->persistent("Cerrar");
        Alert::success('<a href="/course/create/">Desea agregar otro course?</a>')->html()->persistent("No, Gracias");
            
        return redirect()->route('courses.index');
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
        $course = Course::findOrFail($id);

        return view('course.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidateCourseRequest $request, $id)
    {
        $course = Course::findOrFail($id);

        $course->update($request->all());

        Alert::success('Curso actualizado satisfactoriamente', 'Éxito')->persistent("Close");
         return redirect()->route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $course = Course::findOrFail($id);
        $course->delete();
        //redireccionar
        Alert::success('Curso eliminado satisfactoriamente', 'Éxito')->persistent("Close");
        return back();
    }
}
