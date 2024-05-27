@extends('adminlte::page')

@section('title', 'Setting')

@section('content_header')
	<h1>Crear punto de recogida</h1>
@stop

@section('content')
@if (session('info'))
  <div class="alert alert-succes">
    <strong>{{session('info')}}</strong>
  </div>

  @endif
	<div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'admin.puntos.store', 'method' => 'post','file'=>true ]) !!}
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

                    {!! Form::label('jefe', 'Encargado' ) !!}

                    <select name="jefe" id="jefe" class="form-control">
                        @foreach ($trabajadores as $trabajador )
                            <option value="{{$trabajador->name}}">{{$trabajador->name}}</option>
                        @endforeach
                    </select>
                   @error('jefe')
                   <small class="text-danger">{{$message}}</small>
                    @enderror

                </div>
                <div class="form-group">

                    {!! Form::label('transporte', 'Transporte asignado' ) !!}
                    <select name="transporte" id="transporte" class="form-control">
                        @foreach ($transportes as $transporte )
                            <option value="{{$transporte->name}}">{{$transporte->name}}</option>
                        @endforeach
                    </select>

                   @error('transporte')
                   <small class="text-danger">{{$message}}</small>
                    @enderror

                </div>
                <div>
                    {!! Form::label('image', 'Imagen', ) !!}
                    <br>
                    {!! Form::file('image',  ["class"=>"form-control-file"] ) !!}
                </div>
                <div class="form-group">
                    <p class="font-weight-bold">Estado</p>
                    <label >
                        {!! Form::radio('status','1', true) !!}
                        Publicado
                    </label>

                    <label >
                        {!! Form::radio('status','2',) !!}
                        Borrador
                    </label>




                </div>
                {!! Form::submit('Crear punto', ['class'=>'btn btn-primary btn-sm']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop
