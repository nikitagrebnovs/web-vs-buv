<?php
use \App\Http\Controllers\ContactController;
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
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contact');








Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact-form');

Route::post('/messages/{id}/edit', [ContactController::class, 'update'])->name('contact-form');

Route::get('/messages', [ContactController::class, 'allData'])->name('contact-data');

Route::get('/messages/{id}', [ContactController::class, 'viewData'])->name('view-messages');

Route::get('/messages/{id}/edit', [ContactController::class, 'editData'])->name('edit-message');

Route::get('/messages/{id}/delete', [ContactController::class, 'deleteData'])->name('delete-message');




