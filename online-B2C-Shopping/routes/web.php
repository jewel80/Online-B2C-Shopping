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

//view page
Route::get('/','viewController@index');
Route::get('/category-view/{id}','viewController@category');
Route::get('/product/details/{id}','viewController@productDetails');
Route::post('/search','viewController@searchProduct');
// mail us
Route::get('/mail-us','viewController@mailUs');
Route::post('/mail-us/save','viewController@mailusSave');

// Shopping Cart
Route::post('/cart/add','cartController@addCart');
Route::get('/cart/show','cartController@showCart');
Route::get('/cart/delete/{id}','cartController@deleteCart');

// Checkout
Route::get('/checkout','checkoutController@index');
Route::post('/checkout/sign-up','checkoutController@customerSingup');
Route::post('/customer/login','checkoutController@customerLogin');
Route::get('/checkout/shipping','checkoutController@shippingForm');
Route::post('/checkout/save-shipping','checkoutController@saveShippingForm');
Route::get('/checkout/paymet','checkoutController@paymentForm');
Route::post('/checkout/save-order','checkoutController@orderSaveInfo');
Route::get('/checkout/my-home','checkoutController@customerHome');


Auth::routes();
Route::get('/dashboard', 'HomeController@index')->name('home');


Route::group(['middleware' => ['authenticationMiddleware']], function () {
	Route::get('/category/add', 'categoryController@addCategory');
	Route::post('/category/save', 'categoryController@storeCategory');
	Route::get('/category/manage', 'categoryController@manageCategory');
	Route::get('/category/edit/{id}', 'categoryController@editCategory');
	Route::post('/category/update', 'categoryController@updateCategory');
	Route::get('/category/delete/{id}', 'categoryController@deleteCategory');

	Route::get('/sub-category/add', 'SubcategoryController@addSubCategory');
	Route::post('/sub-category/save', 'SubcategoryController@storeSubCategory');
	Route::get('/sub-category/manage', 'SubcategoryController@manageSubCategory');
	Route::get('/sub-category/edit/{id}', 'SubcategoryController@editSubCategory');
	Route::post('/sub-category/update', 'SubcategoryController@updateSubCategory');
	Route::get('/sub-category/delete/{id}', 'SubcategoryController@deleteSubCategory');

	Route::get('/manufacturer/add', 'manufacturerController@addManufacturer');
	Route::post('/manufacturer/save', 'manufacturerController@storeManufacturer');
	Route::get('/manufacturer/manage', 'manufacturerController@manageManufacturer');
	Route::get('/manufacturer/edit/{id}', 'manufacturerController@editManufacturer');
	Route::post('/manufacturer/update', 'manufacturerController@updateManufacturer');
	Route::get('/manufacturer/delete/{id}', 'manufacturerController@deleteManufacturer');


	Route::get('/product/add', 'productController@addProduct');
	Route::post('/product/save', 'productController@storeProduct');
	Route::get('/product/manage', 'productController@manageProduct');
	Route::get('/product/view/{id}', 'productController@viewProduct');
	Route::get('/product/edit/{id}', 'productController@editProduct');
	Route::post('/product/update', 'productController@updateProduct');
	Route::get('/product/delete/{id}', 'productController@deleteProduct');


	Route::get('/user/manage', 'userController@manageUser');

	Route::get('/user/massage', 'userController@userMassage');
});
