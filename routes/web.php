<?php

use App\Http\Controllers\ServicioController;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider;
use Illuminate\Support\Facades\Route;

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
Route::get('/Servicio', [ServicioController::class, 'index']);

/*
Route::get('hola', function () {
    return 'hola mundo';
});

Route::get('usuario',function(){
    return("usuario");
});

//Route::get('usuario/{nombre}/{id}', function($nombre , $id){
//    return 'Este es el usuario '. $nombre . ' su id es: ' . $id;
//});

Route::get('cursos/{cursos}' , function( $curso){
    return 'Bienvenido al curso de ' . $curso ;
});

Route::get('talleres/{talleres}' , function( $taller){
    return 'Bienvenido al taller ' . $taller ;
});

/*
Route::get('mivista',function(){
    return view('mivista');
});
*/
/*

Route::get('vista', function(){
    $nombre = 'ChoinElian';
    return view('mivista', compact('nombre'));
});

Route::get( 'Prueba/{nombreSiu}', function($nombreSiu){
    return view('vistaPrueba', compact('nombreSiu'));
} );

Route::get('user/{name})', function($name)
{
  return view('VistaAcceso', compact($name));
})
->where('name','[A-Za-z]+');

Route::get('usuario/{id}', function($id)
{
return view('VistaAcceso');
})
->where('id','[0-9]+');

Route::get('usuario/{id}/{name}', function($id, $name)
{
return view('VistaAcceso');
})
->where(array('id'=>'[0-5]+', 'name' => '[A-Za-z]+'));
*/