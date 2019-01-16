<?php 

// class ContohStatic{
// 	public static $angka = 1 ;

// 	public static function halo(){
// 		return "hallo.".self::$angka++."kali.";
// 	}
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::hallo();
// echo "<br>";
// echo ContohStatic::hallo();


class contoh {
	public static $angka = 1;

	public function halo(){
		return "Halo" . self ::$angka++ . " kali. <br>";
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