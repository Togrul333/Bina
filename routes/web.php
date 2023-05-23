<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use \App\Http\Controllers\HouseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//clients
Route::get('/home', [HomeController::class, 'index'])->name('home');


//employees
Route::middleware('employee')->group(function () {
    Route::get('/dashboard-employee', [EmployeeController::class, 'dashboard'])->name('dashboard');
    Route::get('/add-house', [HouseController::class, 'addHouse'])->name('add.house');
    Route::post('/add-house', [HouseController::class, 'saveHouse'])->name('save.house');

});
