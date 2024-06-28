@extends('adminlte::page')

@section('title', 'Setting')

@section('content_header')
	<h1>Lista de  puntos de recogida</h1>
@stop

@section('content')

  @if (session('info'))
  <div class="alert alert-success">
    <strong>{{session('info')}}</strong>
  </div>

  @endif
	<div class="card">
        <div class=" card-body">
            <a class="btn btn-primary btn-sm"  href="{{route('admin.puntos.create')}}">Crear punto</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Direccion</th>
                        <th>Descripcion</th>
                        <th>Status</th>
                        <th>Jefe</th>
                        <th>Transporte</th>
                        <th>Imagen</th>
                        <th colspan="2"></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($puntos as $punto)

                        <tr>
                            <td>{{$punto->id}}</td>
                            <td>{{$punto->name}}</td>
                            <td>{{$punto->direccion}}</td>
                            <td>{{$punto->descripcion}}</td>
                            <td>{{$punto->status}}</td>
                            <td>{{$punto->jefe}}</td>
                            <td>{{$punto->transporte}}</td>


                            <td width='10px'>
                                <a href="{{route('admin.puntos.edit',$punto )}}" class="btn btn-primary btn-sm">editar</a>
                            </td>
                            <td width='10px'>
                                <form action="{{route('admin.puntos.destroy',$punto)}}" method="POST" id='eliminar'>
                                    @method('DELETE')
                                    @csrf
                                    <input type="submit" name="process" class="btn btn-primary btn-sm" onclick="Confirmar(event)" value="<?php echo __("Eliminar"); ?>" >
                                   </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
@stop
@section('js')
<script>

   function Confirmar(e){
var mensaje = "Desea confirmar su eliminacion?";

    if (!confirm(mensaje)){
    e.preventDefault();
}}


    </script>
@stop
