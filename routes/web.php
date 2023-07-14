<?php

use Illuminate\Support\Facades\Route;

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
    return view('Frontend.Login.Pages.index');
});
Route::view('index', 'Frontend.Login.Pages.index')->name('index');
Route::view('home', 'Frontend.Login.Pages.home')->name('home');
Route::view('nearby', 'Frontend.Login.Pages.nearby')->name('nearby');
Route::view('whatshot', 'Frontend.Login.Pages.whatshot')->name('whatshot');
Route::view('catagories', 'Frontend.Login.Pages.catagories')->name('catagories');
Route::view('login', 'Frontend.Login.Pages.login')->name('login');

Route::view('funleisure', 'Frontend.User.userPages.funleisure')->name('funleisure');
Route::view('bestResturant', 'Frontend.User.userPages.bestResturant')->name('bestResturant');
Route::view('premiumBussiness', 'Frontend.User.userPages.premiumBussiness')->name('premiumBussiness');
Route::view('menu', 'Frontend.User.userPages.menu')->name('menu');
Route::view('usernearby', 'Frontend.User.userPages.usernearby')->name('usernearby');
Route::view('userwhatshot', 'Frontend.User.userPages.userwhatshot')->name('userwhatshot');
Route::view('newyear', 'Frontend.User.userPages.newyear')->name('newyear');
Route::view('bookingOption', 'Frontend.User.userPages.bookingOption')->name('bookingOption');
Route::view('rsvp', 'Frontend.User.userPages.rsvp')->name('rsvp');
Route::view('rsvpPlus', 'Frontend.User.userPages.rsvpPlus')->name('rsvpPlus');
Route::view('payment', 'Frontend.User.userPages.payment')->name('payment');

Route::view('editProfile', 'Frontend.User.userPages.editProfile')->name('editProfile');
Route::view('editProfileUser', 'Frontend.User.userPages.editProfile.editProfileUser')->name('editProfileUser');
Route::view('inbox', 'Frontend.User.userPages.editProfile.inbox')->name('inbox');
Route::view('following', 'Frontend.User.userPages.editProfile.following')->name('following');
Route::view('notification', 'Frontend.User.userPages.editProfile.notification')->name('notification');
Route::view('privacyPolicy', 'Frontend.User.userPages.editProfile.privacyPolicy')->name('privacyPolicy');
Route::view('wallet', 'Frontend.User.userPages.editProfile.wallet')->name('wallet');
Route::view('favorites', 'Frontend.User.userPages.editProfile.favorites')->name('favorites');
Route::view('escrow', 'Frontend.User.userPages.editProfile.escrow')->name('escrow');
Route::view('escrowaac', 'Frontend.User.userPages.editProfile.escrowaac')->name('escrowaac');



// Store Routes
Route::view('homeBussiness', 'Frontend.Store.Pages.homeBussiness')->name('homeBussiness');
Route::view('messageManage', 'Frontend.Store.Pages.messageManage')->name('messageManage');
Route::view('manageStore', 'Frontend.Store.Pages.manageStore')->name('manageStore');
Route::view('manageassets', 'Frontend.Store.Pages.manageassets')->name('manageassets');

Route::view('bussinessProfile', 'Frontend.Store.Pages.bussinessProfile')->name('bussinessProfile');
Route::view('reviewCenter', 'Frontend.Store.Pages.reviewCenter')->name('reviewCenter');
Route::view('storeReview', 'Frontend.Store.Pages.storeReview')->name('storeReview');
Route::view('productReview', 'Frontend.Store.Pages.productReview')->name('productReview');
Route::view('manageStores', 'Frontend.Store.Pages.manageStores')->name('manageStores');
Route::view('bulk', 'Frontend.Store.Pages.bulk')->name('bulk');
Route::view('faqs', 'Frontend.Store.Pages.faqs')->name('faqs');
Route::view('storeRecord', 'Frontend.Store.Pages.storeRecord')->name('storeRecord');
Route::view('manageCustomers', 'Frontend.Store.Pages.manageCustomers')->name('manageCustomers');