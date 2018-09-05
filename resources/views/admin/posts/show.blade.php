@extends('layouts.app')

@section('content')
<div class="card col-md-10">
	<div class="card-body">
		<ins>Categoría:</ins> {{$post->category->category}}
		<div class="card-title"><h2><ins>Titulo:</ins> <strong>{{$post->title}}</strong></h2></div>
		<h5><ins>Autor: </ins>{{$post->author}}</h5>

		@if($post->file)
		
				<img src='{{ $post->file }}' alt="" class="img-fluid img-responsive" width="600px" height="450PX">
		
			
		@else
			
			<img src='/img/posts/default.jpg' alt="">
		@endif
		
		
		<div class="card-text">
			<ins>Descripción:</ins><h4>{{$post->description}}</h4>
			<br>
			<ins>Contenido:</ins>
			<p>{!! $post->body !!}</p>
			<p><b>Creado el dia: </b>{{$post->created_at}}</p>
		
		{{-- <hr> --}}
		{{-- <h3>Etiquetas</h3>
		@foreach($post->tags as $tag)
			<a href="" class="btn btn-secondary">{{$tag->slug}}</a>
		@endforeach
		</div> --}}

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



	</div>
	<hr>
	<a href="/posts" class="btn btn-primary">Volver</a>

			<a href="/posts/{{$post->id}}/edit" class="btn btn-warning">Editar</a>
		<a href="/posts/delete/{{$post->id}}" class="btn btn-danger pull-right">Eliminar</a>
		<hr>
</div>
	
		


		
		

@endsection
