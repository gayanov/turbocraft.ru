<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;
use App\Http\Requests\OrdersRequest;
use App\Models\Orders;
use App\Models\Products;
//use Maksa988\UnitPay\UnitPay;
use App\Services\Purchasing\UnitPay;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param OrdersRequest $request
     * @param UnitPay $unitPay
     * @return string
     */
    public function create(OrdersRequest $request)
    {
        $productId = $request->get('productId');
        $nickname = $request->get('nickname');

        //Get object product with param 'id'
        $product = Products::searchProductFilter($productId);

        //Get object order user
        $order = Orders::searchUserFilter($nickname, $product->server_id);

        //Get price from object product
        $price = $product->discount_price;

        //Check user order in database
        if( is_object($order) ) {
            ///If not empty order, get price from object order
            $orderPrice = $order->final_price;

            //Assignment additional price variable from product
            $productPrice = $price;

            if($orderPrice < $productPrice && $product['surcharge']) {
                //Get object category
                $category = Categories::searchCategoryFilter($product['category_id']);

                if($category && isset($category['surcharge'])) {
                    $price = $product->discount_price - $order->final_price;
                }
            }

            /*if($orderPrice >= $productPrice) {
                $message = 'Привилегия не должна быть ниже последней покупки!';

                return back()
                    ->withErrors(
                        new \Illuminate\Support\MessageBag(['catch_exception'=> $message]
                        )
                    );
            }*/
        }

        if($request->get('check'))
            return response()->json([
                'success' => true,
                'final_price' => $price,
            ]);

        /**
         * Create var for payment account with 'param server_id, product_id, nickname'
         */
        $account = $product->server_id.'-'.$product->id.'-'.$nickname;

        /**
         * Generate description for payment
         */
        $description = "Покупка доната ".$product->title." на сервере ".config('app.name');

        /**
         * Generate link for pay
         */
        $unitPay = new UnitPay();
        $redirect = $unitPay->getPayUrl(
            $price,
            $account,
            null,
            $description
        );

        return redirect($redirect);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orders  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Orders $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orders  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Orders $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Orders  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orders $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orders  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orders $order)
    {
        //
    }
}
