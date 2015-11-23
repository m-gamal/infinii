<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(
[
	'prefix' => 'admin/'
],
function()
{	
		Route::get('/', function () {
		    return view ('admin.dashboard');
		});


		Route::get('dashboard', ['as' => 'dashboard', function () {
			return view ('admin.dashboard');
		}]);

		/* Marketplace Section */
		Route::get('categories', ['as' => 'categories', 'uses' => 'Admin\CategoriesController@listAll']);
		Route::get('add-category', ['as' => 'add-category', 'uses' => 'Admin\CategoriesController@add']);
		Route::post('add-category', ['as' => 'do-add-category', 'uses' => 'Admin\CategoriesController@doAdd']);
		Route::get('edit-category/{id}', ['as' => 'edit-category', 'uses' => 'Admin\CategoriesController@edit']);
		Route::post('edit-category/{id}', ['as' => 'do-edit-category', 'uses' => 'Admin\CategoriesController@doEdit']);
		Route::post('delete-category/{id}', ['as' => 'do-delete-category', 'uses' => 'Admin\CategoriesController@doDelete']);
		
		Route::get('products', ['as' => 'products', 'uses' => 'Admin\ProductsController@listAll']);

		Route::get('fees', ['as' => 'fees', 'uses' => 'Admin\FeesController@listAll']);
		Route::get('add-fee', ['as' => 'add-fee', 'uses' => 'Admin\FeesController@add']);
		Route::post('add-fee', ['as' => 'do-add-fee', 'uses' => 'Admin\FeesController@doAdd']);
		Route::get('edit-fee/{id}', ['as' => 'edit-fee', 'uses' => 'Admin\FeesController@edit']);
		Route::post('edit-fee/{id}', ['as' => 'do-edit-fee', 'uses' => 'Admin\FeesController@doEdit']);
		Route::post('delete-fee/{id}', ['as' => 'do-delete-fee', 'uses' => 'Admin\FeesController@doDelete']);

		/* Member Section */
		Route::get('publisher', ['as' => 'publishers', 'uses' => 'Admin\MembersController@listAllPublishers']);
		Route::get('partners', ['as' => 'partners', 'uses' => 'Admin\MembersController@listAllPartners']);
		Route::get('customers', ['as' => 'customers', 'uses' => 'Admin\MembersController@listAllCustomers']);
		Route::get('affiliates', ['as' => 'affiliates', 'uses' => 'Admin\MembersController@listAllAffiliates']);
		Route::get('referrers', ['as' => 'referrers', 'uses' => 'Admin\MembersController@listAllReferrers']);

		Route::post('delete-member/{id}', ['as' => 'do-delete-member', 'uses' => 'Admin\MembersController@doDelete']);
});		