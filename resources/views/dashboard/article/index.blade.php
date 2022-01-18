@extends('layout.app')
@section('title','Dashboard Article - Sanggar')
@section("sidebar")
@section("content")
<div class="content">
	<div class="container mt-3">

	<a href="{{route('article.new')}}" class="btn btn-primary float-right mt-3 mb-3" id="add">
		<i class="fas fa-plus-circle"></i> Create
	</a>

		<table id="article" class="table table-hover mt-3 mb-3">
			<thead>
				<tr>
					<th>No</th>
					<th>Image</th>
					<th>Title</th>
					<th>Slug</th>
					<th>Author</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				
				@foreach($data as $artikel)
				<tr>
					<td>{{$loop->iteration}}</td>
					<td>{{$artikel->image}}</td>
					<td>{{$artikel->title}}</td>
					<td>{{$artikel->slug}}</td>
					<td>{{$artikel->author}}</td>
					<td>
						<a href="/dashboard/article/{{$artikel->id}}/del" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure for delete {{$artikel->title}} ?');">Del</a>
						<a href="/dashboard/article/{{$artikel->id}}/edit" class="btn btn-warning btn-sm" onclick="return confirm('Are you sure for edit{{$artikel->title}} ?');">Edit</a>
					</td>
				</tr>
				@endforeach

			</tbody>
		</table>
	</div>
</div>
@endsection
@section('script')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
<script>
$(document).ready(function() {
    $('#article').DataTable();
} );
</script>
@endsection