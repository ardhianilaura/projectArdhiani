<!DOCTYPE html>
<html>
<head>
	<title>Hasil Biodata</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<style>
		body {
			margin-top: 150px;
			background-color: lightblue;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="card p-3">
			<h1 class="text center">Hasil Formulir Biodata Diri</h1>
			<p>Nama : {{$nama_lengkap}}</p>
			<p>Tanggal Lahir : {{$tanggal_lahir}}</p>
			<p>Alamat : {{$alamat}}</p>
			<p>Jenis Kelamin : {{$jenis_kelamin}}</p>
			<p>E-mail : {{$email}}</p>
			<p>Hobi : {{$hobi}}</p>
		</div>
	</div>
</body>
</html>