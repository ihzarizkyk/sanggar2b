<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.jqueryui.min.css">
	
	<title>@yield('title')</title>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js" integrity="sha512-GMGzUEevhWh8Tc/njS0bDpwgxdCJLQBWG3Z2Ct+JGOpVnEmjvNx6ts4v6A2XJf1HOrtOsfhv3hBKpK9kE5z8AQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>

@yield('sidebar')
<div class="sidebar">
<a href="/dashboard" class="{{ Request::is('dashboard') ? 'active' : '' }}">
	Dashboard
</a>
<a href="/dashboard/profile" class="{{ Request::is('dashboard/profile') ? 'active' : '' }}">
	My Profile
</a>
<a href="/dashboard/article" class="{{ Request::is('dashboard/article') ? 'active' : '' }}">
	Article
</a>
<a href="/dashboard/gallery" class="{{ Request::is('dashboard/gallery') ? 'active' : '' }}">
	Gallery
</a>
@if(Auth::user()->role == 'admin')
<a href="/dashboard/users" class="{{ Request::is('dashboard/users') ? 'active' : '' }}">
	Users
</a>
@endif
<a href="{{route('logout')}}">
	Logout
</a>
</div>

@yield('content')	


@yield('script')

</body>
</html>