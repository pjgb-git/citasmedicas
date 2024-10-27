@extends('layouts.admin')
@section('content')
  <div class="row"> 
    <h>
    <h1>Consultorio: {{$consultorio->nombre}}</h1>
  </div>
  <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">¿Desea eliminar el consultorio? </h3>
                </div>    
                    <div class="card-body">
                    <form action="{{url('/admin/consultorios',$consultorio->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                        
                         
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Nombre del consultorio</label>
                                        <p>{{$consultorio->nombre}}</p>
                                    </div>
                                </div>   

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">ubicacion</label>
                                        <p>{{$consultorio->ubicacion}}</p>
                                    </div>
                                </div>   

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Capacidad</label>
                                        <p>{{$consultorio->capacidad}}</p>
                                    </div>
                                </div>
                                </div>

                                                        
                            
                            
                            <div class="row">

                            <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Telefono</label>
                                        <p>{{$consultorio->telefono}}</p>
                                    </div>
                                </div>

                                

                                                                                 
                                
                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">especialidad</label>
                                        <p>{{$consultorio->especialidad}}</p>

                                    </div>
                                </div>   

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Estado</label>
                                        <p>{{$consultorio->estado}}</p>
                                           
                                        </select>
                                        
                                    </div>
                                </div>

                                
                                
                                </div>
                             
<hr>
          

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form group">
                                        <a href="{{url('admin/consultorios')}}"class="btn btn-secondary">Cancelar</a>
                                        <button type="submit" class="btn btn-danger">Eliminar consultorio</button>
                                        
                                        
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