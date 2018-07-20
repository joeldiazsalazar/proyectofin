<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreRoleRequest;
use Illuminate\Http\Request;
use App\Role;
use Alert;
class RolesController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('roles:admin',['except' => ['edit','update','destroy','create','index','store']]);
    }


    public function index()
    {
       //return Role::with('user')->get();
         $roles = Role::orderBy('name')->paginate(5);
        
        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return  view('roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRoleRequest $request)
    {
        $rol = Role::create($request->all());

        // Redireccionar mensaje

        //Alert::success('Good job!')->persistent("Close");
        //return back()->with('info','Rol Agregado');   

        if ($rol) {
        // alert()->success('Rol Creado')->persistent("Cerrar");
        Alert::success('<a href="/roles/create/">Desea agregar otro rol?</a>')->html()->persistent("No, Gracias");
            
        return redirect()->route('roles.index');
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
       $roles = Role::all();

        return view('roles.show',compact('roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles = Role::findOrFail($id);

        return view('roles.edit',compact('roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRoleRequest $request, $id)
    {
        $roles = Role::findOrFail($id);

        $roles->update($request->all());

        Alert::success('Rol actualizado satisfactoriamente', 'Éxito')->persistent("Close");
        return redirect()->route('roles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $roles = Role::findOrFail($id);
        $roles->delete();
        //redireccionar
        Alert::success('Rol eliminado satisfactoriamente', 'Éxito')->persistent("Close");
        return back();
    }
}
