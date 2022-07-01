<?php 

class mobil {
	public $merk, $tipe, $mesin, $max_speed;

	function cetaktipe(){
		return $this->tipe;
	}
	function kecepatanMaksimal(){
		return "Kecepatan maksimal dari mobil ini adalah ".$this->max_speed;
	}
}

$bmw = new mobil;
$bmw->merk = "BMW";
$bmw->tipe = "320i";
$bmw->mesin = "3000ph";
$bmw->max_speed = "320km/h";

echo "tipe ".$bmw->kecepatanMaksimal();