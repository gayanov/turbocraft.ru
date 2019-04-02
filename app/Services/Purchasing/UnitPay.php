<?php
/**
 * Created by PhpStorm.
 * User: Ilshat
 * Date: 17.01.2019
 * Time: 20:20
 */

namespace App\Services\Purchasing;


use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UnitPay extends \Maksa988\UnitPay\UnitPay
{
    /**
     * @param Request $request
     * @return string
     * @throws \Maksa988\UnitPay\Exceptions\InvalidPaidOrder
     * @throws \Maksa988\UnitPay\Exceptions\InvalidSearchOrder
     */
    public function handle(Request $request)
    {
        // Validate request from UnitPay
        if(! $this->validateOrderFromHandle($request)) {
            return $this->responseError('validateOrderFromHandle');
        }

        // Return success response for check and error methods
        if (in_array($request->get('method'), ['check', 'error'])) {
            return $this->responseOK('OK');
        }

        // Search and get order
        $order = $this->callSearchOrder($request);

        if(! $order) {
            return $this->responseError('searchOrder');
        }

        // If method unknown then return error
        if ($request->get('method') != 'pay') {
            return $this->responseError('invalidRequest');
        }

        // If order already paid return success
        if(Str::lower($order['_orderStatus']) === 'paid') {
            return $this->responseOK('OK');
        }

        // PaidOrder - update order info
        // if return false then return error
        if(! $this->callPaidOrder($request, $order)) {
            return $this->responseError('paidOrder');
        }

        // Order is paid and updated, return success
        return $this->responseOK('OK');
    }

    /**
     * @param $amount
     * @param $order_id
     * @param null $email
     * @param null $desc
     * @param null $currency
     * @return string
     */
    public function getPayUrl($amount, $order_id, $email, $desc = null, $currency = null)
    {
        // Array of url query
        $query = [];

        // Public key
        $url = rtrim(config('unitpay.pay_url'), '/') .'/'. config('unitpay.public_key');

        // Amount of payment
        $query['sum'] = $amount;

        // Order id
        $query['account'] = $order_id;

        // User email
        $query['customerEmail'] = $email;

        // Locale for payment form
        $query['locale'] = config('unitpay.locale', 'ru');

        // Payment description
        if(! is_null($desc)) {
            $query['desc'] = $desc;
        }

        // Payment currency
        $query['currency'] = is_null($currency) ? config('unitpay.currency') : $currency;

        // Generate signature
        $query['signature'] = $this->getFormSignature($order_id, $query['currency'], $desc, $amount, config('unitpay.secret_key'));

        //Hide menu choosing payment
        $query['hideMenu'] = false;

        // Merge url ang query and return
        return $url ."?". http_build_query($query);
    }

    /**
     * @param Request $request
     * @return bool
     */
    public function validateSignature(Request $request)
    {
        $sign = $this->getSignature($request->get('method'), $request->get('params'), config('unitpay.secret_key'));

        if($request->get('params')['signature'] != $sign) {
            return false;
        }

        return true;
    }

    /**
     * @param Request $request
     * @return bool
     */
    public function validateOrderFromHandle(Request $request)
    {
        return (/*$this->AllowIP($request->ip())
            && */$this->validate($request)
            && $this->validateSignature($request));
    }

}