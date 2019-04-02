<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductsCollection;
use App\Http\Resources\ServersCollection;
use App\Models\Products;
use App\Models\Servers;
use Illuminate\Http\Request;

class DescriptionProductsController extends Controller
{
    public function render()
    {
        $data['servers'] = ServersCollection::collection(Servers::all());
        $data['products'] = ProductsCollection::collection(Products::all());
        //$data['online'] = $online->getOnlineJson();
        return view('pages.description_products', ['data' => $data]);
    }
}
