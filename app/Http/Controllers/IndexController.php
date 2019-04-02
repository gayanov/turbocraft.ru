<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\OnlineController;
use App\Http\Resources\ProductsCollection;
use App\Http\Resources\ServersCollection;
use App\Models\Categories;
use App\Models\Orders;
use App\Models\Products;
use App\Models\Servers;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function render()
    {
        $data['servers'] = ServersCollection::collection(Servers::all());
        $data['products'] = ProductsCollection::collection(Products::all());
        $data['categories'] = Categories::all();
        $data['orders'] = Orders::getLastBough();
        //$data['online'] = $online->getOnlineJson();
        return view('pages.index', ["data"=>$data]);
    }
}
