<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AffiliateReportController extends Controller
{
    public function trafficreport() 
    {

        return view('AffiliateDashBoard.reports');
    }

    public function  withdrawals() 
    {

        return view('AffiliateDashBoard.withdrawals');
    }

    public function  showPaymentInfo()
    {

        return view('AffiliateDashBoard.paymentInformation');
    }

   
}
