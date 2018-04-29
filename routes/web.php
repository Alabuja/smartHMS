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

// Route::get('/home', 'HomeController@index')->name('home');

 

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

Route::prefix('doctor')->group(function () {

    Route::get('home', 'DoctorController@index');
    Route::get('profile', 'DoctorController@profile'); 
    Route::get('blood_donor', 'DoctorController@getBloodDonor');
    Route::get('blood_bank', 'DoctorController@getBloodBank');

    Route::get('patients', 'DoctorController@getPatient'); 
    Route::post('newpatients', 'DoctorController@addPatient');  // Should be a modal

    Route::get('appointment', 'DoctorController@getAppointment');
    Route::post('newappointment', 'DoctorController@addAppointment'); // Should be A Modal

});

Route::prefix('nurse')->group(function () {

    Route::get('home', 'NurseController@index');
    Route::get('profile', 'NurseController@profile'); 
    Route::get('blood_donor', 'NurseController@getBloodDonor');
    Route::get('blood_bank', 'NurseController@getBloodBank');

    Route::get('patients', 'NurseController@getPatient'); 
    Route::post('newpatients', 'NurseController@addPatient');  // Should be a modal

    Route::get('bed_allotment', 'NurseController@getBedAllotment');
    Route::post('bed_allotment', 'NurseController@addBedAllotment'); // Should be A Modal

    Route::get('bed', 'NurseController@getBed');
    Route::post('bed', 'NurseController@addBed');

});

Route::prefix('receptionist')->group(function () {

    Route::get('home', 'ReceptionistController@index');
    Route::get('profile', 'ReceptionistController@profile'); 
    Route::get('appointment', 'ReceptionistController@getAppointment');
    Route::post('appointment', 'ReceptionistController@addAppointment');

    Route::get('patient', 'ReceptionistController@getPatient'); 
    Route::post('newpatient', 'ReceptionistController@addPatient');  // Should be a modal

});

Route::prefix('pharmacist')->group(function () {

    Route::get('home', 'PharmacistController@index');
    Route::get('profile', 'PharmacistController@profile'); 

    Route::get('medicine_sale', 'PharmacistController@getMedicineSale');
    Route::post('medicine_sale', 'PharmacistController@addMedicineSale'); // Should Be a Modal

    Route::get('medicine', 'PharmacistController@getMedicine'); 
    Route::post('medicine', 'PharmacistController@addMedicine');  // Should be a modal

    Route::get('medicine_category', 'PharmacistController@getMedicineCategory');
    Route::post('medicine_category', 'PharmacistController@addMedicineCategory');

});

Route::prefix('laboratorist')->group(function () {

    Route::get('home', 'LaboratoristController@index');
    Route::get('profile', 'LaboratoristController@profile'); 
    Route::get('blood_bank', 'LaboratoristController@getBloodBank');
    Route::get('blood_donor', 'LaboratoristController@getBloodDonor');

    Route::post('blood_donor', 'LaboratoristController@addBloodDonor'); // Should be A Modal

});

Route::prefix('accountant')->group(function () {

    Route::get('home', 'AccountantController@index');
    Route::get('profile', 'AccountantController@profile'); 
    Route::get('invoice_add', 'AccountantController@getInvoice');
    Route::post('invoice_add', 'AccountantController@getNewInvoice');

    Route::get('invoice_manage', 'AccountantController@getInvoiceManage'); // Should be A Modal

});


Route::group(['prefix' => 'patient', 'middleware' => ['patient']], function () {

    Route::get('home', 'PatientController@index');
    Route::get('profile', 'PatientController@profile');
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
    Route::get('department/{id}', 'AdminController@editDepartment');
    Route::post('department/{id}', 'AdminController@updateDepartment');
    Route::post('newdepartment', 'AdminController@addDepartment'); //Should be a modal 

    Route::get('department_facilities/{id}', 'AdminController@getFacility');
    Route::post('department_facilities', 'AdminController@addFacility');
    
    Route::get('department_facilities/edit/{id}', 'AdminController@editFacility');
    Route::post('department_facilities/edit/{id}', 'AdminController@updateFacilities');

    Route::get('blood_donor', 'AdminController@getBloodDonor');
    Route::get('blood_bank', 'AdminController@getBloodBank');
    Route::get('medicine', 'AdminController@getMedicine');

    Route::post('logout', 'Admin\Auth\AdminLoginController@getLogout');
});
