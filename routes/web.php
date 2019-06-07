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

Route::get('/', 'PagesController@welcome')->name('welcome');
Route::get('about', 'PagesController@about')->name('about');

Route::get('services', 'PagesController@services')->name('services');
    Route::get('services/life-insurance', 'PagesController@lifeInsurance')->name('services.life-insurance');
        Route::get('services/life-insurance/critical-illness', 'PagesController@criticalIllness')->name('critical.illness');
        Route::get('services/life-insurance/decreasing-life-insurance', 'PagesController@decreasingLifeInsurance')->name('decreasing.life.insurance');

    Route::get('/services/mortgage', 'PagesController@mortgage')->name('services.mortgage');
        Route::get('/services/mortgage/income-lifetime', 'PagesController@incomeLifetimeMortgage')->name('service.income-lifetime.mortgage');
    Route::get('/service/insurance-calculator', 'PagesController@insuranceCalculator')->name('insurance.calculator');
    Route::post('/service/insurance-calculator/calculate', 'PagesController@calculateInsurance')->name('insurance.calculate');

Route::get('contact', 'PagesController@contact')->name('contact');
Route::get('/policy', 'PagesController@policy')->name('policy');
Route::get('faqs', 'PagesController@faqs')->name('faqs');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
