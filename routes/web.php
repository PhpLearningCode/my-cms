<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


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

Route::get('/', HomeController::class)->name('home');
Route::get('/contato', [ContactController::class, 'index'])->name('contact');
Route::post('/email', [ContactController::class, 'form'])->name('email');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');

Route::post('/login', [AdminController::class, 'login'])->name('login');
Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin-home', [AdminController::class, 'home'])->name('admin-home');
    Route::get('/admin-new', [AdminController::class, 'new'])->name('admin-new');
    Route::post('/new-post', [AdminController::class, 'newPost'])->name('new-post');
    Route::get('/delete-post/{id}', [AdminController::class, 'deletePost'])->name('delete-post');
    Route::get('/update-post/{post}', [AdminController::class, 'updatePost'])->name('update-post');


});


