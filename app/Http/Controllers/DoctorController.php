<?php
namespace App\Http\Controllers;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;   





class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctores = Doctor::with('user')->get();
        return view('admin.doctores.index',compact('doctores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.doctores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       //$datos = request()->all();
       //return response()->json($datos);
       $request->validate([
        'nombres' => 'required',
        'apellidos' => 'required',
        'telefono' => 'required',
        'licencia_medica' => 'required',
        'especialidad' => 'required',
        'email' => 'required|max:250|unique:users',
        'password' =>'required|max:250|confirmed',
       ]);

       $usuario = new User();
       $usuario->name = $request->nombres;
       $usuario->email = $request->email;
       $usuario->password = Hash::make($request['password']);
       $usuario->save();

       $doctor = new Doctor();
       $doctor->user_id = $usuario->id;
       $doctor->nombres = $request->nombres;
       $doctor->apellidos = $request->apellidos;
       $doctor->telefono = $request->telefono;
       $doctor->licencia_medica = $request->licencia_medica;
       $doctor->especialidad = $request->especialidad;
       
       $doctor->save();

       return redirect()->route('admin.doctores.index')
       
       ->with('mensaje', 'Se registró al doctor') 
       ->with('icono', 'success'); 
   
        

    }
          
    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $doctor = Doctor::FindOrFail($id);
        return view('admin.doctores.show',compact('doctor'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $doctor = Doctor::FindOrFail($id);
        return view('admin.doctores.edit',compact('doctor'));
          
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $doctor = Doctor::find($id);

        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'telefono' => 'required',
            'licencia_medica' => 'required',
            'especialidad' => 'required',
            'email' => 'required|max:250|unique:users,email,'.$doctor->user->id,
            'password' =>'nullable|max:250|confirmed',

       ]);
       $doctor->nombres = $request->nombres;
        $doctor->apellidos = $request->apellidos;
        $doctor->telefono = $request->telefono;
        $doctor->licencia_medica = $request->licencia_medica;
        $doctor->especialidad = $request->especialidad;
        $doctor->save();

        $usuario = User::find($doctor->user->id);

        $usuario->name = $request->nombres;
        $usuario->email = $request->email;

        if($request->filled('password')){
            $usuario->password = Hash::make($request['password']);
         

        }
            $usuario->save();

            return redirect()->route('admin.doctores.index')
        
        ->with('mensaje', 'Se actualizó al doctor') 
        ->with('icono', 'success'); 
        
        
    }
    public function confirmDelete($id){
        
        $doctor = Doctor::with('user')->FindOrFail($id);
        
        return view('admin.doctores.delete',compact('doctor'));  

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $doctor = Doctor::find($id);

        //eliminar al usuario asociado

        $user = $doctor->user;
        $user->delete();

        //eliminar a la secretaria

        $doctor->delete();
        
        return redirect()->route('admin.doctores.index')
        
        ->with('mensaje', 'Se eliminó al doctor') 
        ->with('icono', 'success'); 
    }

}