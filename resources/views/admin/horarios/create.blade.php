@extends('layouts.admin')
@section('content')
  <div class="row"> 
    <h>
    <h1>Registro de un nuevo horario</h1>
  </div>
  <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title"> Llene los datos </h3>
                </div>    
                    <div class="card-body">
                        <form action="{{url('/admin/horarios/create')}}" method="POST">
                            @csrf
                         
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Dia</label><b>*</b>
                                        <select name="dia" id"" class="form-control">
                                            <option value="LUNES">LUNES</option>
                                            <option value="MARTES">MARTES</option>
                                            <option value="MIERCOLES">MIERCOLES</option>
                                            <option value="JUEVES">JUEVES</option>
                                            <option value="VIERNES">VIERNES</option>
                                            <option value="SABADO">SABADO</option>
                                            <option value="DOMINGO">DOMINGO</option>
                                        </select>
                                    </div>
                                </div>   

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Hora Inicio</label><b>*</b>
                                        <input type="time" value="{{old('hora_inicio')}}" name="hora_inicio" class="form-control" required>
                                        @error('hora_inicio')
                                        <small style="color=red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>   

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Hora Final</label><b>*</b>
                                        <input type="time" value="{{old('hora_final')}}" name="hora_final" class="form-control" required>
                                        @error('hora_final')
                                        <small style="color=red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                                 
                            </div> 
                            
                     <hr>       
                            
                <div class="row">
                    <div class="col-md-6">
                        <div class="form group">
                            <label for="">Doctores</label><b>*</b>
                                <select name="doctor_id" id"" class="form-control">
                                    @foreach ($doctores as $doctore )
                                                                  
                                <option value="{{$doctore->id}}">{{$doctore->nombres." ".$doctore->apellidos."-".$doctore->especialidad}}</option>
                                @endforeach
                                </select>
                    </div>
                </div>

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Consultorios</label><b>*</b>
                                        <select name="consultorio_id" id"" class="form-control">
                                    @foreach ($consultorios as $consultorio )
                                                                  
                                <option value="{{$consultorio->id}}">{{$consultorio->nombre." -- ".$consultorio->ubicacion}}</option>
                                @endforeach
                                </select>
                                    </div>
                                </div>

                                

                                </div>

                                <hr><hr>
                                  
                                        <div class="row">
                                <div class="col-md-12">
                                    <div class="form group">
                                        <a href="{{url('admin/doctores')}}"class="btn btn-secondary">Volver</a>
                                        <button type="submit" class="btn btn-primary">Registrar doctor</button>
                                        
                                    </div>
                                </div>   
                            </div> 
                            </form>

                        </div>
                
                </div>
                        
                </div>
            </div>

        </div>
    </div>
@endsection