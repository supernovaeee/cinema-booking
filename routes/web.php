<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Owner;
use App\Http\Controllers\UserControllers;
// use App\Http\Controllers\;
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

// Route::get('/', function () {
//     return view('welcome');
// });


//cinema-owner
Route::get('showFnbMonth',[App\Http\Controllers\Owner\showFnbMonth::class, 'showFnbMonth'])->name('showFnbMonth');
Route::get('showFnbWeek',[App\Http\Controllers\Owner\showFnbWeek::class, 'showFnbWeek'])->name('showFnbWeek');
Route::get('showFnbDaily',[App\Http\Controllers\Owner\showFnbDaily::class, 'showFnbDaily'])->name('showFnbDaily');
Route::get('showFnbHour',[App\Http\Controllers\Owner\showFnbHour::class, 'showFnbHour'])->name('showFnbHour');

Route::get('showTicketMonth',[App\Http\Controllers\Owner\showTicketMonth::class, 'showTicketMonth'])->name('showTicketMonth');
Route::get('showTicketWeek',[App\Http\Controllers\Owner\showTicketWeek::class, 'showTicketWeek'])->name('showTicketWeek');
Route::get('showTicketDaily',[App\Http\Controllers\Owner\showTicketDaily::class, 'showTicketDaily'])->name('showTicketDaily');
Route::get('showTicketHour',[App\Http\Controllers\Owner\showTicketHour::class, 'showTicketHour'])->name('showTicketHour');

Route::get('downloadReport',[App\Http\Controllers\Owner\downloadReport::class, 'downloadReport'])->name('downloadReport');
// Route::get('/downloadReportHour', 'downloadReportHour@downloadReportHour')->name('downloadReportHour');


//website
Route::get('index',[App\Http\Controllers\Customer\viewMovies::class, 'home'])->name('index');
Route::get('MyTicketTransactionList',[App\Http\Controllers\Customer\purchaseList::class, 'myTicket'])->name('MyTicketTransactionList');

Route::get('ChoosingSchedule/{id}',[App\Http\Controllers\Customer\purchaseMovies::class, 'schedule'])->name('ChoosingSchedule');
Route::get('ChoosingSeats/{id}',[App\Http\Controllers\Customer\purchaseMovies::class, 'seats'])->name('ChoosingSeats');
Route::post('chooseSeats',[App\Http\Controllers\Customer\purchaseMovies::class, 'chooseSeats'])->name('chooseSeats');

Route::post('ConfirmPayment',[App\Http\Controllers\Customer\purchaseFnb::class, 'payment'])->name('payment');

Route::get('reviewForum',[App\Http\Controllers\Customer\showReview::class, 'showReview'])->name('showReview');
Route::post('reviewForum',[App\Http\Controllers\Customer\makeReview::class, 'makeReview'])->name('submitReview');

Route::get('FoodAndBeverage',[App\Http\Controllers\Customer\showFnb::class, 'food'])->name('products.index');

Route::post('FoodAndBeverage/cart/add', [App\Http\Controllers\Customer\purchaseFnb::class, 'addtoCart'])->name('cart.add');
Route::get('FoodAndBeverage/cart/remove/{rowId}', [App\Http\Controllers\Customer\purchaseFnb::class, 'removefromCart'])->name('cart.remove');

Route::post('PaymentSuccess',[App\Http\Controllers\Customer::class, 'paymentSuccess'])->name('PaymentSuccess');


Route::post('dologin',[\App\Http\Controllers\loginController::class, 'dologin'])->name('dologin');
Route::get('Login',[\App\Http\Controllers\loginController::class, 'login'])->name('login');
Route::get('logout',[\App\Http\Controllers\logoutController::class, 'logout'])->name('logout');
Route::post('SignUpTixID',[\App\Http\Controllers\registerController::class, 'registerAll'])->name('registerAll');
Route::get('SignUpTixID',[\App\Http\Controllers\registerController::class, 'signup'])->name('signup');
Route::post('logout',[\App\Http\Controllers\logoutController::class, 'logout'])->name('logout');




//system-admin
//create button @create page
Route::post('users.store', [\App\Http\Controllers\Admin\createUserController::class, 'store'])->name('users.store');
Route::get('admin-create',[\App\Http\Controllers\Admin\createUserController::class, 'createPage']);
//admin-dashboard
Route::get('admin-dashboard',[\App\Http\Controllers\Admin\showUserController::class, 'read'])->name('admin-dashboard');


//update page
Route::patch('admin-update/{id}','App\Http\Controllers\Admin\updateUserController@edit')->name('users.edit');
Route::put('admin-update/{id}','App\Http\Controllers\Admin\updateUserController@edit')->name('users.edit');
Route::get('admin-update/{id}','App\Http\Controllers\Admin\updateUserController@edit')->name('users.edit');
Route::post('admin-update/{id}','App\Http\Controllers\Admin\updateUserController@edit')->name('users.edit');

//update button @update page
Route::patch('users.update/{id}', 'App\Http\Controllers\Admin\updateUserController@update')->name('users.update');
Route::get('users.update/{id}', 'App\Http\Controllers\Admin\updateUserController@update')->name('users.update');
Route::post('users.update/{id}', 'App\Http\Controllers\Admin\updateUserController@update')->name('users.update');
Route::put('users.update/{id}', 'App\Http\Controllers\Admin\updateUserController@update')->name('users.update');

//show admin deleted page
Route::get('admin-deleted',[\App\Http\Controllers\Admin\delPageUserController::class, 'deleted']);

//to delete user in admin-dashboard
Route::patch('admin-delete/{id}','App\Http\Controllers\Admin\deleteUserController@destroy')->name('users.destroy');
Route::put('admin-delete/{id}','App\Http\Controllers\Admin\deleteUserController@destroy')->name('users.destroy');
Route::get('admin-delete/{id}','App\Http\Controllers\Admin\deleteUserController@destroy')->name('users.destroy');
Route::post('admin-delete/{id}','App\Http\Controllers\Admin\deleteUserController@destroy')->name('users.destroy');

//to restore @admin-deleted
Route::get('admin-restore/{id}','App\Http\Controllers\Admin\restoreUserController@restore')->name('users.restore');

