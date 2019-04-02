<?php

namespace App\Models;

use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

/**
 * @method static filter(array $all)
 */
class Products extends Model
{
    use Filterable;

    public $timestamps = false;

    public static function searchProductFilter($productId)
    {
        return Products::where('id', $productId)
            ->orderBy('id', 'desc')
            ->first();
    }
}
