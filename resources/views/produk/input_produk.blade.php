<!DOCTYPE html>
<html>
<head>
	<title>Input Produk</title>
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
				<form action="{{ url('/save_input_produk') }}" method="POST" enctype="multipart/form-data">
				@csrf
				<h1 class="text-center mb-3">INPUT PRODUK</h1><br>
				<div>
					<label for="nama_produk">Nama Produk</label>
					<input type="text" name="nama_produk" id="nama_produk" class="form-control"><br>

					<label for="harga_satuan">Harga Satuan</label>
					<input type="number" name="harga_satuan" id="harga_satuan" class="form-control"><br>

					<label for="stok">Stok</label>
					<input type="number" name="stok" id="stok" class="form-control"><br>

					<label for="kategori">Kategori</label>
					<select name="kategori" id="kategori" class="form-control">
						<option value="Bahan Makanan">Bahan Makanan</option>
						<option value="Peralatan Rumah Tangga">Peralatan Rumah Tangga</option>
						<option value="Alat Tulis">Alat Tulis</option>
					</select><br>

					<label for="foto_produk">Foto Produk</label></th>
					<input type="file" name="foto_produk" id="foto_produk"><br><br>

					<button type="submit" class="btn btn-md btn-success">Input</button>
				</div>
			</form>
		
		</div>
	</div>
</body>
</html>