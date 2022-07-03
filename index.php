<?php 

class mobil {
	private $merk, $tipe, $mesin, $max_speed;

	public function cetaktipe(){
		return $this->tipe;
	}
	public function kecepatanMaksimal(){
		return "Kecepatan maksimal dari mobil ini adalah ".$this->max_speed;
	}
}

function injakgas(){
	return "balala";
}

class BMW extends mobil{

}

class Tesla extends mobil{
	function AutoPilot(){
		echo "Jalan sendiri";
	}
}

$bmw = new BMW;
$bmw->merk = "BMW";
$bmw->tipe = "320i";
$bmw->mesin = "3000ph";
$bmw->max_speed = "320km/h";

$tesla = new tesla;
$tesla->merk = "tesla";
$tesla->tipe = "ae-xe-2000";
$tesla->mesin = "listrik";
$tesla->max_speed = "300km/h";


$tesla->AutoPilot();