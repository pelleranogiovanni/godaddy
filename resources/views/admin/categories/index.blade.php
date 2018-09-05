@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offeset-2">
				<div class="card">
					<div class="card-body">
						<div class="card-title">
					<h2>Lista de Categorías</h2>
						<a href="{{route('categories.create')}}" class="btn btn-primary btn-sm float-right">Crear</a>
						</div>
						<br>

						<div class="col-md-11"> 
							<div class="table-responsive">
								<div class="card-text">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>Id</th>
												<th>Categoría</th>
												<th colspan="3">&nbsp;</th>
											</tr>
										</thead>
										<tbody>
											@foreach($categories as $category)
												<tr>
													<td>{{$category->id}}</td>
													<td>{{$category->category}}</td>
													<td width="10px">
														<a href="{{route('categories.show',$category->id)}}" class="btn btn-sm btn-info">Ver</a>
													</td>
													<td width="10px">
														<a href="{{route('categories.edit',$category->id)}}" class="btn btn-sm btn-warning">Editar</a>
													</td>
													<td width="10px">
														{!! Form::open(['route' =>['categories.destroy',$category->id],'method'=>'DELETE']) !!}
		    											<button class="btn btn-sm btn-danger">Eliminar</button>
														{!! Form::close() !!}
														
													</td>
												</tr>
											@endforeach
										</tbody>
									</table>
									{{$categories->render()}}
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
@endsection