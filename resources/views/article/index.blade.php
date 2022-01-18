<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Article - Sanggar Website</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>

<div class="container">

			<ul class="nav nav-pills mt-3 mb-3">
				<li class="nav-item">
					<a class="nav-link active" href="/">Beranda</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/tentang">Tentang</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Galeri</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#"></a>
				</li>
				<li class="nav-item dropdown ml-md-auto">
					 <a class="nav-link text-dark dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">More</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
						 <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
						<div class="dropdown-divider">
						</div> <a class="dropdown-item" href="#">Separated link</a>
					</div>
				</li>
			</ul>

			<div class="row">


				<div class="cols col-md-12">
					<h3 class="text-center font-weight-bold px-3 py-3">
						Artikel Sanggar!
					</h3>
				</div>

				@foreach($article as $artikel)
				<div class="cols col-md-4 py-3 px-3 mb-3">
					<div class="card">
						<h5 class="card-header font-weight-bold">
							{{$artikel->title}}
						</h5>
						<img src="{{$artikel->image}}" class="card-img-top" alt="{{$artikel->slug}}" width="300" height="250">
						<div class="card-footer">
							{{$artikel->author}}
							<a href="/article/{{$artikel->slug}}/detail" class="btn btn-info float-right">
								Lihat
							</a>
						</div>
					</div>
				</div>
				@endforeach

				<div class="py-3 px-3 d-flex justify-content-center">
					{{$article->links()}}
				</div>

				<hr>

			</div>
</div>

<div class="row text-white mb-2" style="background-color: black; border-radius: 0 0 10px 10px;">
		<div class="cols col-md-12">
			<h2 class="px-3 py-3">
				Sanggar
			</h2>
			<p class="px-3 py-3">
				Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			</p>
			<p class="px-3 py-3">
				<a class="text-white" href="#">View details »</a>
			</p>
		</div>
	</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>