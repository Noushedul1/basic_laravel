<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ViewcontactController;

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

Route::get('/',[UserController::class, "welcome"])->name('welcome');
Route::get('/details',[UserController::class, 'details'])->name('details');
Route::get('/about',[UserController::class, 'about'])->name('about');
Route::get('/contacts', [UserController::class, 'contact'])->name('contacts');
Route::get('/mycontact', [ContactController::class, 'mycontact'])->name('mycontact');
Route::post('/fullname', [ViewcontactController::class, 'fullname'])->name('fullname');
Route::get('/productdetail/{id}',[UserController::class, 'pDetail'])->name('pdetails');