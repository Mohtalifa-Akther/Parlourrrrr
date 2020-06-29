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

Route::get('/', 'Front\PageController@index');
Route::get('/about', 'Front\PageController@about');
Route::get('/contact', 'Front\PageController@contact');
Route::get('/gallery', 'Front\PageController@gallery');
Route::get('/services', 'Front\PageController@service');
Route::get('/products', 'Front\PageController@product');
Route::get('/packages', 'Front\PageController@packages');
Route::get('/bookings', 'Front\PageController@bookings');
Route::post('/sendbookings', 'Front\PageController@sendbookings')->middleware('customer');
Route::get('/my_bookings', 'Front\ProfileController@my_bookings')->middleware('customer');;
Route::get('/profile', 'Front\ProfileController@profile')->middleware('customer');;
Route::post('/profile/update/{customer}', 'Front\ProfileController@profileUpdate')->middleware('customer');;
Route::get('/sign_up', 'Front\PageController@sign_up');
Route::post('/customer/login', 'Front\AuthController@login');
Route::get('/customer/logout', 'Front\AuthController@logout');
Route::post('/customer/register', 'Front\AuthController@register');

Route::get('/admin/login', 'Admin\AuthController@showLoginForm');
Route::post('/admin/login', 'Admin\AuthController@login');
Route::get('/admin/logout', 'Admin\AuthController@logout');

Route::prefix('/admin')->middleware('admin')->group(function () {
    Route::get('/', function () {
        return redirect('/admin/dashboard');
    });
    Route::get('/dashboard', 'Admin\DashboardController@index');

    Route::get('/settings', 'Admin\SettingController@setting');
    Route::post('/settings/update', 'Admin\SettingController@updateSetting');

    Route::get('/profile', 'Admin\ProfileController@profile');
    Route::post('/profile/update', 'Admin\ProfileController@updateProfile');

    Route::get('/pages/{name}', 'Admin\PageController@getPage');
    Route::post('/pages/update/{name}', 'Admin\ProfileController@update');




    Route::get('/customers', 'Admin\CustomerController@index');
    Route::get('/customers/delete/{customer}', 'Admin\CustomerController@delete');
    Route::get('/customers/block/{customer}', 'Admin\CustomerController@block');
    Route::get('/customers/unblock/{customer}', 'Admin\CustomerController@unblock');


    Route::get('/employees', 'Admin\EmployeeController@index');
    Route::get('/employees/create', 'Admin\EmployeeController@create');
    Route::post('/employees/store', 'Admin\EmployeeController@store');
    Route::get('/employees/edit/{employee}', 'Admin\EmployeeController@edit');
    Route::get('/employees/show/{employee}', 'Admin\EmployeeController@show');
    Route::post('/employees/update/{employee}', 'Admin\EmployeeController@update');
    Route::get('/employees/delete/{employee}', 'Admin\EmployeeController@delete');


    Route::get('/orders', 'Admin\OrderController@index');
    Route::get('/orders/pending', 'Admin\OrderController@pending');
    Route::get('/orders/show/{order}', 'Admin\OrderController@show');
    Route::get('/orders/changeStatus/{order}/{status}', 'Admin\OrderController@changeStatus');
    Route::get('/orders/delete/{order}', 'Admin\OrderController@delete');


    Route::get('/bookings', 'Admin\BookingController@index');
    Route::get('/bookings/pending', 'Admin\BookingController@pending');
    Route::get('/bookings/show/{booking}', 'Admin\BookingController@show');
    Route::get('/bookings/changeStatus/{booking}/{status}', 'Admin\BookingController@changeStatus');
    Route::get('/bookings/delete/{booking}', 'Admin\BookingController@delete');


    Route::get('/products', 'Admin\ProductController@index');
    Route::get('/products/create', 'Admin\ProductController@create');
    Route::post('/products/store', 'Admin\ProductController@store');
    Route::get('/products/edit/{product}', 'Admin\ProductController@edit');
    Route::get('/products/show/{product}', 'Admin\ProductController@show');
    Route::post('/products/update/{product}', 'Admin\ProductController@update');
    Route::get('/products/delete/{product}', 'Admin\ProductController@delete');


    Route::get('/packages', 'Admin\PackageController@index');
    Route::get('/packages/create', 'Admin\PackageController@create');
    Route::post('/packages/store', 'Admin\PackageController@store');
    Route::get('/packages/edit/{package}', 'Admin\PackageController@edit');
    Route::get('/packages/show/{package}', 'Admin\PackageController@show');
    Route::post('/packages/update/{package}', 'Admin\PackageController@update');
    Route::get('/packages/delete/{package}', 'Admin\PackageController@delete');


    Route::get('/services', 'Admin\ServiceController@index');
    Route::get('/services/create', 'Admin\ServiceController@create');
    Route::post('/services/store', 'Admin\ServiceController@store');
    Route::get('/services/edit/{service}', 'Admin\ServiceController@edit');
    Route::get('/services/show/{service}', 'Admin\ServiceController@show');
    Route::post('/services/update/{service}', 'Admin\ServiceController@update');
    Route::get('/services/delete/{service}', 'Admin\ServiceController@delete');
});
