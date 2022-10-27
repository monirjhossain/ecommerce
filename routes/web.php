<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('user/logout',[HomeController::class, 'logout'])->name('user.logout');

//Admin Route
Route::get('/admin/home',[App\Http\Controllers\AdminController::class, 'index']);
Route::get('admin', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin', [AdminLoginController::class, 'login']);
