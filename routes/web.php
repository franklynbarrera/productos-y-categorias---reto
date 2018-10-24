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

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/listadoCategorias', 'CategoriasController@Listar_Categorias');
Route::get('/categorias-productos/{categoriaId?}', 'ProductosController@Productos_por_categoria');
Route::post('/buscar-productos/{nombre?}', 'ProductosController@Buscar_Producto');
Route::get('/buscar-productos', 'ProductosController@Buscar_Producto');
Route::post('/registrar-categoria/{nombre?}', 'CategoriasController@Registrar_Categoria');
Route::post('/registrar-producto', 'ProductosController@Registrar_Producto');

Route::get('/crear-categoria', function()
{
    return view('crearCategoria');
});

Route::get('/crear-producto', function()
{
	$lista_categoria = \DB::table('categorias')->get();
    return view('crearProducto',['categorias'=>$lista_categoria]);
});
