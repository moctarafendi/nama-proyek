<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

// #########################
// Read data pertama
// Route::get('/cobamodel', function(){
// 	$anggota = App\Anggota::all()->first();
// 	echo $anggota->nama;
// 	echo $anggota->alamat;

// });

// ##########################
// Read data with where
// Route::get('/cobamodel', function(){
// 	$anggota = App\Anggota::where('nama','=', 'Taylor Otwell')->first();

// 	echo $anggota->id.' ';
// 	echo $anggota->nama;

// });


// ##########################
// Read data Looping
// Route::get('/cobamodel', function(){
// 	$anggota = App\Anggota::all();
// 	foreach($anggota as $list){
// 		echo $list->id.' ';
// 		echo $list->nama.' ';
// 		echo $list->alamat;
// 		echo '<br>';
// 	}
	
// });

// ##########################
// Insert Data via Route
// Route::get('/cobamodel', function(){
// 	$anggota = new App\Anggota;
// 	$anggota->nama = 'Taylor Otwell';
// 	$anggota->alamat = 'Avenue Park 12';
// 	$anggota->save();

// });

// ##########################
// Update Data via Route
// Route::get('/cobamodel', function(){
// 	$anggota = App\Anggota::find(4);

// 	$anggota->nama = 'John Doe';
// 	$anggota->alamat = 'Silicon Valley';
// 	$anggota->save();

// });

// ##########################
// Delete Data
// Route::get('/cobamodel', function(){
// 	$anggota = App\Anggota::find(4);
// 	$anggota->delete();

// });

Route::get('/relasi', function(){
	#temukan anggota tertentu
	$anggota = App\Anggota::where('nama', '=', 'Akhmad Darma Kasman')->first();
	echo $anggota->nama.' '.'hobinya: ';
	#tampilkan seluruh data hobinya
	foreach($anggota->hobi as $list){
		echo '<li>'.$list->hobi;
	}
});

Route::get('/halamanku', function(){

	return view('halamanku');
});

Route::get('/blade-sample', function(){
	return view('blade-sample');

});