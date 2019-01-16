<?php 

interface InfoProduk{
	public function getInfoProduk();
}

 Abstract class Produk{
  protected  $Judul, 
	       $Penerbit, 
           $Pengarang,
           $Harga,
           $Diskon = 0;
	       
	      

	       public function __construct( $Judul="Judul", $Penerbit="Penerbit", $Pengarang="Pengarang", $Harga= 0 ) {

	       	$this->Judul= $Judul;
	       	$this->Penerbit= $Penerbit;
	       	$this->Pengarang= $Pengarang;
	       	$this->Harga= $Harga;
	       	
}

public function setJudul( $Judul ){
$this->Judul = $Judul;
}



public function getJudul(){
	return $this->Judul;
}

public function setPengarang( $Pengarang ){
	$this->Pengarang = $Pengarang;
}


public function getPengarang(){
	return $this->Pengarang; 
}

public function setPenerbit( $Penerbit ){
	$this->Penerbit = $Penerbit;
}

public function getPenerbit(){
	return $this->Penerbit;
}

public function setDiskon( $Diskon){
	$this->Diskon = $Diskon;
}
public function getDiskon(){
	return $this->Diskon;
}

public function setHarga( $Harga ){
	$this->Harga = $Harga;
}

public function getharga(){
	return $this->Harga-($this->Harga * $this->Diskon / 100);
}




public function getLabel() {
	return "$this->Judul, $this->Penerbit";
}

  Abstract public function getInfo();

}
	





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
	$str =" Game :". $this->getInfo()." ~ {$this->WaktuMain} Jam.";
	return $str;
}


}


class Novel extends Produk implements InfoProduk {
	public $JmlHalaman;

	public function __construct($Judul="Judul", $Penerbit="Penerbit", $Pengarang="Pengarang", $Harga= 0, $JmlHalaman = 0){
		parent::__construct( $Judul, $Penerbit, $Pengarang, $Harga);
		$this->JmlHalaman = $JmlHalaman;


	}

public function getInfo(){
	$str =" {$this->getLabel()} | {$this->Pengarang} | (Rp. {$this->Harga})";

	return $str;
}

 public function getInfoProduk(){
		$str =" Novel : ". $this->getInfo()  ." - {$this->JmlHalaman} Halaman.";
	return $str;

	}
}

class cetakInfoProduk{
public $daftarProduk = array();

public function tambahProduk (Produk $produk){
	$this->daftarProduk[] = $produk;
}

public function cetak(){
		$str ="DAFTAR PRODUK : <br>";

        foreach($this->daftarProduk as $p){
        	$str .= "- {$p->getInfoProduk()} <br>";
        }

		return $str;
	}
}


$produk1 = new Game("Naruto","Masashi Kishimoto","Shoenin Jump",300000, 0, 50);
$produk2 = new Novel("Hujan","Tere Liye","PT Gramedia", 36000, 300, 0);

$cetakProduk = new cetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );

echo $cetakProduk->cetak();


