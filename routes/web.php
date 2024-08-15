<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\DashboardController;
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

Route::get('/index', function () {
    return view('frontend.layouts.index');
});
Route::get('/', function () {
    return view('frontend.layouts.index');
});

Route::get('/userlogin', function () {
    return view('frontend.layouts.index');
});

Route::get('/adminlogin', function () {
    return view('auth.login')->name("adminlogin");
});

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//=========== All  Frontend Route's ===============

Route::get('/home',[FrontendController::class,'home'])->name("home");
Route::get('/product',[FrontendController::class,'product'])->name("product");
Route::get('/top-brand',[FrontendController::class,'topBrand'])->name("top-brand");
Route::get('/cart',[FrontendController::class,'cart'])->name("cart");
Route::get('/contact',[FrontendController::class,'contact'])->name("contact");
//Route::get('/login',[FrontendController::class,'login'])->name("login");

 //Route::get('/dashboard',[DashboardController::class, 'index'])->name("dashboard");
 Route::get('/blank',[DashboardController::class, 'blank'])->name("blank");
