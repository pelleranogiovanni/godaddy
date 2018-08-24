@extends('layouts.app')

@section('content')
<div class="card col-md-8 col-auto">
	<div class="card-body">
		<div class="card-title"><h2>Etiqueta No: {{$tag->id}}</h2></div>
		<div class="card-text">
			<h4>{{$tag->slug}}</h4>
		</div>
	</div>
</div>
	
	

		

@endsection
