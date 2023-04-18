<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardsController;
use App\Http\Controllers\ContactController;

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

Route::get('/', [CardsController::class, 'homepageCards'])->name('homepage.cards');

Route::get('/singleCard/{id}', [CardsController::class, 'singleCard']);

Route::get('/contacts', [ContactController::class, 'contacts'])->name('contacts');

Route::post('/send-contacts', [ContactController::class, 'sendMessage'])->name('contacts.send');