@extends('layouts.admin')
@section('content')
  <div class="row"> 
    <h>
    <h1>Registro de un nuevo paciente</h1>
  </div>
  <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title"> Llene los datos </h3>
                </div>    
                    <div class="card-body">
                        <form action="{{url('/admin/pacientes/create')}}" method="POST">
                            @csrf
                         
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Nombre</label><b>*</b>
                                        <input type="text" value="{{old('nombres')}}" name="nombres" class="form-control" required>
                                        @error('nombres')
                                        <small style="color=red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>   

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Apellidos</label><b>*</b>
                                        <input type="text" value="{{old('apellidos')}}" name="apellidos" class="form-control" required>
                                        @error('apellidos')
                                        <small style="color=red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>   

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">DNI</label><b>*</b>
                                        <input type="number" value="{{old('ci')}}" name="ci" class="form-control" required>
                                        @error('ci')
                                        <small style="color=red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                </div>

                                                        
                            
                            
                            <div class="row">

                            <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Obra social</label><b>*</b>
                                        <input type="number" value="{{old('nro_seguro')}}" name="nro_seguro" class="form-control" required>
                                        @error('nro_seguro')
                                        <small style="color=red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Fecha de nacimiento</label><b>*</b>
                                        <input type="date" value="{{old('fecha_nacimiento')}}" name="fecha_nacimiento" class="form-control" required>
                                        @error('fecha_nacimiento')
                                        <small style="color=red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Género</label>
                                        <select name="genero" id="" class="form-control">
                                            <option value="M">Masculino</option>
                                            <option value="F">Femenino</option>
                                            <option value="O">Otro</option>
                                        </select>
                                        
                                    </div>
                                </div>
                                </div>

                                <div class="row">
                            <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Celular</label><b>*</b>
                                        <input type="number" value="{{old('celular')}}" name="celular" class="form-control" required>
                                        @error('celular')
                                        <small style="color=red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                                  
                                
                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Email</label><b>*</b>
                                        <input type="email" value="{{old('correo')}}" name="correo" class="form-control" required>
                                        @error('correo')
                                        <small style="color=red">{{$message}}</small>
                                        @enderror

                                    </div>
                                </div>   

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Domicilio</label><b>*</b>
                                        <input type="address" value="{{old('direccion')}}" name="direccion" class="form-control" required>
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
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="0+">0+</option>
                                            <option value="O-">O-</option>
                                            
                                        </select>
                                        
                                    </div>
                                </div>
                                

                                                          
                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Contacto de emergencia</label><b>*</b>
                                        <input type="number" value="{{old('contacto_emergencia')}}" name="contacto_emergencia" class="form-control" required>
                                        @error('contacto_emergencia')
                                        <small style="color=red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Alergias</label><b>*</b>
                                        <input type="text" value="{{old('alergias')}}" name="alergias" class="form-control" required>
                                        @error('alergias')
                                        <small style="color=red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Medicación</label><b>*</b>
                                        <input type="text" value="{{old('medicacion')}}" name="medicacion" class="form-control" required>
                                        @error('medicacion')
                                        <small style="color=red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                
                                

                                <div class="col-md-8">
                                    <div class="form group">
                                        <label for="">Observaciones</label><b>*</b>
                                        <input type="text" value="{{old('observaciones')}}" name="observaciones" class="form-control" required>
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
                                        <button type="submit" class="btn btn-primary">Registrar paciente</button>
                                        
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