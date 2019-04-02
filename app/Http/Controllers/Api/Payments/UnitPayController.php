<?php

namespace App\Http\Controllers\Api\Payments;

use App\Http\Requests\OrdersRequest;
use App\Models\Orders;
use App\Models\Products;
use App\Models\Servers;
use App\Services\Purchasing\UnitPay;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Thedudeguy\Rcon;
//use Maksa988\UnitPay\UnitPay;
//use Maksa988\UnitPay\Facades\UnitPay;

class PaymentController extends Controller
{
    public static function searchOrder(Request $request)
    {
        /*$params = $request->get('params');
        $account = explode('-', $params['account']);

        $nickname = $account[2];
        $serverId = $account[0];
        $finalPrice = $params['orderSum'];

        $order = Orders::where([
            ['nickname', '=', $nickname],
            ['server_id', '=', $serverId],
            ['final_price', '=', $finalPrice]
        ])
            ->orderBy('id', 'desc')
            ->first();*/

        /*if($order) {
            return $order;
        }*/

        return true;
    }
    /**
     * When paymnet is check, you can paid your order
     *
     * @param Request $request
     * @param $order
     * @return bool
     */
    public function paidOrder(Request $request, $order)
    {
        $params = $request->get('params');
        $account = explode('-', $params['account']);

        $nickname = $account[2];
        $serverId = $account[0];
        $productId = $account[1];
        $finalPrice = $params['orderSum'];

        $unitPay = new UnitPay();
        if( is_object($order) ) return false;

        //$createPay = Orders::createSuccessPaymentUser($nickname, $serverId, $productId, $finalPrice, 1);

        //if(! is_object($createPay) ) {
        $server = Servers::searchServerFilter($serverId);
        if(! is_object($server) ) return false;

        $product = Products::searchProductFilter($productId);

        //$order = Orders::searchUserFilter($nickname, $serverId, $productId);

        //if(! is_object($order))
        //{
            //if($product['surcharge']){
                Orders::createSuccessPaymentUser($nickname, $serverId, $productId,$finalPrice);
            //}

            $rcon = new Rcon($server['rcon_ip'], $server['rcon_port'], $server['rcon_password'], '3');
            if ($rcon->connect())
            {
                $cmd = str_replace('%nickname%', $nickname, $product['rcon_cmd']);
                $rcon->sendCommand($cmd);
                return true;
            }
        //}

        return true;
        //}

    }

    /**
     * Start handle process from route
     *
     * @param Request $request
     * @param UnitPay $unitPay
     * @return mixed
     * @throws \Maksa988\UnitPay\Exceptions\InvalidPaidOrder
     * @throws \Maksa988\UnitPay\Exceptions\InvalidSearchOrder
     */
    public function handlePayment(Request $request, UnitPay $unitPay)
    {
        return $unitPay->handle($request);
    }
}
