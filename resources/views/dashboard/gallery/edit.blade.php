@extends('layout.app')
@section('title','Dashboard Gallery - Sanggar Website')
@section('sidebar')
@section('content')
<div class="content">
	<div class="container">
		<div class="card mt-3">
			<div class="card-body">
				<h1 class="font-weight-bold">
					Edit Uploaded Image - Gallery
				</h1>

				<span class="text-danger py-3">
				<p>
					@if($errors->any())
						@foreach($errors->all() as $error)
						{{$error}}
						@endforeach
					@endif
				</p>
				</span>

				<form action="{{route('gallery.update')}}" method="POST" class="form" enctype="multipart/form-data">
					@csrf
					<input type="hidden" name="id" value="{{$gallery->id}}">
					<div class="form-group">
						<label for="photo" class="label">
							<b>Photo:</b>
						</label>
						<input name="photo" type="file" class="form-control" value="{{$gallery->photo}}">
					</div>
					<div class="form-group">
						<label for="Name" class="label">
							<b>Name:</b>
						</label>
						<input class="form-control" type="text" name="name" placeholder="Photo Name..." value="{{$gallery->name}}">
					</div>
					<div class="form-group">
						<label class="label" for="category">
							<b>Category:</b>
						</label>
						<select name="category" class="form-control">
						@foreach($category as $kategori)
						<option value="{{$kategori->id}}" @foreach($gallery->category() as $gall) {{$gall['id'] == $kategori->gallery()->category_id ? 'selected' : ''}} @endforeach>
							{{$kategori->name}}
						</option>
						@endforeach
						</select>
					</div>
					<input name="post" class="btn btn-success mb-2 mt-3" type="submit" value="Post">
					<a href="/dashboard/gallery" class="btn btn-danger mb-2 mt-3">
						Cancel
					</a>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection