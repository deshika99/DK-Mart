<?php
namespace App\Http\Controllers;

use App\Models\CustomerOrder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AddressBookController extends Controller
{
    // Display address book
    public function index()
    {
        $addresses = CustomerOrder::all(); 
        return view('user_dashboard.address-book', compact('addresses'));
    }

    // Add new address
    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'house_no' => 'required',
            'city' => 'required',
            'postal_code' => 'required',
        ]);

        CustomerOrder::create($request->all());
        return response()->json(['success' => 'Address added successfully']);
    }

    // Edit address
    public function edit($id)
    {
        $address = CustomerOrder::find($id);
        return response()->json($address);
    }

    // Update address
    public function update(Request $request, $id)
    {
        $request->validate([
            'customer_name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'house_no' => 'required',
            'city' => 'required',
            'postal_code' => 'required',
        ]);

        $address = CustomerOrder::find($id);
        $address->update($request->all());
        return response()->json(['success' => 'Address updated successfully']);
    }

    // Delete address
    public function destroy($id)
    {
        $address = CustomerOrder::find($id);
        $address->delete();
        return response()->json(['success' => 'Address deleted successfully']);
    }
}
