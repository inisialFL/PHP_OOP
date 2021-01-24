<?php

// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';


//jalankan semua class yang ada di dalam folder Produk secara otomatis
	// spl_autoload_register(function($class) {
	// 	require_once 'Produk/' .$class. '.php';
	// });

//dengan DIR atau tanpa DIR sama saja, hanya saja dengan DIR lebih lengkap
spl_autoload_register(function($class) {
	require_once __DIR__ .'/Produk/' .$class. '.php';
});
