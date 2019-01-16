<?php 
class Novel extends Produk implements InfoProduk {
	public $JmlHalaman;

	public function __construct($Judul="Judul", $Penerbit="Penerbit", $Pengarang="Prngarang", $Harga= 0, $JmlHalaman = 0){
		parent::__construct( $Judul, $Penerbit, $Pengarang, $Harga);
		$this->JmlHalaman = $JmlHalaman;



	}

public function getInfo(){
	$str =" {$this->getLabel()} | {$this->Pengarang} | (Rp. {$this->Harga})";

	return $str;
}

public function getInfoProduk(){
	$str =" Novel : ". $this->getInfo() ." - {$this->JmlHalaman} Halaman.";
	return $str;
}
}
