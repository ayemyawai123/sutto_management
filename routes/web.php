<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Auth\LoginController as Login;
use App\Http\Controllers\Auth\RegisterController as Register;

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

Route::get('/noti_manage', [TestController::class, 'index']);
Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('/', [Login::class, 'showAdminLoginForm'])->name('admin.login');

    //post login information
    Route::post('login/admin', [Login::class, 'adminLogin'])->name('login.admin');
    Auth::routes();

    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
