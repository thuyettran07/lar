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
    return view('welcome');
});

//trang index
Route::get('index','UserController@create_index');
Route::get('enternal-beauty',function(){
	return view('index');
});
//trang san pham
Route::get('sanpham',function(){
	return view('sanpham.index');
});

//trang chủ admin
Route::group(['prefix' => 'admin', 'middleware' => 'checkLogin'], function () {
	Route::get('/','AdminController@index');
	Route::group(['prefix'=>'member'],function(){
		Route::get('/', 'MemberController@index');
		Route::post('add','MemberController@add_member');
		Route::get('/{id}', ['as'=>'getmember','uses'=>'MemberController@get_id']);
		Route::post('edit/{id}','MemberController@edit_member');
		Route::get('delete/{id}', 'MemberController@delete_member');
	});
});

//login
Route::group(['prefix'=>'users'],function(){
	//Sign in
	Route::get('sign_in','UserController@get_signin');
	Route::post('sign_in','UserController@post_signin');

	//log in
	Route::get('login','UserController@getLogin'); 
	Route::post('login', 'UserController@postLogin');
	
	//log out
	Route::get('logout',function()
	{
		if(Auth::check())
		{
			Auth::logout();
		}
		
	 	return redirect('users/login');
	});
});


// route::get('demo', function () {
// 	$members = App\Admin_member::all();

// 	return view('admin.member', ['members' => $members]);

// });

route::get('demo',function(){
	return view('demo');
}); 

