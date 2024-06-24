<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LuasSegitiga extends Model
{
    protected $alas, $tinggi;

    function setAlas($alas_segitiga){
    	$this->alas = $alas_segitiga;
    }

    function setTinggi($tinggi_segitiga){
    	$this->tinggi = $tinggi_segitiga;
    }

    function hasilHitung(){
    	$luas = 1/2 * ($this->alas * $this->tinggi);

    	return $luas;
    }

    function getAlas(){
    	return $this->alas;
    }

    function getTinggi(){
    	return $this->tinggi;
    }
}
