<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::get('testmodel', function (){
	$q = App\post::all();
	$a = App\produk::all();
	$b = App\pengguna::all();
	$c = App\pengaturan::all();
	return $q."</br></br>".$a."</br></br>".$b."</br></br>".$c;
});

route::get('/test','Mycontroller@percobaan');
route::get('/test2','Mycontroller@percobaan2');
route::get('/test3','Mycontroller@percobaan3');
route::get('/test4','Mycontroller@percobaan4');
route::get('/test5','Mycontroller@percobaan5');
route::get('/test6','Mycontroller@percobaan6');
route::get('/test7/{data?}/{data2}','Mycontroller@percobaan7');




