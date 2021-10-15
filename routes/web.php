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

use App\Http\Controllers\CompanySetting;
use \App\Http\Controllers\StoresController;

Auth::routes();

Route::get('/', function () {
    return view('pages.home', ['title'=>'Home']);
})->middleware('auth')->name('home');


Route::get('/home', function () {
  return view('pages.home', ['title'=>'Home']);
})->middleware('auth')->name('home2');



Route::prefix('company/setting')->middleware('auth')->name('company.')->group(function (){
  Route::get(
    '/', [CompanySetting::class, 'index']
  )->name('setting');
  Route::post(
    '/saveInfo',
    [CompanySetting::class, 'saveInfo']
  )->name('saveInfo');
});

Route::prefix('/stores')->middleware('auth')->name('stores.')->group(function (){
  Route::any(
    '/add',
    [StoresController::class, 'add']
  )->name('add');
  Route::any(
    '/edit/{id?}',
    [StoresController::class, 'edit'])
    ->where('id', '[0-9]+')
    ->name('edit');
});

