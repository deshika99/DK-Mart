<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AffiliateRulesController extends Controller
{
    public function showrules() 
    {

        return view('AffiliateDashBoard.affiliateRules');
    }
}
