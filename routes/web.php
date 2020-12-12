<?php

use Illuminate\Support\Facades\Route;
App::setLocale('ru');


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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('clients', 'ClientsController');
Route::resource('phone', 'Phone_numbersController');
Route::resource('cproduct', 'Category_productController');
Route::resource('categories', 'CategoriesController');
Route::resource('products', 'ProductsController');
Route::resource('ingredients', 'IngredientsController');
Route::resource('locations', 'LocationsController');
Route::resource('supplies', 'SuppliesController');
Route::resource('procurement', 'ProcurementController');
Route::resource('composition', 'CompositionController');
Route::resource('production', 'ProductionController');





Route::prefix('clients')->group(function(){

    Route::get('/', "ClientsController@index")->name('clients.index');
    Route::post('/', "ClientsController@store")->name('clients.store');

    Route::get('create', "ClientsController@create")->name('clients.create');
    Route::put('{clients}', 'ClientsController@update')->name('clients.update');
    
    Route::get('{clients}', "ClientsController@show")->name('clients.show');


    Route::post('{clients}/comments', "ClientsController@storeComment")->name('store_clients_comment');

    Route::delete('{clients}', 'ClientsController@destroy')->name('clients.destroy');
    Route::get('{clients}/edit', 'ClientsController@edit')->name('clients.edit');
});

Route::prefix('phone')->group(function(){

   
    Route::get('/', "Phone_numbersController@index")->name('phone.index');
    Route::post('/', "Phone_numbersController@store")->name('phone.store');

    Route::get('create', "Phone_numbersController@create")->name('phone.create');
    Route::put('{phone}', 'Phone_numbersController@update')->name('phone.update');
    
    Route::get('{phone}', "Phone_numbersController@show")->name('phone.show');


    Route::post('{phone}/comments', "Phone_numbersController@storeComment")->name('store_phone_comment');

    Route::delete('{phone}', 'Phone_numbersController@destroy')->name('phone.destroy');
    Route::get('{phone}/edit', 'Phone_numbersController@edit')->name('phone.edit');
});

Route::prefix('cproduct')->group(function(){
        
    Route::get('/', "Category_productController@index")->name('cproduct.index');
    Route::post('/', "Category_productController@store")->name('cproduct.store');

    Route::get('create', "Category_productController@create")->name('cproduct.create');
    Route::put('{cproduct}', 'Category_productController@update')->name('cproduct.update');
    
    Route::get('{cproduct}', "Category_productController@show")->name('cproduct.show');


    Route::post('{cproduct}/comments', "Category_productController@storeComment")->name('store_cproduct_comment');

    Route::delete('{cproduct}', 'Category_productController@destroy')->name('cproduct.destroy');
    Route::get('{cproduct}/edit', 'Category_productController@edit')->name('cproduct.edit');
});

Route::prefix('categories')->group(function(){

    Route::get('/', "CategoriesController@index")->name('categories.index');
    Route::post('/', "CategoriesController@store")->name('categories.store');

    Route::get('create', "CategoriesController@create")->name('categories.create');
    Route::put('{categories}', 'CategoriesController@update')->name('categories.update');
    
    Route::get('{categories}', "CategoriesController@show")->name('categories.show');


    Route::post('{categories}/comments', "CategoriesController@storeComment")->name('store_products_comment');

    Route::delete('{categories}', 'CategoriesController@destroy')->name('categories.destroy');
    Route::get('{categories}/edit', 'CategoriesController@edit')->name('categories.edit');
});


Route::prefix('products')->group(function(){

    Route::get('/', "ProductsController@index")->name('products.index');
    Route::post('/', "ProductsController@store")->name('products.store');

    Route::get('create', "ProductsController@create")->name('products.create');
    Route::put('{products}', 'ProductsController@update')->name('products.update');
    
    Route::get('{products}', "ProductsController@show")->name('products.show');


    Route::post('{products}/comments', "ProductsController@storeComment")->name('store_products_comment');

    Route::delete('{products}', 'ProductsController@destroy')->name('products.destroy');
    Route::get('{products}/edit', 'ProductsController@edit')->name('products.edit');
});


Route::prefix('ingredients')->group(function(){

    Route::get('/', "IngredientsController@index")->name('ingredients.index');
    Route::post('/', "IngredientsController@store")->name('ingredients.store');

    Route::get('create', "IngredientsController@create")->name('ingredients.create');
    Route::put('{ingredients}', 'IngredientsController@update')->name('ingredients.update');
    
    Route::get('{ingredients}', "IngredientsController@show")->name('ingredients.show');


    Route::post('{ingredients}/comments', "IngredientsController@storeComment")->name('store_ingredients_comment');

    Route::delete('{ingredients}', 'IngredientsController@destroy')->name('ingredients.destroy');
    Route::get('{ingredients}/edit', 'IngredientsController@edit')->name('ingredients.edit');

});

