@extends('adminlte::page')

@section('title', 'Setting')

@section('content_header')
	<h1>Comentarios</h1>
@stop

@section('content')

@if (session('info'))
<div class="alert alert-success">
  <strong>{{session('info')}}</strong>
</div>

@endif
  <div class="card">
      <div class=" card-body">

          <table class="table table-striped">
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Asunto</th>
                      <th>Mensaje</th>
                      <th>Correo</th>



                      <th colspan="2"></th>

                  </tr>
              </thead>
              <tbody>
                  @foreach ($chats as $chat )
                      <tr>
                          <td>{{$chat->id}}</td>
                          <td>{{$chat->name}}</td>
                          <td>{{$chat->asunto}}</td>
                          <td>{{$chat->text}}</td>
                          <td>{{$chat->email}}</td>


                         {{--  <td width='10px'>
                              <a href="{{route('admin.trabajadores.edit',$trabajador )}}" class="btn btn-primary btn-sm">editar</a>
                          </td> --}}
                          <td width='10px'>
                            <form action="{{route('chat.destroy',$chat)}}" method="POST" id='eliminar'>
                                @method('DELETE')
                                @csrf
                                <input type="submit" name="process" class="btn btn-primary btn-sm" onclick="Confirmar(event)" value="<?php echo __("Eliminar"); ?>" >
                               </form>
                        </td>
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
