@extends('layouts.app')

@section('content')
	
	<h1>Etiquetas</h1>
	
	{!! Form::open(['action' => ['Admin\TagController@update',$tag->id], 'method' =>'POST']) !!}
	   <div class="form-group">
		    {{ Form::label('slug','Etiqueta') }}
		    {{ Form::text('slug',$tag->slug ,(['class' => 'form-control'])) }}
		</div>
		
		{{ Form::hidden('_method','PUT')}}
		{{ Form::submit('Guardar',['class'=>'btn btn-success'])}}
	{!! Form::close() !!}

	
@endsection