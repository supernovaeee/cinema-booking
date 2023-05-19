<?php

use App\Http\Controllers\Customer;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserControllers;

//website
Route::get('index',[Customer\viewMovies::class, 'home'])->name('index');
Route::get('MyTicketTransactionList',[Customer\purchaseList::class, 'myTicket'])->name('MyTicketTransactionList');

Route::get('ChoosingSchedule/{id}',[Customer\purchaseMovies::class, 'schedule'])->name('ChoosingSchedule');
Route::get('ChoosingSeats/{id}',[Customer\purchaseMovies::class, 'seats'])->name('ChoosingSeats');
Route::post('chooseSeats',[Customer\purchaseMovies::class, 'chooseSeats'])->name('chooseSeats');

Route::post('ConfirmPayment',[Customer\purchaseFnb::class, 'payment'])->name('payment');

Route::get('reviewForum',[Customer\showReview::class, 'showReview'])->name('reviewForum');
Route::post('submitReview',[Customer\makeReview::class, 'makeReview'])->name('submitReview');


Route::get('FoodAndBeverage',[Customer\showFnb::class, 'food'])->name('products.index');

Route::post('FoodAndBeverage/cart/add', [Customer\purchaseFnb::class, 'addtoCart'])->name('cart.add');
Route::get('FoodAndBeverage/cart/remove/{rowId}', [Customer\purchaseFnb::class, 'removefromCart'])->name('cart.remove');

Route::post('PaymentSuccess',[Customer::class, 'paymentSuccess'])->name('PaymentSuccess');


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


//Manager
Route::get('createScreening',[\App\Http\Controllers\Manager\createScreening::class, 'createScreening'])->name('createScreening');
Route::get('showScreening',[\App\Http\Controllers\Manager\showScreening::class, 'showScreening'])->name('showScreening');
//create button
Route::post('storeScreening','\App\Http\Controllers\Manager\createScreening@storeScreening')->name('storeScreening');
Route::patch('storeScreening','\App\Http\Controllers\Manager\createScreening@storeScreening')->name('storeScreening');
//delete
Route::patch('deleteScreening/{id}','\App\Http\Controllers\Manager\deleteScreening@deleteScreening')->name('deleteScreening');
Route::put('deleteScreening/{id}','\App\Http\Controllers\Manager\deleteScreening@deleteScreening')->name('deleteScreening');
Route::post('deleteScreening/{id}','\App\Http\Controllers\Manager\deleteScreening@deleteScreening')->name('deleteScreening');
Route::get('deleteScreening/{id}','\App\Http\Controllers\Manager\deleteScreening@deleteScreening')->name('deleteScreening');



//ticket type
//create page
Route::get('createTicketType',[\App\Http\Controllers\Manager\createTicketType::class, 'createTicketType'])->name('createTicketType');
//create button
Route::post('storeTickets','\App\Http\Controllers\Manager\createTicketType@storeTickets')->name('storeTickets');
Route::patch('storeTickets','\App\Http\Controllers\Manager\createTicketType@storeTickets')->name('storeTickets');
//show home
Route::get('showTicketType',[\App\Http\Controllers\Manager\showTicketType::class, 'showTicketType'])->name('showTicketType');
//update button
Route::post('updateTicket/{id}','\App\Http\Controllers\Manager\updateTicketType@updateTicket')->name('update.ticket');
Route::patch('updateTicket/{id}','\App\Http\Controllers\Manager\updateTicketType@updateTicket')->name('update.ticket');
//update page
Route::get('updateTicketType/{id}',[\App\Http\Controllers\Manager\updateTicketType::class, 'updateTicketType'])->name('updateTicketType');
//delete button
Route::patch('deleteTickets/{id}','\App\Http\Controllers\Manager\deleteTicketType@deleteTickets')->name('deleteTickets');
Route::post('deleteTickets/{id}','\App\Http\Controllers\Manager\deleteTicketType@deleteTickets')->name('deleteTickets');
Route::put('deleteTickets/{id}','\App\Http\Controllers\Manager\deleteTicketType@deleteTickets')->name('deleteTickets');
Route::get('deleteTickets/{id}','\App\Http\Controllers\Manager\deleteTicketType@deleteTickets')->name('deleteTickets');



