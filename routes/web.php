<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CenterinfoController;
use App\Http\Controllers\ElectronicpaymentsystemController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CollectionserviceController;
use App\Http\Controllers\BusinessappController;
use App\Http\Controllers\HumantransfersController;
use App\Http\Controllers\PaymentwalletController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\LangController;
use Illuminate\Support\Facades\Session;

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

Route::get('/h',                                              [HomeController::class, 'index']);
Route::get('/Electronicpaymentsystem',                       [ElectronicpaymentsystemController::class, 'index']);
Route::get('/about',                                         [AboutController::class, 'index']);
Route::get('/Collectionservice',                             [CollectionserviceController::class,'index']);
Route::get('/Collectionservice',                             [CollectionserviceController::class,'index']);
Route::get('/Humantransfers',                                [HumantransfersController::class,'index']);

Route::get('/Paymentwallet',                                 [PaymentwalletController::class,'index']);

  
Route::get('/', [LocalizationController::class, 'index']);
Route::get('home', [LocalizationController::class, 'lang_change'])->name('LangChange');