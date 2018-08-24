{{-- @extends('layouts.app')

@section('content')
	
	<h1>Posts</h1>
	<a href="/posts/create" class="btn  btn-primary">Nuevo Post</a>
	@foreach($posts as $post)
		<h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
		<p>{!! $post->description !!}</p>
	@endforeach
	{{$posts->links()}}
@endsection
 --}}
@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-11 ">
				<div class="card">
					<div class="card-body">
						<div class="card-title">
						<h2>Lista de Posts</h2>
						<a href="{{route('posts.create')}}" class="btn btn-primary btn-sm float-right">Crear</a>
						</div>
						
						<div class="card-text">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Id</th>
										<th>Titulo</th>
										<th>Descripcion</th>
										<th>Fecha</th>
										<th colspan="3">&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									@foreach($posts as $post)
										<tr>
											<td>{{$post->id}}</td>
											<td>{{$post->title}}</td>
											<td>{{$post->description}}</td>
											<td>{{$post->created_at}}</td>
											
											<td width="10px">
												<a href="{{route('posts.show',$post->id)}}" class="btn btn-sm btn-info">Ver</a>
											</td>
											<td width="10px">
												<a href="{{route('posts.edit',$post->id)}}" class="btn btn-sm btn-warning">Editar</a>
											</td>
											<td width="10px">
												{!! Form::open(['route' =>['posts.destroy',$post->id],'method'=>'DELETE']) !!}
    											<button class="btn btn-sm btn-danger">Eliminar</button>
												{!! Form::close() !!}
												
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
							{{$posts->links()}}
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
@endsection