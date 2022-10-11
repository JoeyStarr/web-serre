<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pageaccueille;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\AdminSerre;
use App\Http\Controllers\Auth\LoginController;

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


Route::get('/', [Pageaccueille::class, 'index'])->name('accueil');
Route::get('/contact', [Pageaccueille::class, 'contact']);


Route::post('login', [Pageaccueille::class, 'authentification'])->name('authentification');
Route::get('/logout', [Pageaccueille::class, 'logout']);
Route::get('/dashboard', [dashboardController::class, 'index']);
Route::get('/dashboardadmin', [dashboardController::class, 'indexadmin']); 

Route::post('/commande', [Pageaccueille::class, 'commande'])->name('commande');
Route::post('/MesMessage', [Pageaccueille::class, 'MesMessage'])->name('contact');

Route::get('/reglage', [AdminSerre::class, 'pagereglage']); 
Route::get('/commande', [AdminSerre::class, 'pagecommande']); 
