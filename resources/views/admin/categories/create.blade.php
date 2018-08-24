@extends('layouts.app')

@section('content')
		<div class="card">
			<div class="card-body">
				<h2><div class="card-title">Nueva Categoría</div></h2>
				<div class="card-text">
					{!! Form::open(['action' => 'Admin\CategoryController@store','method' =>'POST']) !!}
				   <div class="form-group">
					    {{ Form::label('category','Categoría') }}
					    {{ Form::text('category','' ,(['class' => 'form-control col-md-5','placeholder'=>'Nombre de Categoria'])) }}
					</div>
		
					<br>
					<hr>
					{{ Form::submit('Guardar',['class'=>'btn btn-success'])}}
					<a href="/categories" class="btn btn-primary">Volver</a>
			{!! Form::close() !!}
				</div>
			</div>
		</div>
	
	


	
	
@endsection
