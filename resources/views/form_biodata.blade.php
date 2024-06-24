<!DOCTYPE html>
<html>
<head>
	<title>Formulir Biodata Diri</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<h1 class="text-center">Formulir Biodata Diri</h1>
		<form action="{{ url('/save_biodata')}}" method="POST">
			@csrf

			<label for="nama";>Nama</label>
			<input type="text" name="nama" id="nama" class="form-control">
			<br>
			<label for="tgl_lahir">Tanggal Lahir</label>
			<input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control"> 
			<br>
			<label for="alamat">Alamat</label>
			<input type="text" name="alamat" id="alamat" class="form-control">
			<br>
			<label for="jenis_kelamin">Jenis Kelamin</label><br>
					<input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan"> Perempuan <br>
					<input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-Laki"> Laki-Laki <br>
			<br>
			<label for="email";>E-mail</label><br>
			<input type="email" name="email" id="email" class="form-control">
			<br>
			<label for="hobi">Hobi</label><br>
					<input type="checkbox" name="hobi" id="hobi" value="Membaca Novel Fiksi"> Membaca Novel Fiksi <br>
					<input type="checkbox" name="hobi" id="hobi" value="Mendengarkan Musik"> Mendengarkan Musik <br>
					<input type="checkbox" name="hobi" id="hobi" value="Bermain Game"> Bermain Game <br>
			<br>
			<button type="submit" class="btn btn-md btn-success"> Simpan</button>
		</form>
	</div>
</body>
</html>