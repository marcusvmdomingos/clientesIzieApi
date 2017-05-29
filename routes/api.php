<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::options('customer/{id?}',function() use ($allowResponse)
{
    return (new Illuminate\Http\Response(null, 200))
    ->header('Access-Control-Allow-Origin', '*')
    ->header('Access-Control-Allow-Methods', 'GET', 'POST')
    ->header('Access-Control-Allow-Headers', 'content-type, accept, x-requested-with'); // and any other headers you may send


});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(array('prefix' => 'api'), function()
{

  Route::get('/', function () {
      return response()->json(['message' => 'Addresses API', 'status' => 'Connected']);;
  });

  Route::resource('addresses', 'AddressesController');
  Route::resource('customers', 'CustomersController');
});

Route::get('/', function () {
    return redirect('api');
});