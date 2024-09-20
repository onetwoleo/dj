<?php

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
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/portfolio', function () {
    return view('portfolio');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/record/store', [App\Http\Controllers\RecordController::class, 'store'])->name('store');
Route::post('/review/store', [App\Http\Controllers\ReviewController::class, 'store'])->name('store_review');
Route::post('/store', [App\Http\Controllers\ApplicationController::class, 'store'])->name('store_application');
Route::get('/admin',  'App\Http\Controllers\AdminController@index')->name('admin')->middleware('admin');
Route::get('/admin/{record_id}/delete',  'App\Http\Controllers\AdminController@delete_record')->name('delete_record')->middleware('admin');//удаление записи
Route::get('/admin/{appl_id}/delete_appl',  'App\Http\Controllers\AdminController@delete_appl')->name('delete_appl')->middleware('admin');//удаление заявки формы о/с
Route::patch('/admin/{record_id}/update', 'App\Http\Controllers\AdminController@update')->name('update_record')->middleware('admin'); // Редактирование записи
Route::patch('/admin/{appl_id}/update_appl', 'App\Http\Controllers\AdminController@update_appl')->name('update_appl')->middleware('admin'); // Редактирование заявки формы о/с
