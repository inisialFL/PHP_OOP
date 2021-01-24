<?php

//sebelum menggunakan autoloading
	// require_once 'Produk/InfoProduk.php';
	// require_once 'Produk/Produk.php';
	// require_once 'Produk/Komik.php';
	// require_once 'Produk/Game.php';
	// require_once 'Produk/CetakInfoProduk.php';
	// require_once 'Produk/User.php';

	// require_once 'Service/User.php';


//jalankan semua class yang ada di dalam folder Produk secara otomatis
	// spl_autoload_register(function($class) {
	// 	require_once 'Produk/' .$class. '.php';
	// });

//dengan DIR atau tanpa DIR sama saja, hanya saja dengan DIR lebih lengkap
	// spl_autoload_register(function($class) {
	// 	require_once __DIR__ .'/Produk/' .$class. '.php';
	// });


//autoloading pada aplikasi yang punya namespace yang berbeda, walaupun nama class-nya sama tetap bisa dipanggil
spl_autoload_register(function($class) {
	//explode = untuk memecah sebuah string ($class) berdasarkan pemisah tertentu (\\)
	//App\Produk\User = ["App", "Produk", "User"]
	$class = explode('\\', $class);
	//mengambil elemen terakhir dari class (User)
	$class = end($class);
	require_once __DIR__ .'/Produk/' .$class. '.php';
});

spl_autoload_register(function($class) {
	$class = explode('\\', $class);
	$class = end($class);
	require_once __DIR__ .'/Service/' .$class. '.php';
});