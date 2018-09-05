	@extends('layouts.app')

	@section('content')
<div class="card col-md-10 ml-3">
		<h2>Editar Post</h2>
		
		{!! Form::open(['action' => ['Admin\PostController@update',$post->id], 'file'=>true,'method' =>'POST','enctype' => 'multipart/form-data']) !!}
		   <div class="form-group">
			    {{ Form::label('title','Titulo') }}
			    {{ Form::text('title',$post->title ,(['class' => 'form-control','placeholder'=>'Título', 'maxlength'=>'40'])) }}
			</div>
			<div class="form-group">
					    {{ Form::label('description','Descripción') }}
					    {{ Form::text('description',$post->description,(['class' => 'form-control', 'maxlength'=>'120'])) }}
					</div>
			<div class="form-group">
			    {{ Form::label('body','Contenido') }}
			    {{ Form::textarea('body',$post->body ,(['class' => 'form-control ckeditor','placeholder'=>'Contenido','id'=>'article-ckeditor'])) }}
			</div>
					@if($post->file)
						<img src='{{ $post->file }}' alt="" class="img-fluid img-responsive" width="600px" height="450PX">
					@else
						<img src='/img/posts/default.jpg' alt="">
					@endif

					<div class="form-group">
					    {{ Form::label('file','Imagen de Portada') }}
					    {{ Form::file('file') }}
					</div>
						<div class="form-group">
					    {{ Form::label('author','Autor') }}
					    {{ Form::text('author',$post->author ,(['class' => 'form-control col-md-5'])) }}
					</div>
					<br><br>
					<div class="form-group">
					    {{ Form::label('category','Categoria') }}
					    
					   {{--  {{ Form::select('category',$categories,(['class' => 'form-control'])) }} --}}
					    <select class="form-control m-bot15" name="categories">
			           @if($categories->count() > 0)
			          @foreach($categories as $category)
			           <option value="{{$category->id}}">{{$category->category}}</option>
			          @endforeach
			          @else
			           No Record Found
			            @endif   
			        </select>
					</div>
					
					
					<div class="row">
            			<div class="col-md-12">
              				<div class="box">
								<div class="box-header with-border">
									<h3 class="box-title">Galería de Imágenes</h3>
									<div class="box-body">
				                    	<div class="row">
				                      		<div class="col-md-12">
											
											
											@foreach($images as $image)
											<img src='{{ $image->ruta }}' alt="" class="img-thumbnail rounded" width="40%">
											@endforeach	
											</div>
										</div>
										<br>
										<a href="/images/{{$post->id}}" class="btn btn-info">Ir a Galería</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					{{-- @foreach($images as $image)
										<tr>
											<td>{{$image->id}}</td>
											<td>{{$image->created_at}}</td>
											<td><img src='{{ $image->ruta }}' alt="" class="img-thumbnail rounded" width="40%"></td>
											
											<td width="10px">
												<a href="" class="btn btn-sm btn-secondary">Ver</a>
											</td>
											<td width="10px">
												<a href="" class="btn btn-sm btn-info">Editar</a>
											</td>
											<td width="10px">
													{!! Form::open(['route' =>['images.destroy',$image->id],'method'=>'DELETE']) !!}
    											<button class="btn btn-sm btn-danger">Eliminar</button>
												{!! Form::close() !!}
												
											</td>
										</tr>
									@endforeach --}}
			<hr>
			{{ Form::hidden('_method','PUT')}}
			{{ Form::submit('Guardar',['class'=>'btn btn-success'])}}
			<a href="/posts" class="btn btn-primary">Volver</a>	


		{!! Form::close() !!}

</div>		
	@endsection

{{-- @extends('layouts.app')

@section('content')
	
<div class="card col-md-10 ml-3">
		<div class="card-body">
			<div class="card-title">Nueva Post</div>
				<div class="card-text">
						{!! Form::open(['action' => 'Admin\PostController@update',$post->id, 'file'=>true,'method' =>'POST','enctype' => 'multipart/form-data']) !!}
				   <div class="form-group">
					    {{ Form::label('title','Titulo') }}
					    {{ Form::text('title',$post->title,(['class' => 'form-control col-md-5'])) }}
					</div>
					<div class="form-group">
					    {{ Form::label('description','Descripcion') }}
					    {{ Form::text('description',$post->description,(['class' => 'form-control',])) }}
					</div>
					<div class="form-group">
					    {{ Form::label('body','Contenido') }}
					    {{ Form::textarea('body',$post->body ,(['class' => 'form-control','id'=>'article-ckeditor'])) }}
					</div>
					<div class="form-group">
					    {{ Form::label('category','Categoria') }}
					    
					    {{ Form::select('category',$categories,(['class' => 'form-control'])) }}
					    <select class="form-control m-bot15" name="categories">
			           @if($categories->count() > 0)
			          @foreach($categories as $category)
			           <option value="{{$category->id}}">{{$category->category}}</option>
			          @endForeach
			          @else
			           No Record Found
			            @endif   
			        </select>
					</div>

					@if($post->file)
						<img src='{{ $post->file }}' alt="">
					@else
						<img src='/img/posts/default.png' alt="">
					@endif

					<div class="form-group">
					    {{ Form::label('file','Portada') }}
					    {{ Form::file('file') }}
					</div>
					
					<div class="form-group">
					    {{ Form::label('author','Autor') }}
					    {{ Form::text('author',$post->author ,(['class' => 'form-control col-md-5'])) }}
					</div>
{{ Form::hidden('_method','PUT')}}
		
		{{ Form::submit('Guardar',['class'=>'btn btn-success'])}}
	{!! Form::close() !!}



				</div>
	
			</div>
	
		</div>
	
</div>
	

	
	
@endsection
 --}}