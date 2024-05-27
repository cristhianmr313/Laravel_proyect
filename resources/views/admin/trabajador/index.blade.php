@extends('adminlte::page')

@section('title', 'Setting')

@section('content_header')
	<h1>Lista de Trabajadores</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
  <strong>{{session('info')}}</strong>
</div>

@endif
  <div class="card">
      <div class=" card-body">
          <a class="btn btn-primary btn-sm"  href="{{route('admin.trabajadores.create')}}">Crear trabajador</a>
          <table class="table table-striped">
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Direccion</th>
                      <th>Mensaje</th>
                      <th>Telefono</th>
                      <th>Usuario  </th>

                      <th colspan="2"></th>

                  </tr>
              </thead>
              <tbody>
                  @foreach ($trabajadores as $trabajador )
                      <tr>
                          <td>{{$trabajador->id}}</td>
                          <td>{{$trabajador->name}}</td>
                          <td>{{$trabajador->direc}}</td>
                          <td>{{$trabajador->message}}</td>
                          <td>{{$trabajador->phone_number}}</td>
                          <td>{{$trabajador->user_relacionado}}</td>

                          <td width='10px'>
                              <a href="{{route('admin.trabajadores.edit',$trabajador )}}" class="btn btn-primary btn-sm">editar</a>
                          </td>
                          <td width='10px'>
                              <form action="{{route('admin.trabajadores.destroy', $trabajador)}}" method="POST">
                                  @csrf
                                  @method('delete')

                                  <button type="submit" class=" btn btn-danage btn-sm ">Eliminar</button>
                              </form>
                          </td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
      </div>
  </div>
@stop
