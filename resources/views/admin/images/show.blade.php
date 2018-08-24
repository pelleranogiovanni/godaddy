@extends('layouts.app')

@section('content')

		
		<div class="container">
		<div class="row">
			<div class="col-md-10">
				<div class="card">
					<div class="card-body">
						<div class="card-title">
						<h2><b>Galeria de Imagenes del Post: </b>{{ $post->title }}</h2>
						<a href="{{route('images.crear',$post->id)}}" class="btn btn-primary btn-sm float-right">Crear</a>
						</div>
						
						<div class="card-text">
							<table class="table">
								<thead>
									<tr>
										<th>Id</th>
														
										<th>Fecha</th>
										<th>Imagen</th>
										<th colspan="3">&nbsp;</th>
									</tr>
								</thead>
								
								<tbody>
									@foreach($images as $image)
										<tr>
											<td>{{$image->id}}</td>
											<td>{{$image->created_at}}</td>
											<td><img src='{{ $image->ruta }}' alt="" class="img-thumbnail" width="40%"></td>
																	
											
											<td width="10px">
													{!! Form::open(['route' =>['images.destroy',$image->id],'method'=>'DELETE']) !!}
    											<button class="btn btn-sm btn-danger">Eliminar</button>
												{!! Form::close() !!}
												
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
							<a href="/posts/{{$post->id}}" class="btn btn-primary">Volver</a>	
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>

@endsection
