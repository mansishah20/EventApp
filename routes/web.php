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
use App\Http\Controllers\test;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/index',[UserController::Class,"index"]);
//Route::get('/login',[UserController::Class,"login"]);

Route::get('/registration',[UserController::Class,"registration"]);
Route::get('/booking1',[UserController::Class,"booking1"]);
Route::get('/booking2',[UserController::Class,"booking2"]);
Route::get('/booking3',[UserController::Class,"booking3"]);
Route::get('/mybooking',[UserController::Class,"mybooking"]);




Route::get('/admin/login',[AdminController::Class,"login"]);
Route::get('/admin/signup',[AdminController::Class,"signup"]);
Route::post('/admin/check',[AdminController::class, 'check'])->name('check');
Route::get('/admin/logout',[AdminController::class, 'logout'])->name('logout');
Route::get('/admin/userindex',[AdminController::Class,"userindex"]);
Route::get('/admin/usercreate',[AdminController::Class,"usercreate"]);
Route::post('/admin/userstore',[AdminController::Class,"userstore"]);
Route::get('/admin/{id}/useredit',[AdminController::Class,"useredit"]);
Route::post('/admin/{id}/userupdate',[AdminController::Class,"userupdate"]);
Route::get('/admin/{id}/userdestroy',[AdminController::Class,"userdestroy"]);

Route::get('/admin/bookingindex',[AdminController::Class,"bookingindex"]);

Route::get('/admin/categoryindex',[AdminController::Class,"categoryindex"]);
Route::post('/admin/categorystore',[AdminController::Class,"categorystore"]);
Route::get('/admin/{id}/categoryedit',[AdminController::Class,"categoryedit"]);
Route::post('/admin/{id}/categoryupdate',[AdminController::Class,"categoryupdate"]);
Route::get('/admin/{id}/categorydestroy',[AdminController::Class,"categorydestroy"]);

Route::get('/admin/packageindex',[AdminController::Class,"packageindex"]);
Route::get('/admin/addpackage',[AdminController::Class,"addpackage"]);
Route::post('/admin/packagestore',[AdminController::Class,"packagestore"]);
Route::get('/admin/{id}/packageedit',[AdminController::Class,"packageedit"]);
Route::post('/admin/{id}/packageupdate',[AdminController::Class,"packageupdate"]);
Route::get('/admin/{id}/packagedestroy',[AdminController::Class,"packagedestroy"]);


Route::get('/admin/placeindex',[AdminController::Class,"placeindex"]);
Route::post('/admin/placestore',[AdminController::Class,"placestore"]);
Route::get('/admin/{id}/placeedit',[AdminController::Class,"placeedit"]);
Route::post('/admin/{id}/placeupdate',[AdminController::Class,"placeupdate"]);
Route::get('/admin/{id}/placedestroy',[AdminController::Class,"placedestroy"]);

