@extends('layouts.admin')
@section('content')
  <div class="row"> 
    <h>
    <h1>Doctor: {{$doctor->nombres}}  {{$doctor->apellidos}}</h1>
  </div>
  <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title"> ¿Desea eliminar a este doctor? </h3>
                </div>    
                    <div class="card-body">
                    <form action="{{url('/admin/doctores',$doctor->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                        
                         
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Nombre</label>
                                        <p>{{$doctor->nombres}}</p>
                                    </div>
                                </div>   

                                <div class="col-md-4">
                                    <div class="form group">
                                    <label for="">Apellido</label>
                                    <p>{{$doctor->apellidos}}</p>
                                    </div>
                                </div>   

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Teléfono</label>
                                        <p>{{$doctor->telefono}}</p>
                                    </div>
                                </div>
                                                 
                            </div> 
                            
                            
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Licencia Médica</label>
                                        <p>{{$doctor->licencia_medica}}</p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Especialidad</label>
                                        <p>{{$doctor->especialidad}}</p>
                                    </div>
                                </div>

                                

                                </div>
                                  
                                <class="row">
                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Email</label>
                                        <p>{{$doctor->user->email}}</p>

                                    </div>
                                </div>   
                            

                                                          
                                 

                            
                        <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form group">
                                        <a href="{{url('admin/doctores')}}"class="btn btn-secondary">Cancelar</a>
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                        
                                        
                                        
                                    </div>
                                </div>   
                            </div> 
                            

                        </div>
                
                </div>
                        
                </div>
            </div>

        </div>
    </div>
@endsection