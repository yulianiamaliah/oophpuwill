<?php 

require_once 'app/init.php';

$produk1 = new Game("Naruto","Masashi Kishimoto","Shoenin Jump",300000, 0, 50);
$produk2 = new Novel("Bulan","Tere Liye","PT Gramedia", 36000, 300, 0);

$cetakProduk = new cetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );

echo $cetakProduk->cetak();
echo "<hr>"

 ?>