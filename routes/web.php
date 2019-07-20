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

// Route::get('/', function () {
//     return view('layouts.master');
// });

Route::get('/', 'PagesController@home')->name('index');
Route::get('/about', 'PagesController@about');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('saler')->group(function() {
  Route::get('/login', 'Auth\SalerLoginController@showLoginForm')->name('saler.login');
  Route::post('/login', 'Auth\SalerLoginController@Login')->name('saler.login.submit');
  Route::get('/register', 'Auth\SalerRegisterController@showRegisterForm')->name('saler.register');
  Route::post('/register', 'Auth\SalerRegisterController@Store')->name('saler.register.submit');


  Route::get('/', 'SalerController@Index')->name('saler.dashboard');
  Route::get('/pending', 'SalerController@Pending')->name('saler.pending');


  Route::get('/product/{id}', 'SalerController@show')->name('product.show');

  Route::get('/catagory', 'SalerController@showCatagory')->name('product.catagory');
  Route::get('/catagory/add/subcatagory/{id}', 'SalerController@showSubcatagory')->name('product.subcatagory');
  Route::get('/catagory/subcatagory/add/sub2catagory/{id}', 'SalerController@showSub2catagory')->name('product.sub2catagory');
  Route::get('/catagory/subcatagory/sub2catagory/product/{id}', 'ProductsController@showProductUploadForm')->name('product.upload.form');
  Route::post('/catagory/subcatagory/sub2catagory/product/{id}', 'ProductsController@StoreProduct')->name('product.upload.product');
  Route::post('/catagory/product/delete/{id}', 'ProductsController@DeleteProduct')->name('product.delete');
});

Route::get('/{catagory}', 'PagesController@catagory')->name('catagory.page');

Route::prefix('admin')->group(function() {
  Route::get('/dashboard', 'AdminController@showDashboard')->name('admin.dashboard');
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@Login')->name('admin.login.submit');

//Catagories All Routes
  Route::get('/catagory', 'AdminController@showCatagory')->name('admin.catagory');
  Route::get('/catagory/add/catagory', 'AdminController@addCatagory')->name('admin.catagory.add');
  Route::post('/catagory/add/catagory', 'AdminController@storeCatagory')->name('admin.catagory.add');
  Route::post('/catagory/delete/{id}', 'AdminController@deleteCatagory')->name('admin.catagory.delete');
  Route::get('/catagory/edit/{id}', 'AdminController@editCatagory')->name('admin.catagory.edit');
  Route::post('/catagory/edit/{id}', 'AdminController@upadateCatagory')->name('admin.catagory.update');

//Sub Catagories All Routes
  Route::get('/catagory/add/subcatagory/catagory/add/{id}', 'AdminController@addSubcatagory')->name('admin.subcatagory.add');
  Route::post('/catagory/add/subcatagory/catagory/add/{id}', 'AdminController@storeSubcatagory')->name('admin.subcatagory.add');
  Route::get('/catagory/add/subcatagory/catagory', 'AdminController@showCatagoryForSubcatagory')->name('admin.subcatagory.add.catagory');
  Route::post('/subcatagory/delete/{id}', 'AdminController@deleteSubcatagory')->name('admin.subcatagory.delete');
  Route::get('/subcatagory/edit/{id}', 'AdminController@editSubcatagory')->name('admin.subcatagory.edit');
  Route::post('/subcatagory/edit/{id}', 'AdminController@upadateSubcatagory')->name('admin.subcatagory.update');

//Sub2Catagories All Routes
  Route::get('/catagory/add/sub2catagory/catagory/subcatagory/add/{id}', 'AdminController@addSub2catagory')->name('admin.sub2catagory.add');
  Route::post('/catagory/add/sub2catagory/catagory/subcatagory/add/{id}', 'AdminController@storeSub2catagory')->name('admin.sub2catagory.add');
  Route::get('/catagory/add/sub2catagory/catagory', 'AdminController@showCatagoryForSub2catagory')->name('admin.sub2catagory.add.catagory');
  Route::get('/catagory/add/sub2catagory/catagory/subcatagory/{id}', 'AdminController@showSubcatagoryForSub2catagory')->name('admin.sub2catagory.add.subcatagory');
  Route::post('/sub2catagory/delete/{id}', 'AdminController@deleteSub2catagory')->name('admin.sub2catagory.delete');
  Route::get('/sub2catagory/edit/{id}', 'AdminController@editSub2catagory')->name('admin.sub2catagory.edit');
  Route::post('/sub2catagory/edit/{id}', 'AdminController@upadateSub2catagory')->name('admin.sub2catagory.update');

});