//movies
Route::get('createMovies',[\App\Http\Controllers\Manager\createMovie::class, 'createMovies'])->name('createMovies');
Route::get('showMovies',[\App\Http\Controllers\Manager\showMovie::class, 'showMovies'])->name('showMovies');
Route::get('updateMovies',[\App\Http\Controllers\Manager\updateMovie::class, 'updateMovies'])->name('updateMovies');
//update page
Route::patch('updateMovies/{id}','\App\Http\Controllers\Manager\updateMovie@editMovies')->name('editMovies');
Route::put('updateMovies/{id}','\App\Http\Controllers\Manager\updateMovie@editMovies')->name('editMovies');
Route::get('updateMovies/{id}','\App\Http\Controllers\Manager\updateMovie@editMovies')->name('editMovies');
Route::post('updateMovies/{id}','\App\Http\Controllers\Manager\updateMovie@editMovies')->name('editMovies');
//update button
Route::post('update/{id}','\App\Http\Controllers\Manager\updateMovie@update')->name('update.movies');
Route::patch('update/{id}','\App\Http\Controllers\Manager\updateMovie@update')->name('update.movies');
//create button
Route::post('storeMovies','\App\Http\Controllers\Manager\createMovie@store')->name('storeMovies');
Route::patch('storeMovies','\App\Http\Controllers\Manager\createMovie@store')->name('storeMovies');
//delete
Route::patch('deleteMovies/{id}','\App\Http\Controllers\Manager\deleteMovie@deleteMovies')->name('deleteMovies');
Route::put('deleteMovies/{id}','\App\Http\Controllers\Manager\deleteMovie@deleteMovies')->name('deleteMovies');
Route::get('deleteMovies/{id}','\App\Http\Controllers\Manager\deleteMovie@deleteMovies')->name('deleteMovies');
Route::post('deleteMovies/{id}','\App\Http\Controllers\Manager\deleteMovie@deleteMovies')->name('deleteMovies');



//fnb
Route::get('showFnB',[\App\Http\Controllers\Manager\showFnb::class, 'showFnB'])->name('showFnB');
Route::get('createFb',[\App\Http\Controllers\Manager\createFnb::class, 'createFb'])->name('createFb');

Route::post('updateFood/{id}','\App\Http\Controllers\Manager\updateFnb@updateFood')->name('update.food');
Route::patch('updateFood/{id}','\App\Http\Controllers\Manager\updateFnb@updateFood')->name('update.food');

Route::get('updateFnB/{id}',[\App\Http\Controllers\Manager\updateFnb::class, 'updateFnB'])->name('updateFnB');

Route::patch('deleteFood/{id}','\App\Http\Controllers\Manager\deleteFnb@deleteFood')->name('deleteFood');
Route::put('deleteFood/{id}','\App\Http\Controllers\Manager\deleteFnb@deleteFood')->name('deleteFood');
Route::get('deleteFood/{id}','\App\Http\Controllers\Manager\deleteFnb@deleteFood')->name('deleteFood');
Route::post('deleteFood/{id}','\App\Http\Controllers\Manager\deleteFnb@deleteFood')->name('deleteFood');

//create button
Route::post('storeFood','\App\Http\Controllers\Manager\createFnb@storeFood')->name('storeFood');
Route::patch('storeFood','\App\Http\Controllers\Manager\createFnb@storeFood')->name('storeFood');

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
Route::get('downloadReport/hour', [App\Http\Controllers\Owner\downloadReportHour::class, 'downloadReportHour'])->name('downloadReportHour');
Route::get('downloadReport/daily', [App\Http\Controllers\Owner\downloadReportDaily::class, 'downloadReportDaily'])->name('downloadReportDaily');
Route::get('downloadReport/weekly', [App\Http\Controllers\Owner\downloadReportWeek::class, 'downloadReportWeek'])->name('downloadReportWeek');
Route::get('downloadReport/monthly', [App\Http\Controllers\Owner\downloadReportMonth::class, 'downloadReportMonth'])->name('downloadReportMonth');

// Route::get('/downloadReportHour', 'downloadReportHour@downloadReportHour')->name('downloadReportHour');


































































