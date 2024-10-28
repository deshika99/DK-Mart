<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AffiliateTemplateController extends Controller
{
    public function index(){
        return view('AffiliateDashBoard.Home');
    }
}
