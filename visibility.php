<?php

class Produk {
	public $judul,
		   $penulis,
		   $penerbit;

	protected $diskon;
		   
	private $harga;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function getHarga() {
		return $this->harga - ($this->harga * $this->diskon / 100);
	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoProduk() {
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		return $str;	
	}
}

class Komik extends Produk {
	public $jumlahHalaman;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0) {

		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->jumlahHalaman = $jumlahHalaman;
	}

	public function setDiskon($diskon = 0) {
		$this->diskon = $diskon;
	}

	public function getInfoProduk() {
		$str = "Komik: ".parent::getInfoProduk()." - {$this->jumlahHalaman} Halaman.";

		return $str;
	}
}

class Game extends Produk {
	public $waktuMain;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {

		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->waktuMain = $waktuMain;
	}

	public function getInfoProduk() {
		$str = "Komik: ".parent::getInfoProduk()." ~ {$this->waktuMain} Jam.";

		return $str;
	}
}

class CetakInfoProduk {
	public function cetak(Produk $produk) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 50000, 100);
$produk2 = new Game("Super Mario Bros", "Shigeru Miyamoto", "Nintendo", 250000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

//jika menggunakan visibility public, property dari class Produk bisa diakses dari luar class
	//echo $produk1->harga;

//problem dari visibility public, bisa mengubah harga tanpa mengkontruksi object
	//echo $produk1->harga = 5000;

//jika visibility diubah menjadi protected, hanya bisa diakses oleh class Produk beserta turunannya
	//echo $produk1->getHarga();

//jika visibility diubah menjadi private, hanya bisa diakses oleh class Produk, agar tetap bisa dipanggil, pindahkan method getHarga ke class Produk.
	//echo $produk1->getHarga();

//karena diskon menggunakan visibility public, sehingga Property bisa diakses dari luar class
	//$produk1->setDiskon(50);
		//$produk1->diskon = 70;
		//echo $produk1->getHarga();

//jika menggunakan visibility protected
$produk1->setDiskon(50);
echo $produk1->getHarga();
