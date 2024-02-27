<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthenticationController;
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

Route::get('/contacts', [ContactController::class, 'index']) ->name('contacts');
Route::get('/contacts/create', [ContactController::class, 'create'])->name('create-contact');
Route::post('/contacts/create', [ContactController::class, 'store'])->name('create-contact');

Route::get('/contacts/edit/{id}', [ContactController::class, 'edit'])->name('edit-contact');
Route::post('/contacts/edit/{id}', [ContactController::class, 'update'])->name('update-contact');

Route::get('/contacts/destroy/{id}', [ContactController::class, 'delete'])->name('delete-contact');


Route::get('/login', [AuthenticationController::class, 'login'])->name('login');
// Route::post('/login', [AuthenticationController::class, 'authenticate'])->name('authenticate');

Route::get('/register', [AuthenticationController::class, 'register'])->name('register');
// Route::post('/register', [AuthenticationController::class,'store'])->name('store');

Route::post('/contacts/search', [ContactController::class, 'search'])->name('search');