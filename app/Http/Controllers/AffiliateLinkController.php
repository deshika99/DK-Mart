<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AffiliateLinkController extends Controller
{
    public function showAffiliateForm() 
    {

        return view('AffiliateDashBoard.tools');
    }

    public function codeCenter()
    {
        
        return view('AffiliateDashBoard.codeCenter');
    }
}
