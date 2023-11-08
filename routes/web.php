<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\teste\Teste01Controller;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* Route::get('/acerca-de', function(){
    return view('acercade');
});
 */


Route::controller(Teste01Controller::class)->group(function(){
    Route::get('/acercade', 'Facerca')->name('acercade.pagina')->middleware('VIdade');
    Route::get('/contactos',  'Fcontactos')->name('contactos.pagina');

});