<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Detail - Sanggar Website</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<a class="btn btn-danger btn-md mt-3" href="/article">
			Back
		</a>

		@foreach($article as $artikel)
		<div class="card mb-3 mt-3">
			<div class="card-header">
				<h2 class="font-weight-bold">{{$artikel->title}}</h2>
			</div>
			<img class="card-img-top" src="{{$artikel->image}}" alt="{{$artikel->title}}" width="350" height="455">
			<div class="card-body">
				<p class="text-justify">
					{{$artikel->body}}
				</p>
			</div>
		</div>
		@endforeach

	</div>
	
</body>
</html>