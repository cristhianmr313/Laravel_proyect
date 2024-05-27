@extends('adminlte::page')

@section('title', 'Setting')

@section('content_header')
	<h1>Editar transporte</h1>
@stop

@section('content')
	<div class="card">
        <div class="card-body">
            {!! Form::model($transporte,['route'=>['admin.transportes.update',  $transporte],'method'=>'put'] ) !!}
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
            {!! Form::submit('Editar Categorias', ['class'=>'btn btn-primary btn-sm']) !!}

        {!! Form::close() !!}
        </div>
    </div>
@stop
