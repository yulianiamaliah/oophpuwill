<?php 
Abstract class Produk{
	protected $Judul,
				$Penerbit,
				$Pengarang,
				$Harga,
				$Diskon = 0;



				public function __construct( $Judul="Judul", $Penerbit="Penerbit", $Pengarang="Pengarang", $Harga= 0 ) {

					$this->Judul= $Judul;
					$this->Penerbit= $Penerbit;
					$this->Pengarang= $Pengarang;
					$this->Harga= $Haraga;

}

public function setJudul( $Judul ){
	$this->Judul = $Judul;
}



public function geJudul(){
	return $this->Judul;
}

public function setPengarang( $Pengarang ){
	$this->Pengarang = $Pengarang;
}


public function getPengarang(){
	return $this->Pengarang;
}

public function setPenerbit( $Penerbit ){
	$this->Penerbit =$Penerbit;
}


public function getPenerbit(){
	return $this->Penerbit;
}
public function setDiskon( $Diskon ){
	$this->Diskon = $Diskon;
}
public function getDiskon(){
	return $this->Diskon;
}

public function setHarga( $Harga ){
	$this->Harga = $Harga;
}

public function getHarga(){
	return $this->Harga-($this->Harga * $this->Diskon / 100);
}




public function getLabel() {
	return "$this->Judul, $this->Penerbit";
}

Abstract public function getInfo();

}









 ?>