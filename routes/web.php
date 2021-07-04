<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Items;
use App\Http\Livewire\Staffs;
use App\Http\Livewire\Reports;
use App\Http\Livewire\Logs;

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

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');})->name('dashboard');
    

    Route::get('/items', function(){
        return view('main_item');
    })->name('main_items');
    
    Route::get('/items/add', Items::class
    )->name('add_item');

    Route::get('/staff', Staffs::class
    )->name('staff');

    Route::get('/reports', Reports::class
    )->name('report');

    Route::get('/activity', Logs::class
    )->name('activity');

});
