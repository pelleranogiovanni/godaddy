@extends('layouts.app')

@section('content')
		<div class="card">
			<div class="card-body">
				<div class="card-title">Nueva Imagenes para el post N {{$post->id}}</div>
				<div class="card-text">
			{!! Form::open(['action' => 'Admin\ImageController@store', 'file'=>true,'method' =>'POST','enctype' => 'multipart/form-data']) !!}
					{{ Form::hidden('post_id', $post->id, array('id' => 'invisible_id')) }}
				   <div class="form-group">
					    {{ Form::label('titulo','Titulo') }}
					    {{ Form::text('titulo','' ,(['class' => 'form-control col-md-5','placeholder'=>'Titulo'])) }}
					</div>
				<div class="form-group">
					    {{ Form::label('file','Imagen') }}
					    {{ Form::file('foto[]') }}
					</div>
					<div class="form-group">
					    {{ Form::label('file','Imagen') }}
					    {{ Form::file('foto[]') }}
					</div>
					
					{{ Form::submit('Guardar',['class'=>'btn btn-success'])}}
			{!! Form::close() !!}
				</div>
			</div>
		</div>
	
	


	
	
@endsection
