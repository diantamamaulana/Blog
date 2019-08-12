<?php

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
    return view('home');
});

Route::get('portofolio', function (){
    return View::make('portofolio');
});
Route::get('artikel', function (){
    $artikels = DB::table('artikels')->get();
    return view('artikel', ['artikels' => $artikels]);
});
Route::get('home', function(){
    return View('home');
});
Route::get('profile', function(){
    return View('profile');
});
Route::get('artikelpost', function(){
    return View('artikelpost');
});
Route::get('dahboard', function(){
    return View('dashboard');
});

Route::get('/artikel', function () {
    $artikels = DB::table('artikels')->get();
    $categories = DB::table('categories')->get();
    return view('artikel', ['artikels' => $artikels], ['categories' => $categories]);
});

Route::get('/artikel/filter/{id}', function($id){
    $artikelFilter = DB::table('artikels')->where('kategori', $id)->get();
    return view('artikelFilter', ['artikelFilter' => $artikelFilter]);
});

Route::get('/galery', 'GalleryController@index1');

Route::resource('artikel/comment','CommentController');

Route::resource('artikels','ArtikelController');

Route::resource('galleries', 'GalleryController');

Route::resource('categories','CategorieController');

Route::resource('memberships', 'MembershipController');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
