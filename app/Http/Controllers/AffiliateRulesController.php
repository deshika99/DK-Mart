<?php

namespace App\Http\Controllers;
use App\Models\AffiliateRules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class AffiliateRulesController extends Controller
{
    public function showrules() 
    {
        return view('AffiliateDashBoard.affiliateRules');
    }


    public function index()
    {
        $rules = AffiliateRules::all(); 
        return view('AdminDashboard.affiliate_rules', compact('rules'));
    }



    public function store(Request $request)
    {
        
            $request->validate([
                'rule' => 'required|string|max:255',
            ]);
        
            AffiliateRules::create([
                'rule' => $request->rule,
            ]);
        
            return redirect()->route('affiliate_rules')->with('success', 'Rule added successfully.');
    }
    
    
    public function update(Request $request, $id)
    {
            $affiliateRule = AffiliateRules::findOrFail($id);
            $affiliateRule->rule = $request->rule;
            $affiliateRule->save();
    
            return redirect()->route('affiliate_rules')->with('success', 'Rule updated successfully.');
    }
    


    public function destroy($id)
    {
        $rule = AffiliateRules::findOrFail($id);
        $rule->delete();

        return redirect()->route('affiliate_rules')->with('success', 'Rule deleted successfully.');
    }



}


