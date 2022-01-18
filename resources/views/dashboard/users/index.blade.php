@extends('layout.app')
@section('title','Dashboard User - Sanggar')
@section("sidebar")
@section("content")

<div class="content">
	<div class="container mt-3">

	<a href="{{route('users.new')}}" class="btn btn-primary float-right mt-3 mb-3" id="add">
		<i class="fas fa-plus-circle"></i> Create
	</a>

		<table id="usr" class="table table-hover mt-3 mb-3">
			<thead>
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Role</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($user as $usr)
				<tr>
					<td>{{$loop->iteration}}</td>
					<td>
						{{$usr->name}}
						<br>
						<span class="badge badge-success"><a class="text-white" href="/dashboard/users/{{$usr->id}}/role/admin">admin</a></span>
						<span class="badge badge-primary"><a class="text-white" href="/dashboard/users/{{$usr->id}}/role/user">user</a></span>
					</td>
					<td>
						{{$usr->role}}
					</td>
					<td>
						<a href="/dashboard/users/#/del" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure for delete ?');">Del</a>
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
    $('#usr').DataTable();
} );
</script>
@endsection