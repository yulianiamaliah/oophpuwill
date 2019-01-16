<?php 

// class contohStatic{
// public static $angka = 1;

// public static function halo(){
// return "halo" . self::$angka++ ."kali.";
// }


// }

// echo contohstatic::$angka;
// echo "<br>";
// echo contohstatic::halo();
// echo "<hr>";
// echo contoohstatic::halo();


class contoh{
	public static $angka = 1;
	public function halo() {
		return "halo". self::$angka++ . "kali. <br>";
	}
}

$obj = new contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

?>