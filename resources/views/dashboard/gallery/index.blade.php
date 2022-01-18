@extends('layout.app')
@section('title','Dashboard Gallery - Sanggar Website')
@section('sidebar')
@section('content')
<div class="content">
	<div class="container">
		<h1 class="font-weight-bold">
			Gallery
		</h1>
		<a href="{{route('gallery.new')}}" class="btn btn-success float-right mb-4">
			Upload Image
		</a>
		
		<table id="galeri" class="table table-hover mt-3 mb-3">
			<thead>
				<tr>
					<th>No</th>
					<th>Image</th>
					<th>Name</th>
					<th>Category</th>
					
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				
				@foreach($gallery as $galeri)
				<tr>
					<td>{{$loop->iteration}}</td>
					<td>
						<img class="img-thumbnail" src="{{ asset('files/'.$galeri->photo)}}" height="100" width="100" alt="{{$galeri->name}}">
					</td>
					<td>{{$galeri->name}}</td>
					<td>{{$galeri->category->name}}</td>
					<td>
						<a href="/dashboard/gallery/{{$galeri->id}}/del" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure for delete {{$galeri->name}} ?');">Del</a>

						<a href="/dashboard/gallery/{{$galeri->id}}/edit" class="btn btn-warning btn-sm">edit</a>
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
    $('#galeri').DataTable();
} );
</script>
@endsection