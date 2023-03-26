<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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
    return view('auth.login');
});

Auth::routes();
Route::get('/root', [App\Http\Controllers\IndexController::class, 'root'])->name('root');
Route::get('/allmember', [App\Http\Controllers\HomeController::class, 'allmember'])->name('allmember');
Route::get('/generate-pdf',[App\Http\Controllers\HomeController::class,'generate_pdf'])->name('generate-pdf');
Route::get('/home', [App\Http\Controllers\IndexController::class, 'index'])->name('home');
Route::get('/sendmessage', [App\Http\Controllers\HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/monthlyreport', [App\Http\Controllers\IndexController::class, 'monthlyreport'])->name('monthlyreport');
Route::get('/index', [App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::post('/addmember', [App\Http\Controllers\IndexController::class, 'addmember'])->name('addmember');
Route::get('/{id}', [App\Http\Controllers\IndexController::class, 'details'])->name('details');
Route::get('/{id}/edit', [App\Http\Controllers\IndexController::class, 'edit'])->name('edit');
Route::post('/{id}/update', [App\Http\Controllers\IndexController::class, 'update'])->name('update');
Route::post('/{id}/edit', [App\Http\Controllers\IndexController::class, 'delete'])->name('edit');
Route::post('/addtransaction', [App\Http\Controllers\IndexController::class, 'addtransaction'])->name('addtransaction');
Route::post('/searchbeneficiary', [App\Http\Controllers\IndexController::class, 'searchbeneficiary'])->name('searchbeneficiary');
Route::get('/seesearch/{id}', [App\Http\Controllers\IndexController::class, 'seesearch'])->name('seesearch');
Route::post('/sendsms',[App\Http\Controllers\IndexController::class,'sendsms'])->name('sendsms');
Route::get('/download-pdf',[App\Http\Controllers\HomeController::class,'download_pdf']);
