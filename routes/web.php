<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\postController;
//dd(Route::middleware(['auth']));
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/setting/{id}', [userController::class, 'UserSetting'])->middleware(['user'])->name('setting');
Route::post('/setting/update/',[userController::class,'store'])->name('userUpdate');
Route::get('/profile/{id}',[userController::class,'userProfile'])->middleware(['user'])->name('user.profile');
Route::get('/add',[postController::class,'addPost'])->middleware(['auth'])->name('add.post');
Route::post('/add/store',[postController::class,'storePost'])->middleware(['auth'])->name('store.post');
require __DIR__.'/auth.php';
