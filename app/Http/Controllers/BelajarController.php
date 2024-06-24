<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
	public function helo(){
		return "Ardhiani Laura";
	}

	public function biodata_diri(){
		return view('biodata_diri');
	}

	public function form_biodata(){
		return view('form_biodata');
	}

	public function save_biodata(Request $hasil){
		$nama_lengkap = $hasil->nama;
		$tanggal_lahir = $hasil->tgl_lahir;
		$alamat = $hasil->alamat;
		$jenis_kelamin = $hasil->jenis_kelamin;
		$email = $hasil->email;
		$hobi = $hasil->hobi;

		return view('hasil_biodata', compact('nama_lengkap', 'tanggal_lahir', 'alamat', 'jenis_kelamin', 'email', 'hobi'));
	}
}