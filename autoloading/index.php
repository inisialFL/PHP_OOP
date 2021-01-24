<?php

//cut ke file init
	// require_once 'App/Produk/InfoProduk.php';
	// require_once 'App/Produk/Produk.php';
	// require_once 'App/Produk/Komik.php';
	// require_once 'App/Produk/Game.php';
	// require_once 'App/Produk/CetakInfoProduk.php';

require_once 'App/init.php';

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 50000, 100);
$produk2 = new Game("Super Mario Bros", "Shigeru Miyamoto", "Nintendo", 250000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();