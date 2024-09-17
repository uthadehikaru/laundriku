<?php

use App\Livewire\Dashboard;
use App\Livewire\LoginForm;
use App\Livewire\OrderForm;
use App\Livewire\OrderList;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::view('/', 'welcome');
Route::get('/login', LoginForm::class)->name('login');
Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/order', OrderList::class)->name('order');
Route::get('/logout', function(){
    Auth::logout();
    return redirect()->route('login');
})->name('logout');

Route::middleware('auth')->group(function() {
    Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);
});
