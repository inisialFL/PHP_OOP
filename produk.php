<?php  

//jualan produk
//komik
//game

class Produk {
	//"judul", "penulis", "penerbit", 0 adalah nilai default yang bisa ditimpa dengan nilai baru.
	public $judul = "judul",
		   $penulis = "penulis",
		   $penerbit = "penerbit",
		   $harga = 0;


	public function getLabel() {
		//this = untuk ngambil isi dari property yang ada di dalam class
		return "$this->penulis, $this->penerbit";
	}
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Super Mario Bros";
// $produk2->propertytambahan = "hahaha";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 50000;

$produk4 = new Produk();
$produk4->judul = "Super Mario Bros";
$produk4->penulis = "Shigeru Miyamoto";
$produk4->penerbit = "Nintendo";
$produk4->harga = 250000;

//manual
echo "Komik : $produk3->penulis, $produk3->penerbit";
echo "<br>";

//menggunakan method
echo "Komik: ".$produk3->getLabel();
echo "<br>";
echo "Game: ".$produk4->getLabel();

