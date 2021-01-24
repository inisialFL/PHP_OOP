<?php

class Produk {
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $jumlahHalaman,
		   $waktuMain;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0, $waktuMain = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jumlahHalaman = $jumlahHalaman;
		$this->waktuMain = $waktuMain;
	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoProduk() {
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		return $str;	
	}
}

//class Komik (child) bisa menggunakan apapun dari class Produk (parent)
//$tipe tidak dibutuhkan lagi, karena object sudah tau kalau ini komik
class Komik extends Produk {
	public function getInfoProduk() {
		$str = "Komik: {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jumlahHalaman} Halaman.";

		return $str;
	}
}

class Game extends Produk {
	public function getInfoProduk() {
		$str = "Komik: {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";

		return $str;
	}
}

class CetakInfoProduk {
	public function cetak(Produk $produk) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 50000, 100, 0);
$produk2 = new Game("Super Mario Bros", "Shigeru Miyamoto", "Nintendo", 250000, 0, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
