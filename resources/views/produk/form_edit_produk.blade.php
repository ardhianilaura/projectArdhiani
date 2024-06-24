@extends('layout/layout')
@section('aplikasi_kasir')
	<div class="container">
			<div class="card p-3">
				<form action="{{ url('/save_edit_produk') }}" method="POST" enctype="multipart/form-data">
				@csrf
				<h1 class="text-center mb-3">FORM EDIT PRODUK</h1><br>
				<div>
					<label for="nama_produk">Nama Produk</label>
					<input type="text" name="nama_produk" id="nama_produk" value="{{$daftar->nama_produk}}" class="form-control"><br>

					<label for="harga_satuan">Harga Satuan</label>
					<input type="number" name="harga_satuan" id="harga_satuan" value="{{$daftar->harga_satuan}}" class="form-control"><br>

					<label for="stok">Stok</label>
					<input type="number" name="stok" id="stok" value="{{$daftar->stok}}" class="form-control"><br>

					<label for="kategori">Kategori</label>
					<select name="kategori" id="kategori"  class="form-control">
						<option value="{{$daftar->kategori}}">{{$daftar->kategori}}</option>
						<option>---</option>
						<option value="Bahan Makanan">Bahan Makanan</option>
						<option value="Peralatan Rumah Tangga">Peralatan Rumah Tangga</option>
						<option value="Alat Tulis">Alat Tulis</option>
					</select><br>

					<label for="foto_produk">Foto Produk</label>
					<input type="file" name="foto_produk" id="foto_produk"><br><br>

					<input type="text" name="id_produk" id="id_produk" value="{{$daftar->id}}" hidden>
					<button type="submit" class="btn btn-md btn-success">Edit</button>
				</div>
			</form>
		</div>
	</div>
@endsection