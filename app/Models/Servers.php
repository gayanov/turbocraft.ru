<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static paginate(int $int)
 */
class Servers extends Model
{
    public $timestamps = false;

    public static function searchServerFilter($productId)
    {
        return Servers::where('id', $productId)
            ->orderBy('id', 'desc')
            ->first();
    }
}
