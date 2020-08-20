
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\Welcome;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Models\Hotel;
use App\Models\Price;
use Illuminate\Http\Request;



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

//

Route::get('/paymentSuccess', function () {
  return view('checkout.paymentSuccess');
});



Route::get('/checkout/{id}' ,           'CheckoutController@index');
Route::post('/create' ,               'CheckoutController@create');
Route::get('/search' ,               'SearchController@index');
Route::get('/hotelPage/{id}' ,       'SearchController@hotelPage');
Route::get('/card' ,                 'SearchController@Prices');
Route::post('/ExSearch' ,             'SearchController@Search');

Route::post('/HomeSearch','SearchController@HomeSearch');
Route::get('/HomeSearchD','SearchController@HomeSearchD');
Route::get('/HomeSearchOne/{id}','SearchController@HomeSearchOne');



Route::get('/eventVue' ,                'HotelController@eventVue');
Route::get('/event' ,                   'HotelController@event');
Route::get('/eventRegistre' ,           'HotelController@eventRegistre');
Route::get('/eventShow/{id}' ,          'HotelController@eventShow');
//
//
// Route::get('/us' ,                 'AdminController@index');
//
// Route::get('testC','HotelController@hotelCount');
//
// Route::get('/aloalo',function(){
//   $us = User::all();
//   return view('exx')->with('us',$us);
// });
//
//
Route::get('/R', function () {
   return view('R');
});
//
//
Route::get('/registerClient', function () {
  return view('auth.registerClient');
});
Route::get('/registerHotel', function () {
  return view('auth.registerHotel');
});
//
//
//
Route::post('registerTest','NewRegisterController@register')->name('registerHotel');
Route::post('registerClient','ClientRegisterController@register')->name('registerClient');
//
// Route::get('/email', function () {
//
//   // Mail::to('yasserzayet@gmail.com')->send(new Welcome());
//
//   return new Welcome();
// });
//

Auth::routes(['verify' => false]);


// SuperAdmin
Route::middleware(['superadmin','auth'])->group(function(){


  Route::get('/users' ,                 'AdminController@index');
  Route::get('/hoteladmin',           'AdminController@hoteladmin');

  Route::get('/admin',               'AdminController@hotels');
  Route::get('/hotel/{id}',           'AdminController@show');
  Route::post('/activeUser/{id}',     'AdminController@ActiveUser');
  Route::post('/desactiveUser/{id}',  'AdminController@DesactiveUser');

});



// Hotel
Route::middleware(['hotel','auth'])->group(function(){

  Route::get('hotel',                   'HotelController@roomDispo' );
  Route::get('/profil' ,                'HotelController@profil');
  Route::post('/addEvent' ,             'HotelController@addEvent');
  Route::get('/dashboard' ,             'HotelController@dashboard');
  Route::get('/customers' ,             'HotelController@customer');
  Route::get('/rooms'    ,              'HotelController@rooms');
  Route::post('/addRoom'    ,           'HotelController@addRoom');
  Route::delete('/deleteRoom/{id}',     'HotelController@destroy');
  Route::patch('/updateRoom/{id}',      'HotelController@update');
  Route::patch('/updateRooms/{id}',     'HotelController@updateRoom');
  Route::get('/roomDispo'    ,          'HotelController@roomDispo');

});


// Client
Route::middleware(['client','auth'])->group(function(){


  Route::get('/paymentSuccess', function () {
    return view('checkout.paymentSuccess');
  });


  Route::get('/profilClient' ,                'ClientController@profil');
  Route::post('/registreEvent' ,           'CheckoutController@registreEvent');

  Route::get('/checkout/{id}' ,           'CheckoutController@index');
  Route::get('/eventCheckout/{id}' ,      'CheckoutController@eventCheckout');
  Route::post('/create' ,                 'CheckoutController@create');

});
