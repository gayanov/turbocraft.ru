<?php namespace App\ModelFilters;

use EloquentFilter\ModelFilter;

class ProductsFilter extends ModelFilter
{
    /**
    * Related Models that have ModelFilters as well as the method on the ModelFilter
    * As [relationMethod => [input_key1, input_key2]].
    *
    * @var array
    */
    public $relations = [];

    public function serverId($id)
    {
        return $this->where('server_id', $id);

        /*if($query->exists()) return $query;

        return abort(404, 'Сервер не найден!');*/
    }
    public function productId($id)
    {
        return $this->where('id', $id);

        /*if($query->exists()) return $query;

        return abort(404, 'Продукт не найден!');*/
    }
}
