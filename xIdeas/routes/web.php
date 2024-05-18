<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\XideaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TermsController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/terms', [TermsController::class, 'index']);


Route::post('/xideas', [XideaController::class, 'store'])->name('xideas.create');

Route::delete('/xideas/{xidea}', [XideaController::class, 'destroy'])->name('xideas.destroy');



//Route::get('/', [ProfileController::class, 'index']);
