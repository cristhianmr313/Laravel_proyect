@extends('adminlte::page')

@section('title', 'Setting')

@section('content_header')
	<h1>Dashboard</h1>
@stop

@section('content')
@if (session('info'))
  <div class="alert alert-success">
    <strong>{{session('info')}}</strong>
  </div>

  @endif
	<p>Editar usuarios</p>

    <div class="card">
        <div class="card-body">
            <p class="h5">Nombre</p>
            <p class="form-control">{{$user->name}}</p>

            <p class="h5">Listado de roles</p>
            {!! Form::model($user, ['route'=>['admin.users.update',$user], 'method'=>'put']) !!}

            @foreach ($roles as $role )

            {!! Form::checkbox('roles[]', $role->id, null, ['class'=>'mr-1']) !!}
            {{$role->name}}

            @endforeach
            <br>
            {!! Form::submit('Asignar roles', ['class'=>'btn btn-primary btn-sm']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
	<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
	<script> console.log('Hi!'); </script>
@stop
