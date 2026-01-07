<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index($companyName = null , $year = null, Request $request)
    {
        $name = $request->query('name');
        
        return view('company', [
            'companyName' => $companyName,
            'year' => $year,
            'name' => $name,
        ]);
    }
}
    