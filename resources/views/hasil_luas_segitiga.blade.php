<!DOCTYPE html>
<html>
<head>
	<title>Hasil Luas Segitiga</title>
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
	<div class="container">
		<div class="card p-3">
			<h1 class="text-center">HASIL LUAS SEGITIGA</h1>
			<table>
				<tr>
					<td>Alas</td>
					<td>:</td>
					<td>{{ $LuasSegitiga->getAlas() }}</td>
				</tr>
				<tr>
					<td>Tinggi</td>
					<td>:</td>
					<td>{{ $LuasSegitiga->getTinggi() }}</td>
				</tr>
				<tr>
					<td>Hasil</td>
					<td>:</td>
					<td>{{ $LuasSegitiga->hasilHitung() }}</td>
				</tr>
			</table>
		</div>
	</div>
</body>
</html>