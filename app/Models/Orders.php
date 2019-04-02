<?php

namespace App\Models;

use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Orders extends Model
{
    use Filterable;

    //public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nickname', 'server_id', 'product_id', 'final_price', 'status'];

    public static function getLastBough()
    {
        return Orders::orderBy('created_at', 'desc')
            ->take(12)
            ->get();
    }
    public static function searchUserFilter($nickname = null, $serverId = null, $porductId = null)
    {
        if($porductId){
            return Orders::where([
                ['nickname', '=', $nickname],
                ['product_id', '=', $porductId],
            ])
                ->orderBy('id', 'desc')
                ->first();
        }

        return Orders::where([
            ['nickname', '=', $nickname],
            ['server_id', '=', $serverId],
        ])
            ->orderBy('id', 'desc')
            ->first();
    }

    public static function createSuccessPaymentUser($nickname, $serverId, $productId, $finalPrice)
    {
        return Orders::create([
            'nickname' => $nickname,
            'server_id' => $serverId,
            'product_id' => $productId,
            'final_price' => $finalPrice,
            'status' => 1
        ]);

        //return $order;

        /*if($order) {
            return $order;
        }

        return true;*/
    }
}
