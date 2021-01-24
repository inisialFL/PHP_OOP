<?php

// class ContohStatic {
// 	public static $angka = 1;

// 	public static function halo() {
// 		return "Halo " .self::$angka++. " kali.";
// 	}
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();


class Contoh {
	public static $angka = 1;

	public function halo() {
		return "Halo " .self::$angka++. " kali.<br>";
	}
}

$objek1 = new Contoh;
echo $objek1->halo();
echo $objek1->halo();
echo $objek1->halo();

echo "<hr>";

$objek2 = new Contoh;
echo $objek2->halo();
echo $objek2->halo();
echo $objek2->halo();