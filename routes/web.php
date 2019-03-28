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

$admin = '/my-admin/';

Route::get('/', 'site\HomeController@index');
Route::get('/category/{id}', 'site\HomeController@category');
Route::get('/detail/{id}', 'site\NewsController@newsDetail');

Route::get('/post', function () { return view('site/post'); });

//Route::get($admin.'login', 'admin\AdminLoginController@login');
//Route::post($admin.'login', 'admin\AdminLoginController@loginCheck')->name('login');

Route::get('/news', 'site\NewsController@newsList');

 // Auth route
Route::get('my-admin/login/', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('my-admin/login/', 'Auth\LoginController@login');



// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');


Route::get('/admin/login', 'HomeController@index')->name('home');



Route::group(['prefix' => 'my-admin', 'middleware'   => ['auth','userrole']], function (){
	
	Route::get('register/', 'Auth\RegisterController@showRegistrationForm')->name('register');
	Route::get('user/list', 'admin\AdminLoginController@adminUserList')->name('user.list');
	Route::get('user/{id}/edit', 'admin\AdminLoginController@editUser')->name('user.edit');
	Route::any('updateuser/{id}', 'admin\AdminLoginController@updateuser')->name('user.update');
	Route::get('user/delete/{id}', ['as' => '/my-admin/user.delete', 'uses' => 'admin\AdminLoginController@deleteUser']);
		
	Route::post('register/', 'Auth\RegisterController@register');
	Route::get('news/deletedpost', 'admin\AdminNewsController@delpost')->name('news.deleted');
	Route::get('news/deletedpost/restore/{id}', 'admin\AdminNewsController@restorepost');
	Route::get('news/deletedpost/permanentdelete/{id}', 'admin\AdminNewsController@perdelete');
	Route::resource('userdetail', 'admin\AdminUserDetailController');

	Route::resource('category', 'admin\AdminCategoryController');
	Route::get('category/delete/{id}', ['as' => '/my-admin/category.delete', 'uses' => 'admin\AdminCategoryController@destroy']);

	});

Route::group(['prefix' => 'my-admin', 'middleware'   => 'auth'], function (){

	Route::get('notification','admin\AdminProfileController@notification');
	Route::get('markAsRead',function(){
		auth()->user()->unreadNotifications->markAsRead();
	});

	Route::post('logout', 'Auth\LoginController@logout')->name('logout');

	Route::get('profile','admin\AdminProfileController@index')->name('user.profile');
	Route::post('profile','admin\AdminProfileController@update')->name('user.profile.update');

	Route::get('dashboard', 'admin\AdminDashboardController@dashboard')->name('dashboard');
	
	Route::resource('news', 'admin\AdminNewsController');
	Route::get('news/delete/{id}', ['as' => '/my-admin/news.delete', 'uses' => 'admin\AdminNewsController@destroy']);
	
	

});


