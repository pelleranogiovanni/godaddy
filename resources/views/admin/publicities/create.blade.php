@extends('layouts.app')

@section('content')
		<div class="card">
			<div class="card-body col-md-10">
				<h2><div class="card-title">Nueva Publicidad</div></h2>
				<div class="card-text">
					{!! Form::open(['action' => 'Admin\PublicitiesController@store', 'file'=>true,'method' =>'POST','enctype' => 'multipart/form-data']) !!}
				   <div class="form-group">
					    {{ Form::label('titulo','Titulo') }}
					    {{ Form::text('titulo','' ,(['class' => 'form-control col-md-5','placeholder'=>'Título de la Imagen'])) }}
					</div>
					
					<br><br>
					<div class="form-group">
					    {{ Form::label('foto','Imagen') }}
					    {{ Form::file('foto[]') }}
					</div>
					
					<hr>
					{{ Form::submit('Guardar',['class'=>'btn btn-success'])}}
					
					<a href="{{route('publicities.index')}}" class="btn btn-primary ml-md-auto">Volver</a>

			{!! Form::close() !!}
				</div>
			</div>
		</div>
	
	


	
	
@endsection
