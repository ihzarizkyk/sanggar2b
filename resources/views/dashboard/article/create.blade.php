@extends('layout.app')
@section('title','Dashboard Create Article - Sanggar')
@section("sidebar")
@section("content")
<div class="content">
	<div class="container mt-3">
		<div class="card">
			<div class="card-body">
				<h2 class="font-weight-bold">
					.:CREATE ARTICLE:.
				</h2>
				<form action="{{route('article.store')}}" class="form" method="POST">
					@csrf
					<div class="form-group">
						<label for="Title" class="label">
							<b>Image (Gambar):</b>
						</label>
						<input class="form-control" type="text" name="image" required>
					</div>
					<div class="form-group">
						<label for="Title" class="label">
							<b>Title (Judul):</b>
						</label>
						<input class="form-control" type="text" name="title" required>
					</div>
					<div class="form-group">
						<label for="Body" class="label">
							<b>Body (Deskripsi):</b>
						</label>
						<textarea name="body" id="" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label for="Title" class="label">
							<b>Author (Pemilik Tulisan):</b>
						</label>
						<input class="form-control" type="text" name="author" required value="{{Auth::user()->name}}" disabled>
					</div>
					<input type="submit" class="btn btn-info mb-2 mt-2" value="POST ARTICLE">
					<a href="/dashboard/article" class="btn btn-danger mb-2 mt-2">
						CANCEL
					</a>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection