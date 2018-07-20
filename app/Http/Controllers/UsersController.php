<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\UpdateUserRequest;
use Alert;
use App\Role;
use App\Student;
use App\User;
use App\Attorney;
use App\Teacher;

class UsersController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('roles:admin',['except' => ['edit','update','destroy','create','index','store','show']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd($request->get('name'));

        // $users = User::name($request->get('name'))->orderBy('name')->paginate(3);
        

        if ($request->search == "") {
           $users = User::paginate(5);
           return view('auth.index', compact('users'));
        }else{
            $users = User::where('name','LIKE','%' . $request->search . '%')->paginate(3);
            $users->appends($request->only('search'));
            return view('auth.index', compact('users'));
        }
        
    }

          
    public function create()
    {

       $roles = Role::all(); 
       
       return  view('auth.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //Guadar mensaje
        /*DB::table('mensajes')->insert([

            "nombre" => $request->input('nombre'),
            "email" => $request->input('email'),
            "mensaje" => $request->input('mensaje'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),

        ]);*/

       User::create($request->all());

        // Redireccionar mensaje
       Alert::success('<a href="/users/create/">Desea agregar otro usuario?</a>')->html()->persistent("No, Gracias");
            
        return redirect()->route('users.index');
    
    }

      public function show($id)
    {

        //$consulta = DB::table('mensajes')->where('id', $id)->first();
        
        $users = User::findOrFail($id);
        return view('auth.show',compact('users'));

    }


        public function edit($id)
    {

        $user = User::findOrFail($id);

        $this->authorize('edit',$user);

        $students = Student::pluck('email','id');
        $attorneys = Attorney::pluck('dni','id');
        $teachers = Teacher::pluck('correo','id');

        return view('auth.edit',compact('user','students','attorneys','teachers'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id)
    {



        $user = User::findOrFail($id);

        $this->authorize('update',$user);

        if ($request->hasFile('avatar')) {

        $user->avatar = $request->file('avatar')->store('public');

        }


        //agregar logica correspondiente

                if (auth()->check()){

                if (auth()->user()->hasRoles(['admin'])) {
                    $user->update($request->only('name','username'));
                    $user->student()->sync($request->student);
                    $user->attorney()->sync($request->attorney);
                    $user->teacher()->sync($request->teacher);

                    return redirect()->route('users.index');
                }elseif (auth()->user()->hasRoles(['alumno'])) {
                     $user->update($request->only('password'));
                    return redirect()->route('cpanel');
                }
                elseif (auth()->user()->hasRoles(['docente'])) {
                    $user->update($request->only('password'));
                    return redirect()->route('cpanel');
                }
                elseif (auth()->user()->hasRoles(['apoderado'])) {
                    $user->update($request->only('password'));
                    return redirect()->route('cpanel');
                }
            }
            
      
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
              // return "Eliminando el mensaje " . $id;    }
        //eliminar mensaje
        //DB::table('mensajes')->where('id',$id)->delete();
        $user = User::findOrFail($id);
        $user->delete();
        //redireccionar
        $this->authorize('destroy', $user);

        return back();
    }
}
