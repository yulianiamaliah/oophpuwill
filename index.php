<?php  

require_once 'App/init.php';

// $produk1 = new Game("Naruto","Masashi Kishimoto","Shoenin Jump",300000, 0, 50);
// $produk2 = new Novel("Hujan","Tere Liye","PT Gramedia", 36000, 300, 0);

// $cetakProduk = new cetakInfoProduk();
// $cetakProduk->tambahProduk( $produk1 );
// $cetakProduk->tambahProduk( $produk2 );

// echo $cetakProduk->cetak();

// echo"<hr>";
use App\Service\user as Serviceuser;
use App\Produk\user as Produkuser;


new Serviceuser();
echo "<br>";
new Produkuser();