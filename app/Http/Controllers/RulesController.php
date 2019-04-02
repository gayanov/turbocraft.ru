<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RulesController extends Controller
{
    public function render()
    {
        return view('pages.rules');
    }
}
