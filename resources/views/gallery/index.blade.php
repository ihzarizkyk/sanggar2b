<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gallery - Sanggar Website</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('css/gallery.css')}}">
</head>
<body>

<div class="container">
		<ul class="nav justify-content-center bg-primary">
				<li class="nav-item">
					<a class="nav-link text-white active" href="/">Beranda</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="/tentang">Tentang</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="/gallery">Galeri</a>
				</li>
		</ul>

			<div class="jumbotron card card-block text-white">
				<h2 class="text-center" id="head-gallery">
					Galeri
				</h2>
			</div>
</div>

<div class="container">

	<nav class="mt-3">
	  <div class="nav nav-tabs" id="nav-tab" role="tablist">
	    <a class="nav-link bg-primary text-white font-weight-bold active" id="creativity-tab" data-toggle="tab" href="#creativity-class" role="tab" aria-controls="creativity" aria-selected="true">creativity class</a>
	    <a class="nav-link bg-primary text-white font-weight-bold" id="cooking-tab" data-toggle="tab" href="#cooking-class" role="tab" aria-controls="profile" aria-selected="false">cooking class</a>
	    <a class="nav-link bg-primary text-white font-weight-bold" id="english-tab" data-toggle="tab" href="#english-class" role="tab" aria-controls="english" aria-selected="false">english-class</a>
	    <a class="nav-link bg-primary text-white font-weight-bold" id="outbound-tab" data-toggle="tab" href="#outbound" role="tab" aria-controls="outbound" aria-selected="false">Outbound</a>
	  </div>
	</nav>

	<div class="tab-content" id="nav-tabContent">
	  <div class="tab-pane fade show active" id="creativity-class" role="tabpanel" aria-labelledby="creativity-tab">
	  	@if($creativity->count() == 0)
	  		<p class="text-justify">Tidak ada data</p>
	  	@else
	  	@foreach($creativity as $kreatif)
	  		<img class="img-thumbnail mt-3 mb-2" width="450" height="200" src="{{asset('/files/'.$kreatif->photo)}}" alt="{{$kreatif->name}}" title="{{$kreatif->name}}">
	  	@endforeach
	  	@endif
	  </div>
	  <div class="tab-pane fade" id="cooking-class" role="tabpanel" aria-labelledby="cooking-tab">
	  	@if($cooking->count() == 0)
	  	<p class="text-justify">Tidak ada data</p>
	  	@else
	  	@foreach($cooking as $cook)
	  		<img class="img-thumbnail mt-3 mb-2" width="450" height="200" src="{{asset('/files/'.$cook->photo)}}" alt="{{$cook->name}}" title="{{$cook->name}}">
	  	@endforeach
	  	@endif
	  </div>
	  <div class="tab-pane fade" id="english-class" role="tabpanel" aria-labelledby="english-tab">
	  	@if($english->count() == 0)
	  	<p class="text-justify">Tidak ada data</p>
	  	@else
	  	@foreach($english as $en)
	  		<img class="img-thumbnail mt-3 mb-2" width="450" height="200" src="{{asset('/files/'.$en->photo)}}" alt="{{$en->name}}" title="{{$en->name}}">
	  	@endforeach
	  	@endif
	  </div>
	  <div class="tab-pane fade" id="outbound" role="tabpanel" aria-labelledby="outbound-tab">
	  	@if($outbound->count() == 0)
	  	<p class="text-justify">Tidak ada data</p>
	  	@else
	  	@foreach($outbound as $ob)
	  		<img class="img-thumbnail mt-3 mb-2" width="450" height="200" src="{{asset('/files/'.$ob->photo)}}" alt="{{$ob->name}}" title="{{$ob->name}}">
	  	@endforeach
	  	@endif
	  </div>
	</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>