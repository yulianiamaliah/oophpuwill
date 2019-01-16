<?php 

class Produk{
	public $Judul, 
	       $Penerbit, 
           $Pengarang;
           protected $Diskon = 0;
           private $Harga;
	       
	      

	       public function __construct( $Judul="Judul", $Penerbit="Penerbit", $Pengarang="Pengarang", $Harga= 0 ) {

	       	$this->Judul= $Judul;
	       	$this->Penerbit= $Penerbit;
	       	$this->Pengarang= $Pengarang;
	       	$this->Harga= $Harga;
	       	
}	       

public function getharga() {
	return $this->Harga-($this->Harga * $this->Diskon / 100);
}






public function getLabel() {
	return "$this->Judul, $this->Penerbit";
}




public function getInfoProduk(){
	$str =" {$this->getLabel()} | {$this->Pengarang} | (Rp. {$this->Harga})";

	return $str;
}

}

class Game extends Produk{
	public $WaktuMain;

	public function __construct($Judul="Judul", $Penerbit="Penerbit", $Pengarang="Pengarang", $Harga= 0, $WaktuMain = 0){

	parent::__construct( $Judul, $Penerbit, $Pengarang, $Harga);
	$this->WaktuMain = $WaktuMain;


	}





	public function getInfoProduk(){
	$str =" Game :". parent::getInfoProduk()." ~ {$this->WaktuMain} Jam.";
	return $str;
}


}

class Novel extends Produk{
	public $JmlHalaman;

	public function __construct($Judul="Judul", $Penerbit="Penerbit", $Pengarang="Pengarang", $Harga= 0, $JmlHalaman = 0){
		parent::__construct( $Judul, $Penerbit, $Pengarang, $Harga);
		$this->JmlHalaman = $JmlHalaman;


	}

public function setDiskon(  $Diskon){
	$this->Diskon = $Diskon;
}





	public function getInfoProduk(){
		$str =" Novel : ". parent::getInfoProduk()  ." - {$this->JmlHalaman} Halaman.";
	return $str;

	}
}

class CetakInfoProduk {
	public function cetak( produk $produk){
		$str ="{$produk->getLabel()} | {$produk->Pengarang} | (Rp.{$produk->Harga})";
		return $str;
	}
}


$produk1 = new Game("Naruto","Masashi Kishimoto","Shoenin Jump",300000, 0, 50);
$produk2 = new Novel("Bulan","Tere Liye","PT Gramedia", 36000, 300, 0);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getharga();

