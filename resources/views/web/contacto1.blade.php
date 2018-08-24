@extends('layouts.app')
@section('content')
	
	<div class="card col-md-10 ml-3">
		<div class="card-body">
			<div class="card-title">Contacto</div>
				<div class="col-md-8">
					<section class="mt-5 pt-5">
				    <h3 class="text-uppercase text-center">Formulario de contacto</h3>
				    <p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus hic sint non rem quibusdam. Dicta facilis dignissimos deserunt, mollitia dolores.</p>
				</div>
				<div class="card-text">
					{!! Form::open(['action' => 'Web\PageController@mail', 'file'=>true,'method' =>'POST','enctype' => 'multipart/form-data']) !!}
						   <div class="form-group">
							    {{ Form::label('nombre','Nombre') }}
							    {{ Form::text('nombre','' ,(['class' => 'form-control col-md-5','placeholder'=>'Nombre'])) }}
							</div>
					
							<div class="form-group">
							    {{ Form::label('email','Email') }}
							    {{ Form::email('email','' ,(['class' => 'form-control col-md-5','placeholder'=>'Email'])) }}
							</div>
							<div class="form-group">
							    {{ Form::label('asunto','Asunto') }}
							    {{ Form::text('asunto','' ,(['class' => 'form-control col-md-5','placeholder'=>'Asunto'])) }}
							</div>
							<div class="form-group">
							    {{ Form::label('mensaje','Mensaje') }}
							    {{ Form::textarea('mensaje','' ,(['class' => 'form-control col-md-5','placeholder'=>'Mensaje'])) }}
							</div>
		
					{{ Form::submit('Enviar',['class'=>'btn btn-success'])}}
					{!! Form::close() !!}



				</div>
	
			</div>
	
		</div>
	

@endsection

