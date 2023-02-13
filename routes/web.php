<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CenterinfoController;
use App\Http\Controllers\ElectronicpaymentsystemController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CollectionserviceController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/Electronicpayments', [ElectronicpaymentsystemController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/Collectionservice', [CollectionserviceController::class,'index']);

Route::get('about', function () {
    return view('about');
});
Route::get('/centerinfo', [CenterinfoController::class, 'index']);

Route::get('blog', function () {
    return view('blog');
});
