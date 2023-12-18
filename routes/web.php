<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PruebasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    // SEO::setTitle('SEO');
    return view('index');
})->name('/');


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::get('/sabias-que', function () {
    return view('sabias-que.index');
})->name('sabias-que');

Route::get('club-lloron', function () {
    return view('club-lloron');
})->name('club-lloron');

Route::get('/historias', function () {
    return view('historias.index');
})->name('historias');

Route::get('/que-es-hastalatumba', function () {
    return view('que-es-hastalatumba.index');
})->name('que-es-hastalatumba');

Route::get('/sepulturero', function () {
    return view('sepulturero');
})->name('sepulturero');


Route::get('/preguntas-frecuentes', function () {
    return view('preguntas-frecuentes.index');
})->name('preguntas-frecuentes');

Route::get('historias/la-mujer-lobo', function () {
    return view('mausoleo.la-mujer-lobo.index');
})->name('la-mujer-lobo');

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

Route::get('/dashboard/historias', function () {
    return view('dashboard.historias.index');
})->name('admin-historias');

Route::get('/perfil/misdatos', function () {
    return view('perfil.misdatos.index');
})->name('mis-datos');

Route::get('/perfil/publicar', function () {
    return view('perfil.publicar.index');
})->name('publicar-historia');

Route::get('/perfil', function () {
    return view('perfil.index');
})->name('perfil');


Route::get('/registro', function () {
    return view('registro.index');
})->name('registro');

Route::get('/ingreso', function () {
    return view('ingreso.index');
})->name('ingreso');



// //rutas de prueba

// Route::controller(PruebasController::class)->group(function(){
//     Route::get('/tinymceprueba', 'index')->name('tinymce');
// });