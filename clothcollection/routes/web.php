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
//---------For Registration--------------
Route::get('/register', function () {
    if(session('v_email')){
    	return redirect('vendor-dashboard');
    }else{
    	return view('registration');
    }
});
Route::post('/save_register', 'LoginControllers@postRegistration');

//----------For Login----------------
Route::get('/vendor-login', 'LoginControllers@vendorLogin');
Route::post('/save-vendor-login', 'LoginControllers@postVendorLogin');
//----------Vendor After Logged in----
Route::get('/vendor-dashboard', function(){
	if(session('v_email'))
	{
		return view('vendor/dashboard');
	}else{
		return redirect('vendor-login');
	}
	
});
//----------For Logout----------------
Route::get('/logout', 'LoginControllers@logout');