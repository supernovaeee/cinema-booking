<?php

use App\Http\Controllers\Owner;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserControllers;

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

//create button @create page
Route::post('users.store', [UserControllers::class, 'store'])->name('users.store');
//admin-dashboard
Route::get('admin-dashboard',[UserControllers::class, 'read']);
//create page
Route::get('admin-create',[UserControllers::class, 'createPage']);

//update page
Route::patch('admin-update/{id}','App\Http\Controllers\UserControllers@edit')->name('users.edit');
Route::put('admin-update/{id}','App\Http\Controllers\UserControllers@edit')->name('users.edit');
Route::get('admin-update/{id}','App\Http\Controllers\UserControllers@edit')->name('users.edit');
Route::post('admin-update/{id}','App\Http\Controllers\UserControllers@edit')->name('users.edit');

//show admin deleted page
Route::get('admin-deleted',[UserControllers::class, 'deleted']);

//update button @update page
Route::patch('users.update/{id}', 'App\Http\Controllers\UserControllers@update')->name('users.update');
Route::get('users.update/{id}', 'App\Http\Controllers\UserControllers@update')->name('users.update');
Route::post('users.update/{id}', 'App\Http\Controllers\UserControllers@update')->name('users.update');
Route::put('users.update/{id}', 'App\Http\Controllers\UserControllers@update')->name('users.update');

//to delete user in admin-dashboard
Route::patch('admin-delete/{id}','App\Http\Controllers\UserControllers@destroy')->name('users.destroy');
Route::put('admin-delete/{id}','App\Http\Controllers\UserControllers@destroy')->name('users.destroy');
Route::get('admin-delete/{id}','App\Http\Controllers\UserControllers@destroy')->name('users.destroy');
Route::post('admin-delete/{id}','App\Http\Controllers\UserControllers@destroy')->name('users.destroy');

//to restore @admin-deleted
Route::get('admin-restore/{id}','App\Http\Controllers\UserControllers@restore')->name('users.restore');

Route::get('fnbDaily',[Owner::class, 'fnbDaily']);
Route::get('fnbMonth',[Owner::class, 'fnbMonth']);
Route::get('fnbWeek',[Owner::class, 'fnbWeek']);
Route::get('fnbHour',[Owner::class, 'fnbHour']);

Route::get('ticketDaily',[Owner::class, 'ticketDaily']);
Route::get('ticketMonth',[Owner::class, 'ticketMonth']);
Route::get('ticketWeek',[Owner::class, 'ticketWeek']);
Route::get('ticketHour',[Owner::class, 'ticketHour']);

Route::get('trends',[Owner::class, 'trends']);

