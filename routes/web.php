<?php
use App\mobil;
Route::get('/', function () {
    return view('welcome');
});

route::get('/contoh', function(){
   echo 'Contoh Routing ';
});

Route::resource('Mobil','mobilController');

Route::get('/Mobil', function(){
    return mobil::all();
});

Route::get('Mobil', 'mobilController@index')
    ->name('Mobil.index');

Route::get('', 'mobilController@create');
Route::resource('Mobil', 'mobilController');

