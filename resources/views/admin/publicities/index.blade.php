@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offeset-2">
				<div class="card">
					<div class="card-body">
						<div class="card-title">
					<h2>Listado de Publicidades</h2>
						<a href="{{route('publicities.create')}}" class="btn btn-primary btn-sm float-right">Crear</a>
						</div>
						<br>

						<div class="col-md-11"> 
							<div class="table-responsive">
								<div class="card-text">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>Id</th>
												<th>Foto</th>
												<th colspan="3">&nbsp;</th>
											</tr>
										</thead>
										<tbody>
											@foreach($publicities as $publi)
												<tr>
													<td>{{$publi->id}}</td>
													<td><img src="{{$publi->ruta}}" alt="" width="200px"></td>
													
													
													<td width="10px">
														{!! Form::open(['route' =>['publicities.destroy',$publi->id],'method'=>'DELETE']) !!}
		    											<button class="btn btn-sm btn-danger">Eliminar</button>
														{!! Form::close() !!}
														
													</td>
												</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
@endsection