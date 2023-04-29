<?php

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


/*  Route di default */
// Route::get('/', function () {
//     return view('welcome');
// });


/** TODO: le seguenti routes non hanno applicazione pratica, ma mi servono per fare alcuni esperimento nel loro utilizzo */
/*
Route::get('/', function () {
    return '<h1>Benvenuto su un portale Laravel!</h1>';
});

Route::get('admin', function () {
    return "<h1>Benvenuto nella console di amministrazione!</h1>";
});

// Per passare dei parametri specifici
Route::get('user/{id}', function ($id) {
    echo "Identificativo utente: " . $id;
});

// Per rendere il parametro non obbligatorio eseguo postpongo il ?
Route::get('utenti/{id?}', function ($id=1) {
    echo "Identificativo utente: " . $id;
});
*/


/* TODO: Le seguenti sono le routes necessarie ai fini di questo progetto */
Route::get('/', function () {
    return view('home');
});