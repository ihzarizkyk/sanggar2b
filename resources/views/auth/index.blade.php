<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login - Official Website Sanggar</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="cols col-md-6">
				<div class="card mt-3">
					<div class="card-header">
						<h1 class="font-weight-bold">
							Login - Sanggar
						</h1>
					</div>
					<div class="card-body">
						<form name="formlogin" action="{{route('postlogin')}}" class="form" method="POST">
							@csrf
							<div class="form-group">
								<label for="" class="label">
									<b>USERNAME:</b>
								</label>
								<input type="text" class="form-control" autocomplete="off" required name="name">
							</div>
							<div class="form-group">
								<label for="" class="label">
									<b>PASSWORD:</b>
								</label>
								<input type="password" class="form-control" required name="password">
							</div>
							<input class="btn btn-info mb-3" type="submit" value="LOGIN">
							<a href="/" class="btn btn-danger mb-3">
								Back
							</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>