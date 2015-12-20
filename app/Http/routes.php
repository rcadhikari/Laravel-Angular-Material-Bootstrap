<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
// To pass the view on multiple locations
View::composer('stats', function($view) {
    $view->with('stats', app('App\Stats'));
});
*/

Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/privacy-policy', 'HomeController@privacy');
Route::get('/test', 'HomeController@test');


/*Route::get('/', function () {
    return view('welcome');
    //return 'Laravel 5';
});*/

