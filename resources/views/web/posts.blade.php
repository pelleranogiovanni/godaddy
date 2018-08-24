@extends('layouts.web')


{{-- @section('content')
<h1>Lista de Posts</h1>
	<div class="container">
		<div class="row">
			
		
		<div class="col-md-8">
			

				@foreach($posts as $post)
					
					<div class="card">
						<div class="card-header card-title"><b>	{{ $post->title }}</b></div>
						<div class="card-body">
							@if($post->file)
								<img src="{{$post->file}}" alt="" class="img-fluid">
							@else
								<img src="/img/posts/default.png" alt="" class="img-fluid">
							@endif
							<br>
							{{$post->description}}
							<a href="{{ route('post',$post->id) }}" class="float-right">Leer Mas...</a>
						</div>
						
					</div>
				
				@endforeach
				{{$posts->links()}}
		</div>
	
		<div class="col-md-2">
			<h2>Auspiciantes</h2>
			@foreach($publi as $image)
			<div class="card" style="width: 18rem;">
			  <img class="card-img-top img-fluid" src="{{ $image->ruta }}" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">{{$image->titulo}}</h5>
			   
			  </div>
			</div>
			@endforeach
		</div>
		
	</div>
	</div>
	
@endsection --}}










@section('content')

<div class="row">
    <div class="col-md-9 blog-main">
        <div class="row mb-2">
        	@foreach($posts as $post)	
	    		<div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
	        		<div class="card mb-4 box-shadow"  style="height: 430px;">
			            @if($post->file)
							<img src="{{$post->file}}" alt="" class="img-fluid">
						@else
							<img src="/img/posts/default.png" alt="" class="img-fluid">
						@endif
			             <div class="card-body">
			                <strong class="d-inline-block mb-2 text-primary"><a href="{{ route('category',$post->category_id)}}">{{$post->category->category}}</a></strong>

			                  {{-- <strong class="d-inline-block mb-2 text-primary">| Tags</strong> --}}
			                  
			                 <h3 class="mb-0">
			                    <a class="text-dark" href="{{ route('post',$post->id) }}">{{$post->title}}</a>
			                 </h3>

			                  <p class="card-text"  >{{$post->description}}</p>
			                  <div class="d-flex justify-content-between align-items-center">
				                    <div class="btn-group">
				                      {{-- <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
				                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> --}}
				                    </div>
				                   
			                    
			                  </div>
			              </div> 
			              <div class="card-footer">
									    {{$post->created_at}}
									  </div>
			        </div>
			    </div>
 
			@endforeach
		
                              
        </div>	{{$posts->links()}}    
    </div><!-- /.blog-main -->

   @include('web/partials.public')
 
</div><!-- /.row -->


@endsection






