<?php 

class Produk{
	public $Judul,
			$Penerbit,
			$Pengarang,
			$Harga,
			$JmlHalaman,
			$WaktuMain;

			public function __construct($Judul="Judul", $Penerbit="Penerbit", $Pengarang="Pengarang", $Harga= 0, $JmlHalaman = 0, $WaktuMain = 0) {

			$this->Judul= $Judul;
			$this->Penerbit= $Penerbit;
			$this->Pengarang= $Pengarang;
			$this->Harga= $Harga;
			$this->JmlHalaman= $JmlHalaman;
			$this->WaktuMain= $WaktuMain;
	}

	public function getLabel(){ 
		return "$this->Judul, $this->Penerbit";
	}



	public function getInfoLengkap(){
		$str ="{$this->tipe} : {$this->getLabel()} | {$this->Pengarang} | (Rp. {$this->Harga})";
		
	return $str;
	}
}


class Game extends Produk{
	public function getInfoProduk(){
		$str ="  Game : {$this->getLabel()} | {$this->Pengarang} | (Rp. {$this->Harga}) ~ {$this->WaktuMain} Jam.";
		return $str;
	}
}

class Novel extends Produk{
	public function getInfoProduk(){
		$str ="Novel : {$this->getLabel()} | {$this->Pengarang} | (Rp. {$this->Harga}) ~ {$this->JmlHalaman} Halaman.";
		return $str;
	}

}
class CetakInfoProduk {
	public function cetak( produk $produk){
		$str ="{$produk->getLabel()} | {$produk->Pengarang} | (Rp.{$produk->Harga})";
		return $str;
	}
}

$produk1 = new Game("Naruto","Masashi Kishimoto", "Shooenin Jump", 300000, 0, 50);
$produk2 = new Novel("Bulan", "Tere Liye", "PT Gramedia", 36000, 300, 0);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
