@extends('layout.app')
@section('title','Dashboard Edit Article - Sanggar')
@section("sidebar")
@section("content")
<div class="content">
	<div class="container mt-3">
		<div class="card">
			<div class="card-body">
				<h2 class="font-weight-bold">
					.:CREATE ARTICLE:.
				</h2>
				<form action="{{route('article.update')}}" class="form" method="POST">
					@csrf
					<input name="id" type="hidden" value="{{$article->id}}">
					<div class="form-group">
						<label for="Title" class="label">
							<b>Image (Gambar):</b>
						</label>
						<input class="form-control" type="text" name="image" required value="{{$article->image ?? old('image')}}">
					</div>
					<div class="form-group">
						<label for="Title" class="label">
							<b>Title (Judul):</b>
						</label>
						<input class="form-control" type="text" name="title" required value="{{$article->title ?? old('title')}}">
					</div>
					<div class="form-group">
						<label for="Body" class="label">
							<b>Body (Deskripsi):</b>
						</label>
						<textarea name="body" id="" class="form-control">{{$article->body ?? old('body')}}</textarea>
					</div>
					<input type="submit" class="btn btn-info mb-2 mt-2" value="UPDATE ARTICLE">
					<a href="/dashboard/article" class="btn btn-danger mb-2 mt-2">
						CANCEL
					</a>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection