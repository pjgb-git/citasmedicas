@extends('layouts.admin')
@section('content')
  <div class="row"> 
    <h>
    <h1>Panel Principal</h1>
     
  </div>
  <hr>

  <div class="row"> 
  <div class="col-lg-3 col-4">

    <div class="small-box bg-info">
      <div class="inner">
        <h3>{{$total_usuarios}}</h3>
        <p>Usuarios</p>
      </div>
      <div class="icon">
        <i class "ion ion-bag" style="color:white"><i class="fas bi bi-people-fill"></i></i>        
      </div>
      <a href="{{url('admin/usuarios')}}" class="small-box-footer">Más información <i class="fas bi bi-people-fill"></i></a>
      
      </div>
      </div>

      <div class="col-lg-3 col-4">

    <div class="small-box bg-success">
      <div class="inner">
        <h3>{{$total_secretarias}}</h3>
        <p>Secretarias</p>
      </div>
      <div class="icon">
        <i class "ion ion-bag" style="color:white"><i class="fas bi bi-person-circle"></i></i>        
      </div>
      <a href="{{url('admin/secretarias')}}" class="small-box-footer">Más información <i class="fas bi bi-people-fill"></i></a>
      
      </div>
      </div>
      <div class="col-lg-3 col-4">
      <div class="small-box bg-warning">
      <div class="inner">
        <h3>{{$total_pacientes}}</h3>
        <p>Pacientes</p>
      </div>
      <div class="icon">
        <i class "ion ion-bag" style="color:white"><i class="fas bi bi-person-fill-check"></i></i>        
      </div>
      <a href="{{url('admin/pacientes')}}" class="small-box-footer">Más información <i class="fas bi bi-people-fill"></i></a>
      
      </div>
      </div>

      </div>

      <div class="col-lg-3 col-6">
      <div class="small-box bg-danger">
      <div class="inner">
        <h3>{{$total_consultorios}}</h3>
        <p>Consultorios</p>
      </div>
      <div class="icon">
        <i class "ion ion-bag" style="color:white"><i class="fas bi bi-building-fill-add"></i></i>        
      </div>
      <a href="{{url('admin/consultorios')}}" class="small-box-footer">Más información <i class="fas bi bi-people-fill"></i></a>
      
      </div>
      </div>
  
  </div>
@endsection