@extends('layouts.app')

@section('content')
		<div class="card">
			<div class="card-body">
				<div class="card-title">Nueva Etiqueta</div>
				<div class="card-text">
					{!! Form::open(['action' => 'Admin\TagController@store','method' =>'POST']) !!}
				   <div class="form-group">
					    {{ Form::label('Slug','Etiqueta') }}
					    {{ Form::text('slug','' ,(['class' => 'form-control col-md-5','placeholder'=>'Nombre de Etiqueta'])) }}
					</div>
		
		
					{{ Form::submit('Guardar',['class'=>'btn btn-success'])}}
			{!! Form::close() !!}
				</div>
			</div>
		</div>
	
	


	
	
@endsection
