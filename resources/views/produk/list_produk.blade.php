<!DOCTYPE html>
<html>
<head>
	<title>List Produk</title>
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
		<div class="p-3 mt-3">
			<h1 class="text-center mt-3">LIST PRODUCT</h1><br>
			<a href="{{ url('/input_produk') }}" class="btn btn-md btn-primary">Tambah Produk</a><br><br>
				<table class="table table-light table-border">
					<thead class="text-center">
						<th>NO</th>
						<th>Nama Produk</th>
						<th>Foto Produk</th>
						<th>Harga Satuan</th>
						<th>Stok</th>
						<th>Kategori</th>
						<th>Aksi</th>
					</thead>
					<tbody>
						<?php
							$no = 1;
						?>

						@foreach($daftar_produk as $item)
						<tr>
							<td>{{ $no++ }}</td>
							<td>{{ $item->nama_produk }}</td>
							<td><img src="{{asset('/upload_file/'.$item->foto_produk)}}" width="100px" height="auto"></td>
							<td>{{ $item->harga_satuan }}</td>
							<td>{{ $item->stok }}</td>
							<td>{{ $item->kategori }}</td>
							<td class="text-center">
								<a href="/delete_produk/{{$item->id}}" class="btn btn-md btn-danger">Hapus</a>
								<a href="/edit_produk/{{$item->id}}" class="btn btn-md btn-info">Edit</a>
								<a href="/detail_produk/{{$item->id}}" class="btn btn-md btn-warning">Detail</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
		</div>
	</div>
</body>
</html>