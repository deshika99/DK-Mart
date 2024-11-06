<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AffiliateDashboardController extends Controller
{
    public function index() 
    {

        return view('AffiliateDashBoard.myWebsite');
    }
}
