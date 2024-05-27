@extends('adminlte::page')

@section('title', 'Setting')

@section('content_header')
	<h1>Crear un trabajador</h1>
@stop

@section('content')
@if (session('info'))
  <div class="alert alert-succes">
    <strong>{{session('info')}}</strong>
  </div>

  @endif
	<div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'admin.trabajadores.store', 'method' => 'post' ]) !!}
                <div class="form-group">

                    {!! Form::label('name', 'Nombre' ) !!}
                    <br>
                    {!! Form::text('name', null, ['class'=>'form-control']) !!}

                    @error('name')
                    <small class="text-danger">{{$message}}</small>

                    @enderror
                </div>
                <div class="form-group">

                    {!! Form::label('direc', 'Direccion' ) !!}
                    <br>
                    {!! Form::text('direc', null, ['class'=>'form-control']) !!}
                    @error('direc')
                    <small class="text-danger">{{$message}}</small>

                    @enderror
                </div>
                <div class="form-group">

                    {!! Form::label('message', 'Descripcion del trabajador' ) !!}
                    <br>
                    {!! Form::text('message', null, ['class'=>'form-control']) !!}

                    @error('message')
                    <small class="text-danger">{{$message}}</small>

                    @enderror
                </div>
                <div class="form-group">

                    {!! Form::label('phone_number', 'Numero de telefono' ) !!}
                    <br>
                    {!! Form::number('phone_number', null, ['class'=>'form-control']) !!}

                    @error('phone_number')
                    <small class="text-danger">{{$message}}</small>

                    @enderror
                </div>
                <div class="form-group">

                    {!! Form::label('user_relacionado', 'Usuario relacionado' ) !!}
                    <br>
                   <select name="user_relacionado" id="user_relacionado">
                    @foreach ($users as $user )
                        <option value="{{$user->name}}">{{$user->name}}</option>
                    @endforeach
                   </select>
                   @error('user_relacionado')
                   <small class="text-danger">{{$message}}</small>

                   @enderror

                </div>
                {!! Form::submit('Crear trabajador', ['class'=>'btn btn-primary btn-sm']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop
