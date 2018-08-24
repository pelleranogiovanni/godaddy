@extends('layouts.web')


@section('content')
	{{-- <div class="container">
		<div class="col-md-8">
			<h1>{{$post->title}}</h1>	
					<div class="card">
						<div class="card-header card-title">Categorias: 
							<a href="{{ route('category',$post->category_id)}}">{{$post->category->category}}</a>
						</div>

						<div class="card-body">
							@if($post->file)
								<img src="{{$post->file}}" alt="" class="img-responsive">
							@else
								<img src="/img/default.png" alt="" class="img-responsive">
							@endif
							<br>
							<h3>{{$post->description}}</h3>
							<hr>
							<p>{!! $post->body !!}</p>
							<hr>
							<h4>Etiquetas
							@foreach($post->tags as $tag)
								<a href="{{ route('tag',$tag->slug) }}" class="btn btn-info">{{ $tag->slug }}</a>
							@endforeach	
							</h4>

							<h4>Galeria de imagenes</h4>
						
							@foreach($images as $image)
									<img src='{{ $image->ruta }}' alt="" class="img-thumbnail rounded" width="40%">
							@endforeach
							<a href="{{ route('blog')}}" class="float-right">Volver</a>
						</div>
						
					</div>				
		</div>
	</div> --}}
	


	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<h5><strong class="d-inline-block mb-2 text-primary"><a href="{{ route('category',$post->category_id)}}">{{$post->category->category}}</a></strong></h5>
			</div>
		</div>

		<div class="row">
			<div class="col-md-9">
				<h1 class="mb-0">
			        <a class="text-dark">{{$post->title}}</a>
			    </h1>
			</div>
		</div>

		<div class="row">
			<div class="col-md-9">
				<img src="{{$post->file}}" class="img-fluid" alt="Responsive image" width="100%">
			</div>
		</div>

		<div class="row">
			<div class="col-md-7">
				<h5><em>{{$post->description}}</em></h5>
			</div>
		</div>

		<div class="row">
			<div class="col-md-9">
				<h5><em>{{$post->created_at}}</em></h5>
			</div>
		</div>

		<div class="row">
			<div class="col-md-9">
				<h5><p>{!! $post->body !!}</p></h5>
			</div>
		</div>

		<div class="row">
			<div class="col-md-9">
				<p><ins>Fuente: </ins><strong>{{$post->author}}</strong></p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-9 text-center">
				@foreach($images as $image)
					<img src='{{ $image->ruta }}' alt="" class="img-thumbnail" width="80%"><br>
					<br>
				@endforeach
			</div>
		</div>

		
		<div class="row mb-5">
			<div class="col-md-1"></div>
			<div class="col-md-7">
				<div class="card">
		  			<div class="card-body">
		    			<div class="row">
							<div class="col-md-7">
								<!-- AddToAny BEGIN -->
								<div class="a2a_kit a2a_kit_size_32 a2a_default_style">

								<a class="a2a_button_facebook"></a>
								<a class="a2a_button_twitter"></a>
								<a class="a2a_button_whatsapp"></a>
								<a class="a2a_button_email"></a>
								</div>
								<script async src="https://static.addtoany.com/menu/page.js"></script>
								<!-- AddToAny END -->
							</div>

							<div class="col-md-5">
								<br>
								<p><a href="{{route('blog')}}" class="text-white bg-dark float-right">Todas las Noticias</a></p><br>
								<p><a href="{{ route('category',$post->category_id)}}" class="text-white bg-dark float-right">Más sobre {{$post->category->category}}</a></p>
							</div>



						</div>
		  			</div>
				</div>
			</div>
		</div>
		

		
		
		
	</div>
@endsection