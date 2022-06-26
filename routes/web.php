<?php

use App\Http\Controllers\ShippingAddressController;
use App\Http\Controllers\ShippingLocationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

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
Auth::routes();


Route::group(['namespace' => 'App\Http\Controllers'], function(){

    // Home Routes
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/bps_rates', 'HomeController@rates')->name('rates.frontend');
    Route::get('/contact', 'HomeController@contact')->name('contact.frontend');
    Route::get('/post_office_locations', 'HomeController@postLocations')->name('locations.frontend');
    Route::get('/bps_faq', 'HomeController@faq')->name('faq.frontend');

    Route::group(['prefix' => 'airmail'], function() {
        Route::get('/', 'AirMailController@index')->name('airmail.home');
        Route::get('/packages', 'AirMailController@packages')->name('airmail.packages');
        Route::get('/incoming-packages', 'AirMailController@inPackages')->name('airmail.inPackages');
    });

    // Route::resource('queries', QueryController::class);

    //User Routes
    Route::group(['prefix' => 'queries'], function() {
        Route::get('/', 'QueryController@index')->name('queries.index');
        Route::get('/sentbox', 'QueryController@sentbox')->name('queries.sentbox');
        Route::get('/create', 'QueryController@create')->name('queries.create');
        Route::post('/create', 'QueryController@store')->name('queries.store');
        Route::get('/{quary}/show', 'QueryController@show')->name('queries.show');
        Route::get('/{quary}/edit', 'QueryController@edit')->name('queries.edit');
        Route::patch('/{quary}/update', 'QueryController@update')->name('queries.update');
        Route::delete('/{quary}/delete', 'QueryController@destroy')->name('queries.destroy');
        Route::get('/trash', 'QueryController@trash')->name('queries.trash');
        Route::get('/restore/{quary}', 'QueryController@restore')->name('queries.restore');
        Route::delete('/delete/{quary}', 'QueryController@delete')->name('queries.delete');
        Route::post('/batchdestroy', 'QueryController@batchdestroy')->name('queries.batchdestroy');
    });


    // Auth and permition
    Route::group(['middleware' => ['auth', 'permission']], function() {

        Route::get('/email/verify', function () {
            return view('auth.verify-email');
        })->middleware('auth')->name('verification.notice');

        Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
            $request->fulfill();

            return redirect('/');
        })->middleware(['auth', 'signed'])->name('verification.verify');

        Route::post('/email/verification-notification', function (Request $request) {
            $request->user()->sendEmailVerificationNotification();

            return back()->with('success', 'Verification link sent!');
        })->middleware(['auth', 'throttle:6,1'])->name('verification.send');


        Route::group(['prefix' => 'myprofile'], function() {
            Route::get('/', 'ProfileController@myprofile')->name('myprofile');
            Route::get('/editmyprofile', 'ProfileController@editmyprofile')->name('editmyprofile');
            Route::post('/update', 'ProfileController@update')->name('profile.update');
        });

        // Admin dashboard
        Route::group(['prefix' => 'dashboard'], function() {
            Route::get('/', 'DashboardController@dashboard')->name('dashboard');
            Route::get('/trash', 'DashboardController@trash')->name('dashboard.trash');
        });

        //User Routes
        Route::group(['prefix' => 'users'], function() {
            Route::get('/', 'UsersController@index')->name('users.index');
            Route::get('/create', 'UsersController@create')->name('users.create');
            Route::post('/create', 'UsersController@store')->name('users.store');
            Route::get('/{user}/show', 'UsersController@show')->name('users.show');
            Route::get('/{user}/edit', 'UsersController@edit')->name('users.edit');
            Route::patch('/{user}/update', 'UsersController@update')->name('users.update');
            Route::delete('/{user}/delete', 'UsersController@destroy')->name('users.destroy');
            Route::get('/trash', 'UsersController@trash')->name('users.trash');
            Route::get('/restore/{user}', 'UsersController@restore')->name('users.restore');
            Route::delete('/delete/{user}', 'UsersController@delete')->name('users.delete');
        });
        //FAQ Category Routes
        Route::group(['prefix' => 'faqCategories'], function() {
            Route::get('/', 'FaqCategoryController@index')->name('faqCategories.index');
            Route::get('/create', 'FaqCategoryController@create')->name('faqCategories.create');
            Route::post('/create', 'FaqCategoryController@store')->name('faqCategories.store');
            Route::get('/{faqCategories}/show', 'FaqCategoryController@show')->name('faqCategories.show');
            Route::get('/{faqCategories}/edit', 'FaqCategoryController@edit')->name('faqCategories.edit');
            Route::patch('/{faqCategories}/update', 'FaqCategoryController@update')->name('faqCategories.update');
            Route::delete('/{faqCategories}/delete', 'FaqCategoryController@destroy')->name('faqCategories.destroy');
            Route::get('/trash', 'FaqCategoryController@trash')->name('faqCategories.trash');
            Route::get('/restore/{faqCategories}', 'FaqCategoryController@restore')->name('faqCategories.restore');
            Route::delete('/delete/{faqCategories}', 'FaqCategoryController@delete')->name('faqCategories.delete');
        });


        //FAQ Sub category Routes
        Route::group(['prefix' => 'faqSubCategories'], function() {
            Route::get('/', 'FaqSubCategoryController@index')->name('faqSubCategories.index');
            Route::get('/create', 'FaqSubCategoryController@create')->name('faqSubCategories.create');
            Route::post('/create', 'FaqSubCategoryController@store')->name('faqSubCategories.store');
            Route::get('/{faqSubCategorie}/show', 'FaqSubCategoryController@show')->name('faqSubCategories.show');
            Route::get('/{faqSubCategorie}/edit', 'FaqSubCategoryController@edit')->name('faqSubCategories.edit');
            Route::patch('/{faqSubCategorie}/update', 'FaqSubCategoryController@update')->name('faqSubCategories.update');
            Route::delete('/{faqSubCategorie}/delete', 'FaqSubCategoryController@destroy')->name('faqSubCategories.destroy');
            Route::get('/trash', 'FaqSubCategoryController@trash')->name('faqSubCategories.trash');
            Route::get('/restore/{faqSubCategorie}', 'FaqSubCategoryController@restore')->name('faqSubCategories.restore');
            Route::delete('/delete/{faqSubCategorie}', 'FaqSubCategoryController@delete')->name('faqSubCategories.delete');
        });

        //FAQ Routes
        Route::group(['prefix' => 'faqs'], function() {
            Route::get('/', 'FaqController@index')->name('faqs.index');
            Route::get('/create', 'FaqController@create')->name('faqs.create');
            Route::post('/create', 'FaqController@store')->name('faqs.store');
            Route::get('/{faq}/show', 'FaqController@show')->name('faqs.show');
            Route::get('/{faq}/edit', 'FaqController@edit')->name('faqs.edit');
            Route::patch('/{faq}/update', 'FaqController@update')->name('faqs.update');
            Route::delete('/{faq}/delete', 'FaqController@destroy')->name('faqs.destroy');
            Route::get('/trash', 'FaqController@trash')->name('faqs.trash');
            Route::get('/restore/{faq}', 'FaqController@restore')->name('faqs.restore');
            Route::delete('/delete/{faq}', 'FaqController@delete')->name('faqs.delete');
        });


        //Shipping locations Routes
        Route::group(['prefix' => 'shippinglocations'], function() {
            Route::get('/', 'ShippingLocationController@index')->name('shippinglocations.index');
            Route::get('/create', 'ShippingLocationController@create')->name('shippinglocations.create');
            Route::post('/create', 'ShippingLocationController@store')->name('shippinglocations.store');
            Route::get('/{shippinglocation}/show', 'ShippingLocationController@show')->name('shippinglocations.show');
            Route::get('/{shippinglocation}/edit', 'ShippingLocationController@edit')->name('shippinglocations.edit');
            Route::patch('/{shippinglocation}/update', 'ShippingLocationController@update')->name('shippinglocations.update');
            Route::delete('/{shippinglocation}/delete', 'ShippingLocationController@destroy')->name('shippinglocations.destroy');
            Route::get('/trash', 'ShippingLocationController@trash')->name('shippinglocations.trash');
            Route::get('/restore/{shippinglocation}', 'ShippingLocationController@restore')->name('shippinglocations.restore');
            Route::delete('/delete/{shippinglocation}', 'ShippingLocationController@delete')->name('shippinglocations.delete');
        });

        //Shipping Address Routes
        Route::group(['prefix' => 'shippingaddresses'], function() {
            Route::get('/', 'ShippingAddressController@index')->name('shippingaddresses.index');
            Route::get('/create', 'ShippingAddressController@create')->name('shippingaddresses.create');
            Route::post('/create', 'ShippingAddressController@store')->name('shippingaddresses.store');
            Route::get('/{shippingaddresse}/show', 'ShippingAddressController@show')->name('shippingaddresses.show');
            Route::get('/{shippingaddresse}/edit', 'ShippingAddressController@edit')->name('shippingaddresses.edit');
            Route::patch('/{shippingaddresse}/update', 'ShippingAddressController@update')->name('shippingaddresses.update');
            Route::delete('/{shippingaddresse}/delete', 'ShippingAddressController@destroy')->name('shippingaddresses.destroy');
            Route::get('/trash', 'ShippingAddressController@trash')->name('shippingaddresses.trash');
            Route::get('/restore/{shippingaddresse}', 'ShippingAddressController@restore')->name('shippingaddresses.restore');
            Route::delete('/delete/{shippingaddresse}', 'ShippingAddressController@delete')->name('shippingaddresses.delete');
        });


        Route::resource('roles', RolesController::class);
        Route::resource('permissions', PermissionsController::class);

    });
});

Route::get('/clearCache', function() {$exitCode = Artisan::call('cache:clear');})->name('clearCache');
Route::get('/clearDatabase', function() {$exitCode = Artisan::call('db:wipe');})->name('clearDatabase');
Route::get('/migrate', function() {$exitCode = Artisan::call('migrate');})->name('migrate');
Route::get('/seedPermission', function() {$exitCode = Artisan::call('permission:create-permission-routes');})->name('seedPermission');
Route::get('/seedDb', function() {$exitCode = Artisan::call('db:seed');})->name('seedDB');

