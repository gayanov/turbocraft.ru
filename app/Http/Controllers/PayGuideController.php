<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayGuideController extends Controller
{
    public function render()
    {
        return view('pages.pay_guide');
    }
}
