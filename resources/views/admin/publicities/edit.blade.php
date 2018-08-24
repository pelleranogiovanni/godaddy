@extends('layouts.app')

@section('content')
	
	<h1>Categorias</h1>
	
	{!! Form::open(['action' => ['Admin\CategoryController@update',$category->id], 'method' =>'POST']) !!}
	   <div class="form-group">
		    {{ Form::label('category','Etiqueta') }}
		    {{ Form::text('category',$category->category ,(['class' => 'form-control'])) }}
		</div>
		
		{{ Form::hidden('_method','PUT')}}
		{{ Form::submit('Guardar',['class'=>'btn btn-success'])}}
	{!! Form::close() !!}

	
@endsection