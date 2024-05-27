@extends('adminlte::page')

@section('title', 'Setting')

@section('content_header')
	<h1>Editar punto de recogida</h1>
@stop

@section('content')
@if (session('info'))
  <div class="alert alert-succes">
    <strong>{{session('info')}}</strong>
  </div>

  @endif
	<div class="card">
        <div class="card-body">
            {!! Form::model($punto, ['route'=>['admin.puntos.update',$punto],'method'=>'put']) !!}
                <div class="form-group">

                    {!! Form::label('name', 'Nombre' ) !!}

                    {!! Form::text('name', null, ['class'=>'form-control']) !!}

                    @error('name')
                    <small class="text-danger">{{$message}}</small>

                    @enderror
                </div>
                <div class="form-group">

                    {!! Form::label('direccion', 'Direccion' ) !!}

                    {!! Form::text('direccion', null, ['class'=>'form-control']) !!}
                    @error('direccion')
                    <small class="text-danger">{{$message}}</small>

                    @enderror
                </div>
                <div class="form-group">

                    {!! Form::label('descripcion', 'Descripcion' ) !!}

                    {!! Form::text('descripcion', null, ['class'=>'form-control']) !!}
                   @error('jefe')
                   <small class="text-danger">{{$message}}</small>
                    @enderror

                </div>
                <div class="form-group">
                    {!! Form::label('status', 'Status' ) !!}
                    <br>
                    {!! Form::label('status', 'Activo' ) !!}
                    {!! Form::checkbox('status','1',['class'=>'form-control']) !!}
                    {!! Form::label('status', 'En actualizacion' ) !!}
                    {!! Form::checkbox('status','2',['class'=>'form-control']) !!}

                </div>
                {!! Form::submit('Actualizar punto', ['class'=>'btn btn-primary btn-sm']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop
