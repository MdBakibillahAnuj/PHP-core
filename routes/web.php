<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontViewController;
use App\Http\Controllers\AdminController;

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
//
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [FrontViewController::class, 'index'])->name('home');
Route::get('/redirects', [FrontViewController::class, 'redirects']);

Route::get('/users', [AdminController::class, 'user'])->name('users');
Route::get('/delete_user/{id}', [AdminController::class, 'delete'])->name('delete_user');


// Food Routes---------------------------->>>>>>>>>>>>>>>>>>
Route::get('/food_menu', [AdminController::class, 'foodMenu'])->name('/food_menu');
Route::post('/upload_food', [AdminController::class, 'foodUpload'])->name('/upload_food');

Route::get('/update_food/{id}', [AdminController::class, 'updateFood'])->name('/update_food');
Route::post('/edit_food/{id}', [AdminController::class, 'editFood'])->name('/edit_food');

Route::get('/food', [AdminController::class, 'allFood'])->name('/food');
Route::get('/delete_food/{id}', [AdminController::class, 'deleteFood'])->name('/delete_food');
//End Food Routes---------------------------->>>>>>>>>>>>>>>>>>>>>>


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
