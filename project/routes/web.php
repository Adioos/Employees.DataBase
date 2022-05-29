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

Route::get('/', 'App\Http\Controllers\MainController@index')->name('main.index');


Route::get('/employees', 'App\Http\Controllers\Employee\IndexController')->name('employee.index');
Route::get('/employees/create', 'App\Http\Controllers\Employee\CreateController')->name('employee.create');
Route::post('/employees', 'App\Http\Controllers\Employee\StoreController')->name('employee.store');
Route::get('/employees/{employee}', 'App\Http\Controllers\Employee\ShowController')->name('employee.show');
Route::get('/employees/{employee}/edit', 'App\Http\Controllers\Employee\EditController')->name('employee.edit');
Route::patch('/employees/{employee}', 'App\Http\Controllers\Employee\UpdateController')->name('employee.update');
Route::delete('/employees/{employee}', 'App\Http\Controllers\Employee\DestroyController')->name('employee.delete');
