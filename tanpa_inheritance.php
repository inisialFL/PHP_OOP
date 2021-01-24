<?php

class Produk {
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $jumlahHalaman,
		   $waktuMain,
		   $tipe;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0, $waktuMain = 0, $tipe) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jumlahHalaman = $jumlahHalaman;
		$this->waktuMain = $waktuMain;
		$this->tipe = $tipe;
	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoLengkap() {
		$str = "{$this->tipe}: {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		//dapat diselesaikan dengan inheritance
		//komik dan game ini adalah child class dari class produk
		if ($this->tipe == "Komik") {
			$str .= " - {$this->jumlahHalaman} Halaman.";
		} else if ($this->tipe == "Game") {
			$str .= " ~ {$this->waktuMain} Jam.";
		}

		return $str;	
	}
}

//class ini tugasnya hanya satu mencetak seluruh nilai produk pada object
class CetakInfoProduk {
	public function cetak(Produk $produk) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}

//ditambahkan type ("Komik") 
//supaya setiap dilakukan instansiasi (new produk), object ($produk1) tau dia itu apa
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 50000, 100, 0, "Komik");
$produk2 = new Produk("Super Mario Bros", "Shigeru Miyamoto", "Nintendo", 250000, 0, 50, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();

// Komik: Masashi Kishimoto, Shonen Jump
// Game: Shigeru Miyamoto, Nintendo
// Naruto | Masashi Kishimoto, Shonen Jump (Rp. 50000)

//bagaimana cara mencetak gabungan function getLabel dan cetak seperti di bawah ini?
//Komik: Naruto | Masashi Kishimoto, Shonen Jump (Rp. 50000) - 100 Halaman.
//Gme: Super Mario Bros | higeru Miyamoto, Nintendo (Rp. 250000) ~ 50 Jam.