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

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'PagesController@index');
    Route::get('/loans', 'PagesController@loans');
    Route::get('/store', 'PagesController@store');
    Route::get('/store/item/{id}', 'PagesController@store_item');
    Route::get('/payments', 'PagesController@payments');
    Route::get('/cards', 'PagesController@cards');
    Route::get('/travel', 'PagesController@travel');
    Route::get('/insurance', 'PagesController@insurance');
    Route::get('/deposit', 'PagesController@deposit');
    Route::get('/blog', 'PagesController@blog');
    Route::get('/blog1', 'PagesController@blog1');
    Route::get('/blog2', 'PagesController@blog2');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'adminController@index');
    Route::get('/dashboard', 'adminController@dashboard');
    Route::get('/categories', 'categoryController@index');
    Route::get('/category/add', 'categoryController@add');
    Route::post('/category/postadd', 'categoryController@postadd');
    Route::get('/category/edit/{id}', 'categoryController@edit');
    Route::post('/category/postedit/{id}', 'categoryController@postedit');
    Route::get('/category/delete/{id}', 'categoryController@delete');
    
   
    Route::get('/news', 'newsController@index');
    Route::get('/news/add', 'newsController@add');
    Route::post('/news/postadd', 'newsController@postadd');
    Route::get('/news/edit/{id}', 'newsController@edit');
    Route::post('/news/postedit/{id}', 'newsController@postedit');
    Route::get('/news/delete/{id}', 'newsController@delete');
    Route::get('/news/featured', 'newsController@featured');
    
});

// Logging in and out
//get('/auth/login', 'Auth\AuthController@getLogin');
//post('/auth/login', 'Auth\AuthController@postLogin');
//get('/auth/logout', 'Auth\AuthController@getLogout');
Auth::routes();
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
/*$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');*/
