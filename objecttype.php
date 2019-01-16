<?php 

class Produk{
	public $Judul,
			$Penerbit,
			$Pengarang,
			$Harga;

			public function __construct($Judul="Judul", $Penerbit="Penerbit", $Pengarang="Pengarang", $Harga="Harga") {

			$this->Judul="$Judul";
			$this->Penerbit="$Penerbit";
			$this->Pengarang="$Pengarang";
			$this->Harga="$Harga";


			}

	public function getLabel(){ 
		return "$this->Judul, $this->Penerbit";
	}
}

class CetakInfoProduk {
	public function cetak( produk $produk){
		$str ="{$produk->getLabel()} | {$produk->Pengarang} | (Rp.{$produk->Harga})";
		return $str;
	}
}

$produk1 = new Produk("Naruto","Masashi Kishimoto", "Shooenin Jump", "300000");
$produk2 = new Produk("Bulan", "Tere Liye", "PT Gramedia", "36000");

echo "komik : ". $produk1->getLabel();
echo "<br>";
echo "Novel : ". $produk2->getLabel();
echo "<br>";

$InfoProduk1 = new CetakInfoProduk ();
echo $InfoProduk1->cetak($produk1);