<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
// General routes
Route::get('/', function () {
    return view('welcome');
});
Route::get('/blank', function(){
    return view('blank');
})->name('blank');
Route::get('/checkout', function(){
    return view('checkout');
})->name('checkout');
Route::get('/store', function(){
    return view('store');
})->name('store');
Route::get('/product', function(){
    return view('product');
})->name('product');

Route::get('/home', 'HomeController@index')->name('home');
// User Routes
Auth::routes();
// Admin Routes
Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
// product routes for admin
Route::get('/admin/products', 'ProductController@index')->name('admin.products');
Route::get('/admin/newproduct', 'ProductController@new')->name('admin.newproduct');
Route::post('/admin/newproduct', 'ProductController@add')->name('admin.addproduct');
Route::get('/admin/product/{product}/edit', 'ProductController@edit')->name('admin.editproduct');
Route::put('/admin/product/{product}/edit', 'ProductController@update')->name('admin.updateproduct');
Route::delete('/admin/product/{product}/delete', 'ProductController@delete')->name('admin.deleteproduct');
Route::put('/admin/product/{product}/setdiscount', 'ProductController@setdiscount')->name('admin.setdiscount');
Route::put('/admin/product/{product}/removediscount', 'ProductController@removediscount')->name('admin.removediscount');
Route::post('/admin/product/{product}/available', 'ProductController@available')->name('admin.productavailable');
Route::post('/admin/product/{product}/visibility', 'ProductController@visibility')->name('admin.productvisibility');
// product photos routes for admin
Route::get('/admin/product/{product}/images', 'ProductImageController@index')->name('admin.productimages');
Route::post('/admin/product/{product}/images', 'ProductImageController@upload')->name('admin.addproductimage');
Route::delete('/admin/product/images/{image}/remove', 'ProductImageController@delete')->name('admin.deleteproductimage');
// product features routes for admin
Route::get('/admin/product/{product}/features/new', 'ProductFeatureController@new')->name('admin.newproductfeature');
Route::post('/admin/product/{product}/features/new', 'ProductFeatureController@add')->name('admin.addproductfeature');
Route::delete('/admin/product/feature/{feature}/delete', 'ProductFeatureController@delete')->name('admin.deleteproductfeature');
// category routes for admin
Route::get('/admin/categories', 'CategoryController@index')->name('admin.categories');
Route::get('/admin/newcategory', 'CategoryController@new')->name('admin.newcategory');
Route::post('/admin/newcategory', 'CategoryController@add')->name('admin.newcategory');
Route::get('/admin/category/{cat}/edit', 'CategoryController@edit')->name('admin.editcategory');
Route::put('/admin/category/{cat}/edit', 'CategoryController@update')->name('admin.updatecategory');
Route::delete('/admin/category/{cat}/delete', 'CategoryController@delete')->name('admin.deletecategory');
// brand routes for admin
Route::get('/admin/brands', 'BrandController@index')->name('admin.brands');
Route::get('/admin/newbrand', 'BrandController@new')->name('admin.newbrand');
Route::post('/admin/newbrand', 'BrandController@add')->name('admin.newbrand');
Route::get('/admin/brand/{brand}/edit', 'BrandController@edit')->name('admin.editbrand');
Route::put('/admin/brand/{brand}/edit', 'BrandController@update')->name('admin.updatebrand');
Route::delete('/admin/brand/{brand}/delete', 'BrandController@delete')->name('admin.deletebrand');
// auto code routes for admin
Route::get('/admin/autocodes', 'AutocodeController@index')->name('admin.autocodes');
Route::get('/admin/autocode/{code}/edit', 'AutocodeController@edit')->name('admin.editautocode');
Route::put('/admin/autocode/{code}/edit', 'AutocodeController@update')->name('admin.updateautocode');
// slider routes for admin
Route::get('/admin/sliders', 'SliderController@index')->name('admin.sliders');
Route::get('/admin/newslider', 'SliderController@new')->name('admin.newslider');
Route::post('/admin/newslider', 'SliderController@add')->name('admin.newslider');
Route::get('/admin/slider/{slider}/edit', 'SliderController@edit')->name('admin.editslider');
Route::put('/admin/slider/{slider}/edit', 'SliderController@update')->name('admin.updateslider');
Route::get('/admin/slider/{slider}/hide', 'SliderController@buttonhide')->name('admin.buttonhide');
Route::get('/admin/slider/{slider}/show', 'SliderController@buttonshow')->name('admin.buttonshow');
Route::delete('/admin/slider/{slider}/delete', 'SliderController@delete')->name('admin.deleteslider');

Route::get('/home', 'HomeController@index')->name('home');
