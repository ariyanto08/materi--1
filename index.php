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

$bmw2 = new mobil;
$bmw2->merk = "BMW";
$bmw2->tipe = "320i";
$bmw2->mesin = "3000ph";
$bmw2->max_speed = "320km/h";

echo "$bmw->mesin";
echo "<br>";
echo "$bmw2->mesin";

if($bmw === $bmw2){
	echo "sama";
}else{
	echo "tidak";
}