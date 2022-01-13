<?php

use App\Http\Controllers\SeconController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| for-test Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/myname', function () {
    return 'my name is mahmoud awwad';
})->name("mah");     //->name('mah'); ==> for decrease the url from mahmoud-awaad to mah only in html

Route::get('/mahmoud/{a}', function ($a) {
    return 'I am '.$a. 'yers old';
})->name('b') ;

// Route::namespace('Test')->group(function(){
//     Route::get('testnamespace','testcontrller@aa');
// });
Route::namespace('namesapacetest')->group(function(){
    Route::get('testnamespase2','test2controller@printage');
});
Route::namespace('Test')->group(function(){
    Route::get('testnamespace','test2controller@printage');
});

Route::get('testnamespace2','testcontroller@aa');

Route::get('mahtest','Firstcontroller@admin');
Route::resource('news', 'SeconController');

