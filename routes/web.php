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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

 

Route::group(['middleware' => ['guest']], function(){

 // ADMIN
    Route::get('admin/login', 'Admin\Auth\AdminLoginController@getLoginForm');
    Route::get('admin', 'Admin\Auth\AdminLoginController@getLoginForm');
    Route::post('admin/authenticate', 'Admin\Auth\AdminLoginController@authenticate');
    Route::post('admin/password/email', 'Admin\Auth\AdminForgotPasswordController@sendResetLinkEmail');
  	Route::post('admin/password/reset', 'Admin\Auth\AdminResetPasswordController@reset');
    Route::get('admin/password/reset', 'Admin\Auth\AdminForgotPasswordController@showLinkRequestForm');
    Route::get('admin/password/reset/{token}', 'Admin\Auth\AdminResetPasswordController@showResetForm');

    // ADMIN
    Route::get('patient/login', 'Patient\Auth\PatientLoginController@getLoginForm');
    Route::get('patient', 'Patient\Auth\PatientLoginController@getLoginForm');
    Route::post('patient/authenticate', 'Patient\Auth\PatientLoginController@authenticate');
    Route::post('patient/password/email', 'Patient\Auth\PatientForgotPasswordController@sendResetLinkEmail');
  	Route::post('patient/password/reset', 'Patient\Auth\PatientResetPasswordController@reset');
    Route::get('patient/password/reset', 'Patient\Auth\PatientForgotPasswordController@showLinkRequestForm');
    Route::get('patient/password/reset/{token}', 'Patient\Auth\PatientResetPasswordController@showResetForm');

});



Route::group(['prefix' => 'accountant', 'middleware' => ['auth', 'accountant']], function () {



});

Route::group(['prefix' => 'doctor', 'middleware' => ['auth', 'doctor']], function () {



});

Route::group(['prefix' => 'laboratist', 'middleware' => ['auth', 'laboratist']], function () {



});

Route::group(['prefix' => 'nurse', 'middleware' => ['auth', 'nurse']], function () {



});

// Route::group(['prefix' => 'patient', 'middleware' => ['auth', 'patient']], function () {

// 	Route::get('home', 'PatientController@index');
// 	Route::get('profile', 'PatientController@profile');
// 	Route::post('logout', 'Patient\Auth\LoginController@getLogout');

// });

Route::group(['prefix' => 'pharmacist', 'middleware' => ['auth', 'pharmacist']], function () {



});

Route::group(['prefix' => 'receptionist', 'middleware' => ['auth', 'receptionist']], function () {



});

Route::group(['prefix' => 'patient', 'middleware' => ['patient']], function () {

    Route::get('home', 'PatientController@index');
    Route::get('profile', 'PatientController@profile');
    //Route::post('logout', 'Patient\Auth\PatientLoginController@getLogout');
    Route::post('logout',[
        'uses' => 'Patient\Auth\PatientLoginController@getLogout', 
        'as'   => 'patient.logout',
    ]);

});

Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function(){

    Route::get('home', 'AdminController@index');
    Route::get('profile', 'AdminController@profile');

    Route::get('officials', 'AdminController@getOfficial'); 
    Route::post('newofficials', 'AdminController@addOfficial');  // Should be a modal

    Route::get('patients', 'AdminController@getPatient'); 
    Route::post('newpatients', 'AdminController@addPatient');  // Should be a modal

    Route::get('department', 'AdminController@getDepartment');
    Route::post('newdepartment', 'AdminController@addDepartment'); //Should be a modal 

    Route::get('blood_donor', 'AdminController@getBloodDonor');
    Route::get('blood_bank', 'AdminController@getBloodBank');
    Route::get('medicine', 'AdminController@getMedicine');

    Route::post('logout', 'Admin\Auth\AdminLoginController@getLogout');
});
