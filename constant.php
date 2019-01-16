<?php 

// define('Nama', 'Yuliani Amaliah');
// echo Nama;

// echo "<br>";
// const umur = 16;
// echo umur;

// class coba{
// const Nama = 'Yuliani Amaliah';

// }
// echo ::Nama;


// echo __LINE__;


// function coba(){
// return __function__;

// }
// echo coba();

class coba{
	public $Kelas = __CLASS__;

}
$obj = new coba;
echo $obj->Kelas;



?>