@extends('layout.app')
@section('title','Profile - Sanggar')
@section("sidebar")
@section("content")

<div class="content">
	<div class="container">
		<div class="card text-center mt-3">
			<div class="card-body">
				<h1>{{$user->name}}</h1>
				<h3>{{$user->role}}</h3>
			</div>
		</div>
	</div>
</div>

@endsection