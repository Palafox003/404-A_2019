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

Route::get('/',function(){
	return view('wix.wix');
});

Route::get('palafox',function(){
	return "Hola Israel Palafox";
});
Route::get('utgz/{nombre?}',function($nombre="Por favor inserta un valor."){
	return "Hola ".$nombre;
});
Route::get('ejemplo',function(){
	return view('ejemplo');
});
Route::get('wix',function(){
	return view('wix.wix');
})->name("wix");

Route::get('categorias/{id_categoria}','TiendaController@categorias')->name('selectCategoria');

Route::get('tienda','TiendaController@index')->name('tienda');

Route::get('tienda/detalles/{id_producto}','TiendaController@detalles')->name('detallesProducto');
Route::post('tienda','TiendaController@store')->name('tienda.store');

Route::prefix('user')->group(function(){

});


Route::prefix('admin')->group(function () {
	Route::resource('categorias','CategoriasController');

	Route::resource('usuarios','UsersController')->middleware('admin');
		Route::post('/usuarios/buscar','UsersController@buscar')->middleware('auth','admin');
;
	Route::resource('productos','ProductosController')->middleware('auth','admin');
	Route::resource('roles','RolesController')->middleware('auth','admin');
});


Auth::routes();

Route::get('/home', function(){
	return view('wix.wix');
});
