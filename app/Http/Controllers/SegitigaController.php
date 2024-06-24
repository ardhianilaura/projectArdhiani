<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\LuasSegitiga;

class SegitigaController extends Controller
{
    public function hitung_luas_segitiga(){
		return view('hitung_luas_segitiga');
	}

	public function hasil_luas_segitiga(Request $hasil){
		$alas_segitiga = $hasil->alas;
		$tinggi_segitiga = $hasil->tinggi;

		$LuasSegitiga = new LuasSegitiga;
		$LuasSegitiga->setAlas($alas_segitiga);
		$LuasSegitiga->setTinggi($tinggi_segitiga);
		$LuasSegitiga->hasilHitung();

		return view('hasil_luas_segitiga', compact('LuasSegitiga'));
	}
}
