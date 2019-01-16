<?php 

class Produk{
	public $Judul,
			$Penerbit,
			$Pengarang,
			$Harga,
			$JmlHalaman,
			$WaktuMain,
			$tipe;

			public function __construct($Judul="Judul", $Penerbit="Penerbit", $Pengarang="Pengarang", $Harga= 0, $JmlHalaman = 0, $WaktuMain = 0, $tipe) {

			$this->Judul= $Judul;
			$this->Penerbit= $Penerbit;
			$this->Pengarang= $Pengarang;
			$this->Harga= $Harga;
			$this->JmlHalaman= $JmlHalaman;
			$this->WaktuMain= $WaktuMain;
			$this->tipe= $tipe;
			}

	public function getLabel(){ 
		return "$this->Judul, $this->Penerbit";
	}



	public function getInfoLengkap(){
		$str ="{$this->tipe} : {$this->getLabel()} | {$this->Pengarang} | (Rp. {$this->Harga})";
		if($this->tipe == "Game"){
			$str .= "- {$this->JmlHalaman} Halaman.";


	}else if($this->tipe =="Novel"){
		$str.=" ~{$this->WaktuMain} Jam.";
	}
	return $str;
	}
}


class CetakInfoProduk {
	public function cetak( produk $produk){
		$str ="{$produk->getLabel()} | {$produk->Pengarang} | (Rp.{$produk->Harga})";
		return $str;
	}
}

$produk1 = new Produk("Naruto","Masashi Kishimoto", "Shooenin Jump", 300000, 0, 50, "Game");
$produk2 = new Produk("Bulan", "Tere Liye", "PT Gramedia", 36000, 300, 0, "Novel");

echo "komik : ". $produk1->getLabel();
echo "<br>";
echo "Novel : ". $produk2->getLabel();
