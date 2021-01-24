<?php

//nama constant dengan huruf kapital semua, untuk membedakan dengan variable
//cara pertama
//tidak bisa disimpan ke dalam sebuah class, harus disimpan di luar sebagai constant global
	// define('NAMA', 'Fitri Lestari');
	// echo NAMA;
	// echo "<br>";

//cara kedua
//bisa disimpan di dalam class, sehingga bisa digunakan di dalam konsep oop
	// const UMUR = 23;
	// echo UMUR;


// class Coba {
// 	const NAMA = 'Fitri Lestari';
// }

// echo Coba::NAMA;


//Magic Constant
//untuk menampilkan letak baris constant
	//echo __LINE__;

//untuk menampilkan letak file constant
	//echo __FILE__;


//untuk menampilkan letak function constant
	// function coba() {
	// 	return __FUNCTION__;
	// }

	// echo coba();


//untuk menampilkan letak class constant
class Coba {
	public $kelas = __CLASS__;
}

$object = new Coba;

echo $object->kelas;