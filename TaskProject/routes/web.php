<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\UserController;
use Illuminate\Support\Facades\Auth;




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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});


Route::get('/user', function () {
   return view('user');
});






Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');

Route::resource('employees', EmployeeController::class);
Route::get('/em', [App\Http\Controllers\CompanyController::class, 'index'])->name('employee.index');
Route::post('/create', [App\Http\Controllers\CompanyController::class, 'index'])->name('employee.create');
Route::get('/edit', [App\Http\Controllers\CompanyController::class, 'index'])->name('employee.edit');
Route::get('/show', [App\Http\Controllers\CompanyController::class, 'index'])->name('employee.show');

Route::resource('companies', CompanyController::class);
Route::get('/com', [App\Http\Controllers\CompanyController::class, 'index'])->name('companies.index');
Route::post('/create', [App\Http\Controllers\CompanyController::class, 'index'])->name('companies.create');
Route::get('/edit', [App\Http\Controllers\CompanyController::class, 'index'])->name('companies.edit');
Route::get('/show', [App\Http\Controllers\CompanyController::class, 'index'])->name('companies.show');







