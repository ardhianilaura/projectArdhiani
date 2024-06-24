<?php

namespace App\Http\Controllers;

Use App\ProdukModel;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\DB;


class InputController extends Controller{

    public function input_produk(){
    	return view('produk.input_produk');
    }

    public function save_input_produk(Request $simpan){
    	$nama_produk = $simpan->nama_produk;
    	$harga_satuan = $simpan->harga_satuan;
    	$stok = $simpan->stok;
    	$kategori = $simpan->kategori;
    	$foto_produk = $simpan->file('foto_produk');

    	$file = uniqid('foto_produk');
    	$ekstensi_file = $foto_produk->getClientOriginalExtension();
    	$nama_file = $file . "." . $ekstensi_file;

    	$direktori_upload = public_path().'/upload_file';
    	$foto_produk->move($direktori_upload, $nama_file);

    	$simpan_produk = [
    		'nama_produk' => $nama_produk,
    		'harga_satuan' => $harga_satuan,
    		'stok' => $stok,
    		'kategori' => $kategori,
    		'foto_produk' => $foto_produk
    	];

    	DB::table('daftar_produk')
    		->insert($simpan_produk);

    	return redirect(url('/list_produk'));
    }

    public function list_produk(){
    	$daftar_produk = DB::table('daftar_produk')
    						->select('*')
    						->get();

    	return view('produk.list_produk', compact('daftar_produk'));
    }

    public function delete_produk($id){
    	DB::table('daftar_produk')
    			->where('id',$id)
    			->delete();
    	return redirect('/list_produk');
    }

    public function edit_produk($id){
    	$daftar = DB::table('daftar_produk')
    			->select('*')
    			->where('id', $id)
    			->first();

    	return view('produk.form_edit_produk', compact('daftar'));
    }

    public function save_edit_produk(Request $edit){
    	$nama_produk = $edit->nama_produk;
    	$harga_satuan = $edit->harga_satuan;
    	$stok = $edit->stok;
    	$kategori = $edit->kategori;
    	$id_produk = $edit->id_produk;
    	$foto_produk = $edit->file('foto_produk');

    	$file = uniqid('foto_produk');
    	$ekstensi_file = $foto_produk->getClientOriginalExtension();
    	$nama_file = $file . "." . $ekstensi_file;

    	$direktori_upload = public_path().'/upload_file';
    	$foto_produk->move($direktori_upload, $nama_file);

    	$update_data = [
    		'nama_produk' => $nama_produk,
    		'harga_satuan' => $harga_satuan,
    		'stok' => $stok,
    		'kategori' => $kategori,
    		'foto_produk' => $nama_file
    	];

    	DB::table('daftar_produk')
    		->where('id', $id_produk)
    		->update($update_data);

    	return redirect('/list_produk');
    }

    public function detail_produk($id){
        
        dd(App\ProdukModel::find($id));

        $data = [
            'daftar_produk' => App\ProdukModel::find($id)
        ];

       return view('produk.detail_produk', compact('data'));
    }
}