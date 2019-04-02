<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public static function searchCategoryFilter($categoryId)
    {
        return Categories::where('id', $categoryId)
            //->orderBy('id', 'desc')
            ->get();
    }
}
