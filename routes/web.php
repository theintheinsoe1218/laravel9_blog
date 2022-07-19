<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\RoleController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(BlogController::class)->group(function(){
    Route::get('/','index')->name('blogs.index');
    Route::get('/blogs/create',
    'create')->name('blogs.create');
    Route::post('/blogs/store', 'store')->name(
    'blogs.store');
    Route::get('/blogs/{id}', 'show')->name(
    'blogs.show');
    Route::get('/blogs/edit/{id}', 'edit')->name(
    'blogs.edit');
    Route::post('/blogs/edit/{id}', 'update')->name(
    'blogs.update');
    Route::get('/blogs/delete/{id}', 'destroy')->name('blogs.destroy');
    Route::post('blogs/comment/{id}','addComment')->name('blogs.addComment');
});

Route::get('/users',[PhoneController::class,'store']);
Route::get('/users/show', [PhoneController::class, 'show']);

Route::get('/add-roles',[RoleController::class, 'addRoles']);
Route::get('/add-user', [RoleController::class, 'addUser']);
Route::get('/get-roles', [RoleController::class, 'getRoles']);
Route::get('/get-users', [RoleController::class, 'getUsers']);
