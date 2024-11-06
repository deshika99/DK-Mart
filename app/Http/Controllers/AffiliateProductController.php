<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AffiliateProductController extends Controller
{
    public function showAdCenter(Request $request)
    {

        // Return the view with hot deals, high commission products, categories, and default tracking ID
        return view('AffiliateDashBoard.adcenter');
    }
}
