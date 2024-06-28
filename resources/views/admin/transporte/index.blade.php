@extends('adminlte::page')

@section('title', 'Setting')

@section('content_header')
	<h1>Listar transporte</h1>
@stop

@section('content')

  @if (session('info'))
  <div class="alert alert-success">
    <strong>{{session('info')}}</strong>
  </div>

  @endif
	<div class="card">
        <div class=" card-body">
            <a class="btn btn-primary btn-sm"  href="{{route('admin.transportes.create')}}">Crear transporte</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Tipo de transporte</th>
                        <th>Jefe del trasnporte</th>
                        <th colspan="2"></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($transportes as $transporte )
                        <tr>
                            <td>{{$transporte->id}}</td>
                            <td>{{$transporte->name}}</td>
                            <td>{{$transporte->tipo_transporte}}</td>
                            <td>{{$transporte->jefe}}</td>
                            <td width='10px'>
                                <a href="{{route('admin.transportes.edit',$transporte )}}" class="btn btn-primary btn-sm">editar</a>
                            </td>
                            <td width='10px'>
                                <form action="{{route('admin.transportes.destroy',$transporte)}}" method="POST" id='eliminar'>
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
