<?php 

class hewan {
	public $jumlah_kaki, $Bisa_terbang, $bersuara;

	function kemampuan(){
		return "Bisa_terbang";
	}
	function suara(){
		return "suara";	
	}
}

class Kucing extends hewan{
	function kemampuan(){
		return "Tidak Bisa Terbang";
	}
	function suara(){
		return "Meoww";
	}
}

class Anjing extends hewan{
	function kemampuan(){
		return "Tidak Bisa Terbang";
	}
	function suara(){
		return "Guk guk";
	}
}

class Elang extends hewan{
	function kemampuan(){
		return "Bisa Terbang";
	}
	function suara(){
		return "Miiip";
	}
}

class Angsa extends hewan{
	function kemampuan(){
		return "Bisa Terbang";
	}
	function suara(){
		return "Kwaakk";
	}
}

$momo = new Kucing;
$momo->jumlah_kaki = 4;
echo "Momo adalah Kucing <br>";
echo "Punya kaki sebanyak : ".$momo->jumlah_kaki."<br>";
echo $momo->Bisa_terbang."<br>";
echo "Suaranya : ".$momo->bersuara."<br>";

echo "<hr>";

$doggy = new Anjing;
$doggy->jumlah_kaki = 4;
echo "doggy adalah Anjing <br>";
echo "Punya kaki sebanyak : ".$doggy->jumlah_kaki."<br>";
echo $doggy->Bisa_terbang."<br>";
echo "Suaranya : ".$doggy->bersuara."<br>";

echo "<hr>";

$zya = new Elang;
$zya->jumlah_kaki = 2;
echo "zya adalah Elang <br>";
echo "Punya kaki sebanyak : ".$zya->jumlah_kaki."<br>";
echo $zya->Bisa_terbang."<br>";
echo "Suaranya : ".$zya->bersuara."<br>";

echo "<hr>";

$sasa = new Angsa;
$sasa->jumlah_kaki = 2;
echo "sasa adalah Angsa <br>";
echo "Punya kaki sebanyak : ".$sasa->jumlah_kaki."<br>";
echo $sasa->Bisa_terbang."<br>";
echo "Suaranya : ".$sasa->bersuara."<br>";
