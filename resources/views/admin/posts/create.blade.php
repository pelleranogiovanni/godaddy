@extends('layouts.app')

@section('content')
	
<div class="card col-md-10 ml-3">
		<div class="card-body">
			<h2><div class="card-title">Nuevo Post</div></h2>
				<div class="card-text">
						{!! Form::open(['action' => 'Admin\PostController@store', 'file'=>true,'method' =>'POST','enctype' => 'multipart/form-data']) !!}
						   <div class="form-group">
							    {{ Form::label('title','Título') }}
							    {{ Form::text('titulo','' ,(['class' => 'form-control col-md-5','placeholder'=>'Título', 'maxlength'=>'40'])) }}
							</div>
					<br>
					<br>
					<div class="form-group">
					    {{ Form::label('description','Descripción') }}
					    {{ Form::text('descripcion','' ,(['class' => 'form-control','maxlength'=>'120','placeholder'=>'Descripción'])) }}
					</div>
					<div class="form-group">
					    {{ Form::label('body','Contenido') }}
					    {{ Form::textarea('contenido','' ,(['class' => 'form-control ckeditor','placeholder'=>'Contenido','id'=>'article-ckeditor'])) }}
					</div>
					<div class="form-group">
					    {{ Form::label('category','Categoría') }}
					    
					   {{--  {{ Form::select('category',$categories,(['class' => 'form-control'])) }} --}}
					    <select class="form-control m-bot15" name="category_id">
			           @if($categories->count() > 0)
			          @foreach($categories as $category)
			           <option value="{{$category->id}}">{{$category->category}}</option>
			          @endforeach
			          @else
			           No Record Found
			            @endif   
			        </select>
					</div>
					<h3>Seleccionar Imagenes</h3>
					
					<div class="form-group">
					    {{ Form::label('file','Imagen de Portada') }}
					   
					    {{ Form::file('file') }}
					</div>
					<div class="form-group">
					    {{ Form::label('file','Imagen Opcional 1') }}
					    {{ Form::file('foto[]') }}
					</div>
					<div class="form-group">
					    {{ Form::label('file','Imagen Opcional 2') }}
					    {{ Form::file('foto[]') }}
					</div>
					
					<div class="form-group">
					    {{ Form::label('author','Autor') }}
					    {{ Form::text('autor','' ,(['class' => 'form-control col-md-5','placeholder'=>'Autor'])) }}
					</div>

					<br><br>
					<hr>
					<div class="row">
					{{ Form::submit('Guardar',['class'=>'btn btn-success'])}}
					{!! Form::close() !!}
					<a href="/posts" class="btn btn-primary">Volver</a>	
					</div>
					



				</div>
	
			
	
		</div>
	
</div>
	

	
	
@endsection
