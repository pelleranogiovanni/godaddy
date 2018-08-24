@extends('layouts.app')

@section('content')
	
	<h2>Editar Categoría</h2>
	
	{!! Form::open(['action' => ['Admin\CategoryController@update',$category->id], 'method' =>'POST']) !!}
	   <div class="form-group">
		    {{ Form::label('category','Categoría') }}
		    {{ Form::text('category',$category->category ,(['class' => 'form-control'])) }}
		</div>
		
		<hr>
		{{ Form::hidden('_method','PUT')}}
		{{ Form::submit('Guardar',['class'=>'btn btn-success'])}}
		<a href="/categories" class="btn btn-primary">Volver</a>
	{!! Form::close() !!}

	
@endsection