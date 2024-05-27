@extends('adminlte::page')

@section('title', 'Setting')

@section('content_header')
	<h1>Crear transporte</h1>
@stop

@section('content')
@if (session('info'))
  <div class="alert alert-succes">
    <strong>{{session('info')}}</strong>
  </div>

  @endif
	<div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'admin.transportes.store', 'method' => 'post' ]) !!}
                <div class="form-group">

                    {!! Form::label('name', 'Nombre' ) !!}
                    <br>
                    {!! Form::text('name', null, ['class'=>'form-control']) !!}

                    @error('name')
                    <small class="text-danger">{{$message}}</small>

                    @enderror
                </div>
                <div class="form-group">

                    {!! Form::label('tipo_transporte', 'Tipo de transporte' ) !!}
                    <br>
                    {!! Form::text('tipo_transporte', null, ['class'=>'form-control']) !!}
                    @error('tipo_transporte')
                    <small class="text-danger">{{$message}}</small>

                    @enderror
                </div>
                <div class="form-group">

                    {!! Form::label('jefe', 'Jefe del transporte' ) !!}
                    <br>
                   <select name="jefe" id="jefe">
                    @foreach ($trabajador_name as $trabajador )
                        <option value="{{$trabajador->name}}">{{$trabajador->name}}</option>
                    @endforeach
                   </select>
                   @error('jefe')
                   <small class="text-danger">{{$message}}</small>

                   @enderror

                </div>
                {!! Form::submit('Crear Categorias', ['class'=>'btn btn-primary btn-sm']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop
