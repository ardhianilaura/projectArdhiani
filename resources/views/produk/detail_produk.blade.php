@extends('layout.layout')
@section('content')
<div class="container">
  <div class="row mt-4">
    <div class="col col-lg-8 col-md-8">
      <div id="carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
        @foreach($item_produk as $item)
        @if($index == 0)
          <div class="carousel-item active">
              <img src="{{asset('/upload_file/'.$item->foto_produk)}}" width="100px" height="auto" lass="d-block w-100" alt="...">
          </div>
        @else
          <div class="carousel-item">
              <img src="{{asset('/upload_file/'.$item->foto_produk)}}" width="100px" height="auto" lass="d-block w-100" alt="...">
          </div>
        @endif
        @endforeach
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <!-- deskripsi produk -->
    <div class="col col-lg-4 col-md-4">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              @foreach($item_produk as $item)
                <tr>
                  <td>Nama Produk</td>
                  <td><?php echo $item->nama_produk; ?></td>
                </tr>

                <tr>
                  <td>Harga Satuan</td>
                  <td><?php echo $item->harga_satuan; ?></td>
                </tr>

                <tr>
                  <td>Stok</td>
                  <td><?php echo $item->stok; ?></td>
                </tr>

                <tr>
                  <td>Kategori</td>
                  <td><?php echo $item->kategori; ?></td>
                </tr>

              <?php echo anchor('/list_produk','<div class="btn btn-sm btn-primary">Kembali</div>')?>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection