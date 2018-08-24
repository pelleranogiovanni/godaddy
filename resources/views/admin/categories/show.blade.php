@extends('layouts.app')

@section('content')
<div class="card col-md-8 col-auto">
	<div class="card-body">
		<div class="card-title"><h2>Categoria Nro: {{$category->id}}</h2></div>
		<div class="card-text">
			<h4>{{$category->category}}</h4>
		</div>
		<hr>
	<a href="/categories" class="btn btn-primary">Volver</a>	
	</div>
</div>
	
	

		

@endsection
