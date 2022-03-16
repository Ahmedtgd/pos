<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Resources\UserResource;
use App\Models\User;

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

//Route::group(['prefix' => LaravelLocalization::setLocale()],
Route::group(['prefix' => LaravelLocalization::setLocale(),
                          'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath',  ]],
function(){
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::resource('users', Dashboard\UserController::class);
/////////////////////////Users//////////////////////////

/*
Route::resource('users' , 'Dashboard\UserController')->middleware(['auth']);
Route::get('/users','Dashboard\UserController@index')->middleware(['auth']);
Route::get('userDelete/{id}',function ($id){
$users=User::find($id);
$users->delete();
return redirect("users");
})->middleware(['auth']);
Route::post('userAdd',"Dashboard\UserController@addUser")->middleware(['auth']);
Route::get('userAdd',"Dashboard\UserController@addUser")->middleware(['auth']);

Route::get('userEdit/{id}',"Dashboard\UserController@EditUser")->middleware(['auth']);
Route::post('userEdit/{id}',"Dashboard\UserController@EditUser")->middleware(['auth']);
*/
/////////////////////////////////////search//////////////////
Route::get('/search', 'Dashboard\UserController@searchusers');
////////////////////////////////////////////////////////////





});
