<?php

namespace App\Http\Controllers;

use App\Models\Secretaria;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SecretariaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        
        $secretarias = Secretaria::with('user')->get();
        return view('admin.secretarias.index',compact('secretarias'));

        
    }

    public function create(){
        
       
        return view('admin.secretarias.create');
    }
    
    public function store(Request $request){
        
       //$datos = request()->all;
        //return response()->json($datos);
        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'ci' => 'required|unique:secretarias',
            'celular' => 'required',
            'fecha_nacimiento' => 'required',
            'direccion' => 'required',
            'email' => 'required|max:250|unique:users',
            'password' =>'required|max:250|confirmed',

       ]);
       $usuario = new User();
        $usuario->name = $request->nombres;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request['password']);
        $usuario->save();

        $secretaria = new Secretaria();
        $secretaria->user_id = $usuario->id;
        $secretaria->nombres = $request->nombres;
        $secretaria->apellidos = $request->apellidos;
        $secretaria->ci = $request->ci;
        $secretaria->celular = $request->ci;
        $secretaria->fecha_nacimiento = $request->fecha_nacimiento;
        $secretaria->direccion = $request->direccion;
        $secretaria->save();

        return redirect()->route('admin.secretarias.index')
        
        ->with('mensaje', 'Se registró al secretario') 
        ->with('icono', 'success'); 

    }
    public function show($id){
        
        $secretaria = Secretaria::with('user')->findOrFail($id);
        return view('admin.secretarias.show',compact('secretaria'));
        
    }

    public function edit($id){
        
        $secretaria = Secretaria::with('user')->findOrFail($id);
        return view('admin.secretarias.edit',compact('secretaria'));
        
    }

    public function update(Request $request, $id){
        $secretaria = Secretaria::find($id);

        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'ci' => 'required|unique:secretarias,ci,'. $secretaria->id,
            'celular' => 'required',
            'fecha_nacimiento' => 'required',
            'direccion' => 'required',
            'email' => 'required|max:250|unique:users,email,'.$secretaria->user->id,
            'password' =>'nullable|max:250|confirmed',

       ]);
       $secretaria->nombres = $request->nombres;
        $secretaria->apellidos = $request->apellidos;
        $secretaria->ci = $request->ci;
        $secretaria->celular = $request->ci;
        $secretaria->fecha_nacimiento = $request->fecha_nacimiento;
        $secretaria->direccion = $request->direccion;
        $secretaria->save();

        $usuario = User::find($secretaria->user->id);

        $usuario->name = $request->nombres;
        $usuario->email = $request->email;

        if($request->filled('password')){
            $usuario->password = Hash::make($request['password']);
         

        }
            $usuario->save();

            return redirect()->route('admin.secretarias.index')
        
        ->with('mensaje', 'Se actualizó al secretario') 
        ->with('icono', 'success'); 
        
        
    }
    public function confirmDelete($id){
        
        $secretaria = Secretaria::with('user')->FindOrFail($id);
        
        return view('admin.secretarias.delete',compact('secretaria'));  

    }

    public function destroy($id){

        $secretaria = Secretaria::find($id);

        //eliminar al usuario asociado

        $user = $secretaria->user;
        $user->delete();

        //eliminar a la secretaria

        $secretaria->delete();
        
        return redirect()->route('admin.secretarias.index')
        
        ->with('mensaje', 'Se eliminó al secretario') 
        ->with('icono', 'success'); 
        
    }
}

        

  

