<!DOCTYPE html>
<html>
<head>
	<title>Hitung Luas Segitiga</title>
	<!-- Created By Ardiani Laura -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<style>
		body {
			background-color: lightblue;
			margin-top: 150px;
		}
	</style>
</head>
<body>
	<form action="/hasil_luas_segitiga" method="POST">
		@csrf
		<div class="container">
			<div class="card p-3">
				<h1 class="text-center">HITUNG LUAS SEGITIGA</h1><br>
				<div>
					<label for="alas">Masukkan Alas</label>
					<input type="number" name="alas" id="alas" class="form-control"><br>
					<label for="tinggi">Masukkan Tinggi</label>
					<input type="number" name="tinggi" id="tinggi" class="form-control"><br>
					<button type="submit" class="btn btn-md btn-success">Hitung</button>
				</div>
			</div>
		</div>
	</form>
</body>
</html>