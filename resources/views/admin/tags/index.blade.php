@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offeset-2">
				<div class="card">
					<div class="card-body">
						<div class="card-title">
					Lista de Etiquetas
						<a href="{{route('tags.create')}}" class="btn btn-primary btn-sm float-right">Crear</a>
						</div>
						
						<div class="card-text">
							<table class="table">
								<thead>
									<tr>
										<th>Id</th>
										<th>Tag</th>
										<th colspan="3">&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									@foreach($tags as $tag)
										<tr>
											<td>{{$tag->id}}</td>
											<td>{{$tag->slug}}</td>
											<td width="10px">
												<a href="{{route('tags.show',$tag->id)}}" class="btn btn-sm btn-secondary">Ver</a>
											</td>
											<td width="10px">
												<a href="{{route('tags.edit',$tag->id)}}" class="btn btn-sm btn-info">Editar</a>
											</td>
											<td width="10px">
												{!! Form::open(['route' =>['tags.destroy',$tag->id],'method'=>'DELETE']) !!}
    											<button class="btn btn-sm btn-danger">Eliminar</button>
												{!! Form::close() !!}
												
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
							{{$tags->links()}}
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
@endsection