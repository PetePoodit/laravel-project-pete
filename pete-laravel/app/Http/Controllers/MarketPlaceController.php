<?php

namespace App\Http\Controllers;

class MarketplaceController extends Controller
{
    public function index($category = null)
    {
        return view('marketplace', [
            'category' => $category
        ]);
    }
}
