<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;

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
    return view('Welcome');
});

Route::get('profile/{name?}', [ProfileController::class, 'showProfile']);

Route::get('home', [HomeController::class, 'showWelcome']);
Route::get('about', [AboutController::class, 'showAbout']);

//Route::get('about',function () {
 //   return 'About Content';
//});

Route::get('about/{theSubject}',[AboutController::class, 'showSubject']);

Route::get('about/directions',array('as' => 'directions', function(){
    $theURL = URL::route('directions');
    return 'Directions go here';
}));
Route::any('submit-form',function(){
    return 'Process Form';
});
//Route::get('about/{theSubject}',function ($theSubject){
  //  return $theSubject.' content goes here';
//});
Route::get('about/classes/{theArt}/{thePrice}',function($theArt, $thePrice){
    return "The Product: $theArt and $thePrice";
});
Route::get('where',function () {
    return Redirect::route('directions');
});
