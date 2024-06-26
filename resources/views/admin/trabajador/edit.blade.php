@extends('adminlte::page')

@section('title', 'Setting')

@section('content_header')
	<h1>Editar Trabajador</h1>
@stop

@section('content')
	<div class="card">
        <div class="card-body">

            <div class="form-group">

                <div class="form-group">
                    {!! Form::model($trabajadore, ['route'=>['admin.trabajadores.update',$trabajadore],'method'=>'put']) !!}
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

                    @error('name')
                    <small class="text-danger">{{$message}}</small>

                    @enderror
                </div>
                <div class="form-group">

                    {!! Form::label('user_relacionado', 'Usuario' ) !!}
                    <br>
                   <select name="user_relacionado" id="user_relacionado">
                    @foreach ($users as $user )
                        <option value="{{$user->name}}">{{$user->name}}</option>
                    @endforeach
                   </select>
                   @error('jefe')
                   <small class="text-danger">{{$message}}</small>

                   @enderror

                </div>
            {!! Form::submit('Editar Trabajador', ['class'=>'btn btn-primary btn-sm']) !!}

        {!! Form::close() !!}
        </div>
    </div>
@stop

