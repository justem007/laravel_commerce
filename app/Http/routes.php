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
//Route::get('users', function()
//{
//    return 'Users novos!';
//});
//
//Route::get('my/page', function()
//{
//    return 'Hello Word!';
//});
//
//Route::get('first', function()
//{
//    return 'First route.';
//});
//
//Route::get('second', function()
//{
//    return 'Second route.';
//});
//
//Route::get('first', function()
//{
//    return Redirect::to('second');
//});
//Route::get('second', function()
//{
//    return 'Second route';
//});
//
//Route::get('third/page', function()
//{
//    return 'Potato';
//});




//home page
//Route::get('/', function(){});

//routes for the books section
//Route::get('/books', function() {
//    return 'Books index';
//});
//Route::get('/books/fictions', function() {});
//Route::get('/books/science', function() {});
//Route::get('/books/romance', function() {});
//
////routes for the magazines section
//Route::get('/magazines', function() {});
//Route::get('/magazines/celebrity', function() {});
//Route::get('/magazines/technology', function() {});

//resoources/viwes
//Route::get('/', function()
//{
//    return View::make('sample');
//});
//Route::get('/sample');

//Route::get('/', 'WelcomeController@index');
//
//Route::get('home', 'HomeController@index');
//
//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);
//Route::get('/{squirrel}', function($squirrel){
//   $data['squirrel'] = $squirrel;
//   return View::make('sample', $data);
//});

//Route::get('books', function(){
//    if (Auth::guest()) return Redirect::to('login');
//    //show books to only loggedin users.
//});

//Route::get('custom/response', function(){
//    $response = Response::make('Hello word !', 200);
//    $response->headers->set('our key', 'our value');
//    return $response; 
//});
//
//Route::get('our/response', function(){
//    $response = Response::make('Bon, james Bold', 200);
//    $response->setTtl(60);
//    return $response; 
//});
//
//Route::get('markdow/response', function(){
//   $data = array('iron', 'man', 'rock');
//   return Response::json($data);
//});


Route::filter('birthday', function(){
    if (true) {
        return View::make('birthday');
    } 
});

Route::get('/', array(
    'before' => 'birthday',
    function()
{
    return View::make('hello');
}));
