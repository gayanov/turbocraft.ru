<?php
use Illuminate\Support\Facades\Route;

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


/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::namespace('Api')->group(function () {

    Route::prefix('v1')->group( function() {

        Route::get('face', 'FaceController@renderImage');
        Route::get('online', 'OnlineController@getOnline');

        //Into Resources
        Route::resource('products', 'ProductsController')->only([
            'index', 'show'
        ]);
        Route::resource('servers', 'ServersController')->only([
            'index'/*, 'show'*/
        ]);

        /*Route::resource('order', 'OrdersController')->only([
            'create', //'index', 'show'
        ]);*/

        //Resource for payment
        Route::namespace('Payments')->group(function () {

            Route::prefix('payments')->group( function() {
                Route::get('unitpay', 'PaymentController@handlePayment');
            });

        });

    });

});
