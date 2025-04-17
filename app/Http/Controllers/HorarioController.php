<?php

namespace App\Http\Controllers;
use App\Models\Horario;
use App\Models\Doctor;
use App\Models\Consultorio;
use Illuminate\Http\Request;



class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $horarios = Horario::witch('doctor','consultorio')->get();
        return view('admin.horarios.index',compact('horarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $doctores = Doctor::all();
        $consultorios = Consultorio::all();
        return view('admin.horarios.create',compact('doctores', 'consultorios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'dia' => 'required',
            'hora_inicio' => 'required',
            'hora_fin' => 'required',
            
       ]);
       Horario::create($request->all());

       return redirect()->route('admin.horarios.index')
        
        ->with('mensaje', 'Se registró el horario') 
        ->with('icono', 'success'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Horario $horario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Horario $horario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Horario $horario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Horario $horario)
    {
        //
    }
}
