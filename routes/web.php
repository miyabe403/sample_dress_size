<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SizeController;

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

// ホームページのルート
Route::get('/', function () {
    return response()->file(public_path('index.html'));
});

// サイズ診断ページのルート
Route::get('/dress-diagnosis', function () {
    return response()->file(public_path('dress_sizes.html')); // dress-diagnosis.html を作成する必要があります
});

// サイズ視覚化ページのルート
Route::get('/size-visualization', function () {
    return response()->file(public_path('index2.php')); // size-visualization.html を作成する必要があります
});

// サイズ診断APIのルート
Route::get('/size-diagnosis', [SizeController::class, 'diagnose']);