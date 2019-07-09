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
Route::get('/about', 'PagesController@about')->name('about');

Route::get('/services', 'PagesController@services')->name('services');
    Route::get('/services/travel-insurrance', 'PagesController@travelInsurance')->name('travel.insurance');
    Route::get('/services/car-motor-insurance', 'PagesController@carMotorInsurance')->name('car.motor.insurance');
    Route::get('/services/home-house-insurance', 'PagesController@homeHouseInsurance')->name('home.house.insurance');
    Route::get('/services/life-insurance', 'PagesController@lifeInsurance')->name('services.life-insurance');
        Route::get('/services/life-insurance/critical-illness', 'PagesController@criticalIllness')->name('critical.illness');
        Route::get('/services/life-insurance/decreasing-life-insurance', 'PagesController@decreasingLifeInsurance')->name('decreasing.life.insurance');

    Route::get('/services/mortgage', 'PagesController@mortgage')->name('services.mortgage');
        Route::get('/services/mortgage/income-lifetime', 'PagesController@incomeLifetimeMortgage')->name('service.income-lifetime.mortgage');
    Route::get('/service/insurance-calculator', 'PagesController@insuranceCalculator')->name('insurance.calculator');
    Route::post('/service/insurance-calculator/calculate', 'PagesController@calculateInsurance')->name('insurance.calculate');

Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/policy/download', 'PagesController@policy')->name('policy');
Route::get('/faqs', 'PagesController@faqs')->name('faqs');

Auth::routes([
    'verify' => false,
    'register' => false
]);

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {
    Route::get('/profile', 'AdminController@showProfile')->name('admin.profile');
    Route::get('/profile/edit', 'AdminController@editProfile')->name('admin.profile.edit');
    Route::put('/profile/update', 'AdminController@updateProfile')->name('admin.profile.update');
    Route::get('/profile/password/change', 'AdminController@changePassword')->name('admin.password.change');
    Route::put('/profile/password/change', 'AdminController@postChangePassword')->name('admin.password.change');

    Route::get('/members', 'AdminController@members')->name('members');
    Route::get('/new-member', 'AdminController@getAddMember')->name('admin.addmember');
    Route::post('/new-member', 'AdminController@postAddMember')->name('admin.addmember');
    Route::get('/member/{member}/edit', 'AdminController@editMember')->name('admin.member.edit');
    Route::put('/member/{member}/update', 'AdminController@updateMember')->name('admin.member.update');
    Route::put('/member/{member}/password/change', 'AdminController@changeMemberPassword')->name('admin.member.password.change');

    Route::get('/{member}/policy', 'AdminController@getAddPolicy')->name('policy.add');
    Route::post('/{member}/policy', 'AdminController@postAddPolicy')->name('policy.add');

    Route::get('/{member}/policy/{policy}/edit', 'AdminController@editPolicy')->name('policy.edit');
    Route::get('/{member}/section-a/{policy}/edit', 'AdminController@editSectionA')->name('section.a.edit');
    Route::get('/{member}/section-b/{policy}/edit', 'AdminController@editSectionB')->name('section.b.edit');
    Route::get('/{member}/section-c/{policy}/edit', 'AdminController@editSectionC')->name('section.c.edit');
    Route::get('/{member}/holder-details/{policy}/edit', 'AdminController@editHolderDetails')->name('holderdetails.edit');

    Route::put('/{member}/policy/{policy}/update', 'AdminController@updatePolicy')->name('policy.update');
    Route::put('/{member}/section-a/{policy}/update', 'AdminController@updateSectionA')->name('section.a.update');
    Route::put('/{member}/section-b/{policy}/update', 'AdminController@updateSectionB')->name('section.b.update');
    Route::put('/{member}/section-c/{policy}/update', 'AdminController@updateSectionC')->name('section.c.update');
    Route::put('/{member}/holder-details/{policy}/update', 'AdminController@updatePolicyHolderDetail')->name('holderdetails.update');
});
