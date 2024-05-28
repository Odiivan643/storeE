<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class, 'index'])->name('home');
// Route::get('/', function () {
//     return view('index');
// })->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::prefix('admin')->name('admin.')->middleware('admin')->group(function(){

    //Get Categories datas
    Route::get('/categories', 'App\Http\Controllers\CategoryController@index')->name('category.index');

    //Show Category by Id
    Route::get('/categories/show/{id}', 'App\Http\Controllers\CategoryController@show')->name('category.show');

    //Get Categories by Id
    Route::get('/categories/create', 'App\Http\Controllers\CategoryController@create')->name('category.create');

    //Edit Category by Id
    Route::get('/categories/edit/{id}', 'App\Http\Controllers\CategoryController@edit')->name('category.edit');

    //Save new Category
    Route::post('/categories/store', 'App\Http\Controllers\CategoryController@store')->name('category.store');

    //Update One Category
    Route::put('/categories/update/{category}', 'App\Http\Controllers\CategoryController@update')->name('category.update');

    //Update One Category Speedly
    Route::put('/categories/speed/{category}', 'App\Http\Controllers\CategoryController@updateSpeed')->name('category.update.speed');

    //Delete Category
    Route::delete('/categories/delete/{category}', 'App\Http\Controllers\CategoryController@delete')->name('category.delete');

    //Get Products datas
    Route::get('/products', 'App\Http\Controllers\ProductController@index')->name('product.index');

    //Show Product by Id
    Route::get('/products/show/{id}', 'App\Http\Controllers\ProductController@show')->name('product.show');

    //Get Products by Id
    Route::get('/products/create', 'App\Http\Controllers\ProductController@create')->name('product.create');

    //Edit Product by Id
    Route::get('/products/edit/{id}', 'App\Http\Controllers\ProductController@edit')->name('product.edit');

    //Save new Product
    Route::post('/products/store', 'App\Http\Controllers\ProductController@store')->name('product.store');

    //Update One Product
    Route::put('/products/update/{product}', 'App\Http\Controllers\ProductController@update')->name('product.update');

    //Update One Product Speedly
    Route::put('/products/speed/{product}', 'App\Http\Controllers\ProductController@updateSpeed')->name('product.update.speed');

    //Delete Product
    Route::delete('/products/delete/{product}', 'App\Http\Controllers\ProductController@delete')->name('product.delete');

    //Get Users datas
    Route::get('/users', 'App\Http\Controllers\UserController@index')->name('user.index');

    //Show User by Id
    Route::get('/users/show/{id}', 'App\Http\Controllers\UserController@show')->name('user.show');

    //Get Users by Id
    Route::get('/users/create', 'App\Http\Controllers\UserController@create')->name('user.create');

    //Edit User by Id
    Route::get('/users/edit/{id}', 'App\Http\Controllers\UserController@edit')->name('user.edit');

    //Save new User
    Route::post('/users/store', 'App\Http\Controllers\UserController@store')->name('user.store');

    //Update One User
    Route::put('/users/update/{user}', 'App\Http\Controllers\UserController@update')->name('user.update');

    //Update One User Speedly
    Route::put('/users/speed/{user}', 'App\Http\Controllers\UserController@updateSpeed')->name('user.update.speed');

    //Delete User
    Route::delete('/users/delete/{user}', 'App\Http\Controllers\UserController@delete')->name('user.delete');

    //Get Sliders datas
    Route::get('/sliders', 'App\Http\Controllers\SliderController@index')->name('slider.index');

    //Show Slider by Id
    Route::get('/sliders/show/{id}', 'App\Http\Controllers\SliderController@show')->name('slider.show');

    //Get Sliders by Id
    Route::get('/sliders/create', 'App\Http\Controllers\SliderController@create')->name('slider.create');

    //Edit Slider by Id
    Route::get('/sliders/edit/{id}', 'App\Http\Controllers\SliderController@edit')->name('slider.edit');

    //Save new Slider
    Route::post('/sliders/store', 'App\Http\Controllers\SliderController@store')->name('slider.store');

    //Update One Slider
    Route::put('/sliders/update/{slider}', 'App\Http\Controllers\SliderController@update')->name('slider.update');

    //Update One Slider Speedly
    Route::put('/sliders/speed/{slider}', 'App\Http\Controllers\SliderController@updateSpeed')->name('slider.update.speed');

    //Delete Slider
    Route::delete('/sliders/delete/{slider}', 'App\Http\Controllers\SliderController@delete')->name('slider.delete');

    //Get Contacts datas
    Route::get('/contacts', 'App\Http\Controllers\ContactController@index')->name('contact.index');

    //Show Contact by Id
    Route::get('/contacts/show/{id}', 'App\Http\Controllers\ContactController@show')->name('contact.show');

    //Get Contacts by Id
    Route::get('/contacts/create', 'App\Http\Controllers\ContactController@create')->name('contact.create');

    //Edit Contact by Id
    Route::get('/contacts/edit/{id}', 'App\Http\Controllers\ContactController@edit')->name('contact.edit');

    //Save new Contact
    Route::post('/contacts/store', 'App\Http\Controllers\ContactController@store')->name('contact.store');

    //Update One Contact
    Route::put('/contacts/update/{contact}', 'App\Http\Controllers\ContactController@update')->name('contact.update');

    //Update One Contact Speedly
    Route::put('/contacts/speed/{contact}', 'App\Http\Controllers\ContactController@updateSpeed')->name('contact.update.speed');

    //Delete Contact
    Route::delete('/contacts/delete/{contact}', 'App\Http\Controllers\ContactController@delete')->name('contact.delete');

    //Get Roles datas
    Route::get('/roles', 'App\Http\Controllers\RoleController@index')->name('role.index');

    //Show Role by Id
    Route::get('/roles/show/{id}', 'App\Http\Controllers\RoleController@show')->name('role.show');

    //Get Roles by Id
    Route::get('/roles/create', 'App\Http\Controllers\RoleController@create')->name('role.create');

    //Edit Role by Id
    Route::get('/roles/edit/{id}', 'App\Http\Controllers\RoleController@edit')->name('role.edit');

    //Save new Role
    Route::post('/roles/store', 'App\Http\Controllers\RoleController@store')->name('role.store');

    //Update One Role
    Route::put('/roles/update/{role}', 'App\Http\Controllers\RoleController@update')->name('role.update');

    //Update One Role Speedly
    Route::put('/roles/speed/{role}', 'App\Http\Controllers\RoleController@updateSpeed')->name('role.update.speed');

    //Delete Role
    Route::delete('/roles/delete/{role}', 'App\Http\Controllers\RoleController@delete')->name('role.delete');

});

Route::get('/contact',[HomeController::class, 'contact'])->name('contact');

Route::get('/cart',[CartController::class, 'cart'])->name('cart');

Route::get('/cart/add/{productId}',[CartController::class, 'addToCart'])->name('cart.add');

Route::get('/cart/remove/{productId}/{quantity}',[CartController::class, 'removeFromCart'])->name('cart.remove');

Route::get('/product/{slug}',[HomeController::class, 'showProduct'])->name('showProduct');