Route::prefix('locations')->group(function(){

    Route::get('/', "LocationsController@index")->name('locations.index');
    Route::post('/', "LocationsController@store")->name('locations.store');

    Route::get('create', "LocationsController@create")->name('locations.create');
    Route::put('{locations}', 'LocationsController@update')->name('locations.update');
    
    Route::get('{locations}', "LocationsController@show")->name('locations.show');


    Route::post('{locations}/comments', "LocationsController@storeComment")->name('store_locations_comment');

    Route::delete('{locations}', 'LocationsController@destroy')->name('locations.destroy');
    Route::get('{locations}/edit', 'LocationsController@edit')->name('locations.edit');




});


Route::prefix('supplies')->group(function(){

    Route::get('/', "SuppliesController@index")->name('supplies.index');
    Route::post('/', "SuppliesController@store")->name('supplies.store');

    Route::get('create', "SuppliesController@create")->name('supplies.create');
    Route::put('{supplies}', 'SuppliesController@update')->name('supplies.update');
    
    Route::get('{supplies}', "SuppliesController@show")->name('supplies.show');


    Route::post('{supplies}/comments', "SuppliesController@storeComment")->name('store_supplies_comment');

    Route::delete('{supplies}', 'SuppliesController@destroy')->name('supplies.destroy');
    Route::get('{supplies}/edit', 'SuppliesController@edit')->name('supplies.edit');
});


Route::prefix('procurement')->group(function(){
    
    Route::get('/', "ProcurementController@index")->name('procurement.index');
    Route::post('/', "ProcurementController@store")->name('procurement.store');

    Route::get('create', "ProcurementController@create")->name('procurement.create');
    Route::put('{procurement}', 'ProcurementController@update')->name('procurement.update');
    
    Route::get('{procurement}', "ProcurementController@show")->name('procurement.show');


    Route::post('{procurement}/comments', "ProcurementController@storeComment")->name('store_procurement_comment');

    Route::delete('{procurement}', 'ProcurementController@destroy')->name('procurement.destroy');
    Route::get('{procurement}/edit', 'ProcurementController@edit')->name('procurement.edit');
});


Route::prefix('composition')->group(function(){

    Route::get('/', "CompositionController@index")->name('composition.index');
    Route::post('/', "CompositionController@store")->name('composition.store');

    Route::get('create', "CompositionController@create")->name('composition.create');
    Route::put('{composition}', 'CompositionController@update')->name('composition.update');

    // Route::get('add_product_id', "CompositionController@create")->name('create_product_id');
    // Route::post('add_product_id', "CompositionController@create");
    
    // Route::get('add_ingredient_id', "CompositionController@create")->name('create_ingredient_id');
    // Route::post('add_ingredient_id', "CompositionController@create");
    
    // Route::get('add_quantity', "CompositionController@create")->name('create_quantity');
    // Route::post('add_quantity', "CompositionController@create");

    Route::get('{composition}', "CompositionController@show")->name('composition.show');
    Route::delete('{composition}', 'CompositionController@destroy')->name('composition.destroy');

    Route::get('{composition}/edit', 'CompositionController@edit')->name('composition.edit');
    // Route::post('{composition}/comments', "CompositionController@storeComment")->name('store_composition_comment');
});



Route::prefix('production')->group(function(){

    Route::get('/', "ProductionController@index")->name('production.index');
    Route::post('/', "ProductionController@store")->name('production.store');

    Route::get('create', "ProductionController@create")->name('production.create');
    Route::put('{production}', 'ProductionController@update')->name('production.update');
    
    // Route::get('add_product_id', "ProductionController@create")->name('create_product_id');
    // Route::post('add_product_id', "ProductionController@create");
    
    // Route::get('add_product_quantity', "ProductionController@create")->name('create_product_quantity');
    // Route::post('add_product_quantity', "ProductionController@create");
    
    // Route::get('add_product_date', "ProductionController@create")->name('create_product_date');
    // Route::post('add_product_date', "ProductionController@create");

    Route::get('{production}', "ProductionController@show")->name('production.show');
    Route::delete('{production}', 'ProductionController@destroy')->name('production.destroy');

    // Route::post('{production}/comments', "ProductionController@storeComment")->name('store_production_comment');
    Route::get('{production}/edit', 'ProductionController@edit')->name('production.edit');
});
