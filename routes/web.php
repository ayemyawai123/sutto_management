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


Route::middleware('web')->domain(env('APP_URL'))->group(function () {

Route::get('/login', [Login::class, 'showAdminLoginForm'])->name('admin.login');

    //post login information
Route::post('login/admin', [Login::class, 'adminLogin'])->name('login.admin');

Route::group(['middleware' => 'auth:admin'], function () {
   //
   Route::get('/noti_manage', [TestController::class, 'index']);

   Route::get('/del_notice_id/{id}', [TestController::class, 'delete']);
});

});
Auth::routes();

Route::get('logout', function () {
    Session()->flush();
    auth()->logout();
    return Redirect::to('/login');
})->name('logout');

Route::get('/', function () {

    return redirect('/login');

});
/*Route::view('/', 'welcome');*/
//
Route::middleware('web')->domain(env('APP_LINK'))->group(function () {

Route::get('/home', [HomeController::class, 'index'])->name('home');
});
