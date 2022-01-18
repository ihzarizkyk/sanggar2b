<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Official Website Sanggar</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>

<div class="container">
	<div class="row">
		<div class="cols col-md-12">

		<ul class="nav justify-content-center bg-primary">
				<li class="nav-item">
					<a class="nav-link text-white active" href="#">Beranda</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="/tentang">Tentang</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="/gallery">Galeri</a>
				</li>
		</ul>

			<div class="jumbotron card card-block text-white">
				<h2>
					Selamat Datang di Website Sanggar!
				</h2>
				<p>
					Website Resmi Sanggar! Berisikan informasi mengenai sanggar berupa berita aktiivitas, galeri foto aktivitas, pendaftaran volunteer dan lainnya. 
				</p>
				<p>
					<a class="btn btn-primary btn-large" href="#">Pelajari Selengkapnya!</a>
				</p>
			</div>

			<div class="row mb-3 bg-primary py-2 px-3">

				<div class="cols col-md-12">
					<h3 class="text-white text-center font-weight-bold px-3 py-3">
						Sanggar2b dalam angka!
					</h3>
				</div>

				<div class="cols col-md-4 py-2 px-3">
					<div class="card">
						<div class="card-body">
							<div class="text-center">
								<h2>
									10
								</h2>
								<h3>Kegiatan</h3>
							</div>
						</div>
					</div>
				</div>

				<div class="cols col-md-4 py-2 px-3">
					<div class="card">
						<div class="card-body">
							<div class="text-center">
								<h2>
									10
								</h2>
								<h3>Alumni</h3>
							</div>
						</div>
					</div>
				</div>

				<div class="cols col-md-4 py-2 px-3">
					<div class="card">
						<div class="card-body">
						    <div class="text-center">
								<h2>10</h2>
								<h3>Volunteer</h3>
						    </div>
					    </div>
					</div>
				</div>
			</div>

			<div class="row" >


				<div class="cols col-md-12">
					<h3 class="text-center font-weight-bold px-3 py-3">
						Artikel Sanggar!
					</h3>
				</div>

				@foreach($article as $artikel)
				<div class="cols col-md-4 py-3 px-3">
					<div class="card">
						<h5 class="card-header font-weight-bold">
							{{$artikel->title}}
						</h5>
						<img src="{{$artikel->image}}" class="card-img-top" alt="{{$artikel->slug}}" width="300" height="250">
						<div class="card-footer">
							{{$artikel->author}}
						</div>
					</div>
				</div>
				@endforeach

				<div class="py-3 px-3">
					<a href="/article" class="btn btn-info">
					Lihat Semua Artikel
					</a>
				</div>

				<hr>

			</div>
		</div>
	</div>

	<div class="row bg-primary">

		<div class="cols col-md-12">
			<h3 class="text-center text-white font-weight-bold px-3 py-3">
				Galeri Aktivitas Sanggar!
			</h3>
		</div>

		@foreach($gallery as $galeri)
		<div class="cols col-md-4 mb-3">
			<img title="{{$galeri->name.' - '.$galeri->category->name}}" alt="{{$galeri->name}}" src="{{asset('files/'.$galeri->photo)}}" width="350" height="auto" style="border-radius: 2px 21px;">
		</div>
		@endforeach

	</div>

	<div class="row px-3 py-3">

		<div class="cols col-md-6">
			<img class="img-fluid" alt="Bootstrap Image Preview" src="{{asset('assets/images/Community.png')}}" height="300" width="450" style="border-radius: 2px 20px;">
		</div>

		<div class="cols col-md-6 mt-3">
			<h3 class="font-weight-bold">
				Open Volunteer Sanggar!
			</h3>
			<p>
				Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
			</p> 
			<a href="/volunteer" class="btn btn-success btn-block btn-md mb-3">
				Informasi Pendaftaran Volunteer Sanggar!
			</a>
		</div>

	</div>

	<div class="row text-white bg-primary mb-2" style="border-radius: 0 0 10px 10px;">
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