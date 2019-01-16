<?php 
class Game extends Produk implements InfoProduk{
	public $WaktuMain;

	public function __construct($Judul="Judul", $Penerbit="Penerbit", $Pengarang="Pengarang", $Harga= 0, $WaktuMain = 0){
    parent::__construct( $Judul, $Penerbit, $Pengarang, $Harga);
	$this->WaktuMain = $WaktuMain;

	}


public function getInfo(){
	$str =" {$this->getLabel()} | {$this->Pengarang} | (Rp. {$this->Harga})";

	return $str;
}

	public function getInfoProduk(){
		$str =" Game :". $this->getInfo()." ~ {$this->WaktuMain}Jam.";
		return $str;
	}



}










 ?>