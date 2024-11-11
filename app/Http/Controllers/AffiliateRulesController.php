<?php

namespace App\Http\Controllers;
use App\Models\AffiliateRule;

use Illuminate\Http\Request;

class AffiliateRulesController extends Controller
{
    public function showrules() 
    {
        $rules = AffiliateRule::all(); 
        return view('AffiliateDashBoard.affiliateRules', compact('rules'));

    }


}
