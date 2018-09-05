@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-lg-11 col-md-11 col-sm-11">
				<div class="card">
					<div class="card-body">
						<div class="card-title">
					Galeria de Imagenes
						<a href="{{route('images.create')}}" class="btn btn-primary btn-sm float-right">Crear</a>
						</div>
						
						<div class="card-text">
							<table class="table table-responsive">
								<thead>
									<tr>
										<th>Id</th>

										<th>Imagen</th>
										
										<th>Post</th>
										<th colspan="3">&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									@foreach($images as $image)
										<tr>
											<td>{{$image->id}}</td>
											<td>
												<div class="card">
													<div class="card-body">
													
														<img src="{{$image->ruta}}" alt="" class="img-responsive">
													
													</div>
												
												</div>
											</td>
											<td>
												<a href="{{route('posts.show',$image->post_id)}}" >{{$image->post_id}}</a>
												
											</td>
											<td width="10px">
												<a href="{{route('images.show',$image->id)}}" class="btn btn-sm btn-secondary">Ver</a>
											</td>
											
											<td width="10px">
												{!! Form::open(['route' =>['images.destroy',$image->id],'method'=>'DELETE']) !!}
    											<button class="btn btn-sm btn-danger">Eliminar</button>
												{!! Form::close() !!}
												
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
							{{$images->links()}}
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
@endsection