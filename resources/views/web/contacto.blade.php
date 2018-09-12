@extends('layouts.web')

@section('content')
	<div class="container-fluid">	
		<div class="row">
			
 
			<div class="col-md-6 border-top">
				<section class="">
					    <div class="div mt-3">
					    <h3 class="text-uppercase text-left">Formulario de contacto</h3>
					    <p class="lead text-left">Contactate con nosotros y dejanos tu consulta.</p>
					    </div>
					    <div class="card-text">
							{!! Form::open(['action' => 'Web\PageController@mail', 'file'=>true,'method' =>'POST','enctype' => 'multipart/form-data']) !!}
								   	<div class="row">
								   		
								   	
								   	<div class="form-group col-md-5">
									    {{ Form::label('nombre','Nombre') }}
									    {{ Form::text('nombre','' ,(['class' => 'form-control col-md-12','placeholder'=>'Nombre'])) }}
									</div>
							
									<div class="form-group col-md-5">
									    {{ Form::label('email','Email') }}
									    {{ Form::email('email','' ,(['class' => 'form-control col-md-12','placeholder'=>'Email'])) }}
									</div>
									</div>
									<div class="row">
									<div class="form-group col-md-10">
									    {{ Form::label('asunto','Asunto') }}
									    {{ Form::text('asunto','' ,(['class' => 'form-control col-md-12','placeholder'=>'Asunto'])) }}
									</div>
									</div>
									<div class="row">
									<div class="form-group col-md-10">
									    {{ Form::label('mensaje','Mensaje') }}
									    {{ Form::textarea('mensaje','' ,(['class' => 'form-control col-md-12','placeholder'=>'Mensaje'])) }}
									</div>
									</div>
				
							{{ Form::submit('Enviar',['class'=>'btn btn-outline-dark btn-sm mb-5'])}}
							{!! Form::close() !!}

						</div>
			</div>

			<div class="col-md-6 border-top">
				<div class="div mt-3">
					<h3 class="text-uppercase text-left">Datos de Contacto</h3>
					<p class="lead text-left">Encontranos también en</p>
				</div>
				
				<div class="div border-bottom">
					<p><i class="fas fa-home text-secondary"></i> Formosa y Av. Juan B. Alberdi - Villa Ángela, Chaco</p>
					<p><i class="fas fa-envelope text-secondary"></i> silvaluis905@yahoo.com.ar</p>
					<p><i class="fas fa-phone text-secondary"></i> 03735 - 412143</p>
				</div>
				
				<div class="div mt-3 mb-5">
					<h3 class="text-uppercase text-left">Ubicación</h3>
					    <p class="lead text-left">¿Cómo llegar?</p>
					    <div class="card-text">
					    	
					    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5001.325310119678!2d-60.71754361450341!3d-27.5789223088283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9447a9cbafa4b00d%3A0x352026c8b643cdc8!2sJuan+Bautista+Alberdi+%26+Formosa%2C+Villa+Angela%2C+Chaco!5e0!3m2!1ses-419!2sar!4v1536162335781" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
						
						</div>
				</div>			
			</div>
		</div>
	</div>

	{{-- <div class="card col-md-12">
		
		<div class="card-body">
			<div class="card-title"></div>
				<div class="row">
					<div class="col-md-8">
						<section class="mt-5 pt-5">
					    <h3 class="text-uppercase text-center">Formulario de contacto</h3>
					    <p class="lead text-center">Contactate con nosotros y dejanos tu consulta.</p>
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
					
					<div class="col-md-4">
						<section class="mt-5 pt-5">
					    <h3 class="text-uppercase text-center">Ubicacion</h3>
					    <p class="lead text-center">Como llegar?</p>
					    <div class="card-text">
					    	
					    	<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14144.777433378571!2d-60.72438138022462!3d-27.587503299999995!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sar!4v1529760019758" width="300" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
						
						</div>
					</div>
					


				</div>
				

		</div>


	</div> --}}


@endsection