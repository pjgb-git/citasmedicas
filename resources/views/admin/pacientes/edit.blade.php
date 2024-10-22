@extends('layouts.admin')
@section('content')
  <div class="row"> 
    <h>
    <h1>Modificar paciente: {{$paciente->nombres}} {{$paciente->apellidos}}</h1>
  </div>
  <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title"> Llene los datos </h3>
                </div>    
                    <div class="card-body">
                        <form action="{{url('/admin/pacientes',$paciente->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                         
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Nombre</label>
                                        <input type="text" value="{{$paciente->nombres}}" name="nombres" class="form-control">
                                        @error('nombres')
                                        <small style="color=red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>   

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Apellidos</label>
                                        <input type="text" value="{{$paciente->apellidos}}" name="apellidos" class="form-control" >
                                        @error('apellidos')
                                        <small style="color=red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>   

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">DNI</label>
                                        <input type="number" value="{{$paciente->ci}}" name="ci" class="form-control">
                                        @error('ci')
                                        <small style="color=red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                </div>

                                                        
                            
                            
                            <div class="row">

                            <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Obra social</label>
                                        <input type="number" value="{{$paciente->nro_seguro}}" name="nro_seguro" class="form-control" >
                                        @error('nro_seguro')
                                        <small style="color=red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Fecha de nacimiento</label>
                                        <input type="text" value="{{$paciente->fecha_nacimiento}}" name="fecha_nacimiento" class="form-control" >
                                        @error('fecha_nacimiento')
                                        <small style="color=red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Género</label>
                                        <select name="genero" id="" class="form-control">
                                            
                                            <option value="M"@selected($paciente->genero == 'M')>Masculino</option>
                                            <option value="F"@selected($paciente->genero == 'F')>Femenino</option>
                                            <option value="O"@selected($paciente->genero == 'O')>Otro</option>
                                            
                                            
                                            
                                        </select>
                                        
                                    </div>
                                </div>
                                </div>

                                <div class="row">
                            <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Celular</label>
                                        <input type="text" value="{{$paciente->celular}}" name="celular" class="form-control">
                                        @error('celular')
                                        <small style="color=red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                                  
                                
                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Email</label>
                                        <input type="email" value="{{$paciente->correo}}" name="correo" class="form-control">
                                        @error('correo')
                                        <small style="color=red">{{$message}}</small>
                                        @enderror

                                    </div>
                                </div>   

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Domicilio</label>
                                        <input type="address" value="{{$paciente->direccion}}" name="direccion" class="form-control">
                                        @error('direccion')
                                        <small style="color=red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                </div>

                                <div class="row">
                                <div class="col-md-4">
                                    <div class="form group">
                                    <label for="">Grupo sanguíneo</label>
                                       <select name="grupo_sanguineo" id="" class="form-control">
                                        <option value="A+"@selected($paciente->grupo_sanguineo == 'A+')>A+</option>
                                        <option value="A-"@selected($paciente->grupo_sanguineo == 'A-')>A-</option>
                                        <option value="B+"@selected($paciente->grupo_sanguineo == 'B+')>B+</option>
                                        <option value="B-"@selected($paciente->grupo_sanguineo == 'B-')>B-</option>
                                        <option value="AB+"@selected($paciente->grupo_sanguineo == 'AB+')>AB+</option>
                                        <option value="AB-"@selected($paciente->grupo_sanguineo == 'AB-')>AB-</option>
                                        <option value="0+"@selected($paciente->grupo_sanguineo == 'O+')>0+</option>
                                        <option value="O-"@selected($paciente->grupo_sanguineo == 'O-')>O-</option>
                                            
                                    </select>
                                        
                                    </div>
                                </div>
                                

                                                          
                        <div class="col-md-4">
                            <div class="form group">
                            <label for="">Contacto de emergencia</label>
                            <input type="text" 
                            value="{{$paciente->contacto_emergencia}}" name="contacto_emergencia" class="form-control">
                            @error('contacto_emergencia')
                            <small style="color=red">{{$message}}</small>
                            @enderror
                        </div>
                            </div>

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Alergias</label>
                                        <input type="text" value="{{$paciente->alergias}}" name="alergias" class="form-control">
                                        @error('alergias')
                                        <small style="color=red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Medicación</label>
                                        <input type="text" value="{{$paciente->medicacion}}" name="medicacion" class="form-control">
                                        @error('medicacion')
                                        <small style="color=red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                
                                

                                <div class="col-md-8">
                                    <div class="form group">
                                        <label for="">Observaciones</label>
                                        <input type="text" value="{{$paciente->observaciones}}" name="observaciones" class="form-control">
                                        @error('observaciones')
                                        <small style="color=red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>

                                
                                </div>
                             
<hr>
          

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form group">
                                        <a href="{{url('admin/pacientes')}}"class="btn btn-secondary">Volver</a>
                                        <button type="submit" class="btn btn-success">Actualizar paciente</button>
                                        
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