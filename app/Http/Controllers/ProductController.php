<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\SubSubcategory;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Variations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; 
use Illuminate\Validation\ValidationException;

class ProductController extends Controller
{
  //navbar search box
  /*  public function searchView(Request $request)
{
    $query = $request->input('query');
    $categoryId = $request->input('category');
     $products = Product::query();

    if ($query) {
        $products = $products->where('product_name', 'LIKE', "%$query%")
                             ->orWhere('product_description', 'LIKE', "%$query%");
    }

    if ($categoryId) {
        $products = $products->where('category_id', $categoryId);
    }

    $products = $products->get();

    $categories = Category::all();

    return view('frontend.searchView', compact('products', 'categories'));
}*/

// search box

//search box 2

 /* public function searchProducts(Request $request)
{
    $query = $request->input('query');

    if (!$query) {
        return response()->json(['products' => []]);
    }

    $products = Product::where('product_name', 'LIKE', '%' . $query . '%')->get();

    return response()->json([
        'products' => $products,
    ]);
}}*/
// search box 2

public function searchProducts(Request $request) //new part add
{
    $query = $request->query('query');
    
    // Search across multiple tables
    $products = Product::where('product_name', 'LIKE', "%{$query}%")
        ->orWhereHas('category', function($q) use ($query) {
            $q->where('name', 'LIKE', "%{$query}%");
        })
        ->orWhereHas('subcategory', function($q) use ($query) {
            $q->where('name', 'LIKE', "%{$query}%");
        })
        ->orWhereHas('subsubcategory', function($q) use ($query) {
            $q->where('name', 'LIKE', "%{$query}%");
        })
        ->get();

    return response()->json(['products' => $products]);
}




    public function showproducts()
    {
        $products = Product::with(['images', 'category'])->paginate(10);
        $categories = Category::all();

        return view('AdminDashboard.products_list', compact('products', 'categories'));
    }

    
    public function view_details($id)
    {
        $product = Product::with(['category', 'images'])->findOrFail($id); 
        return view('AdminDashboard.product-details', compact('product'));
    }


    public function displayCategories()
    {
        $categories = Category::with('subcategories.subSubcategories')->get();
        return view('AdminDashboard.add_products', compact('categories'));
    }

    public function getSubcategories($categoryId)
    {
        return Subcategory::where('category_id', $categoryId)->get();
    }
    
    public function getSubSubcategories($subcategoryId)
    {
        return SubSubcategory::where('subcategory_id', $subcategoryId)->get();
    }



    public function store(Request $request)

    {
        $request->merge([
            'is_affiliate' => $request->has('is_affiliate') ? true : false,
        ]);
    
        // Validate the request
        $validatedData = $request->validate([
            'product_name' => 'required|string|max:255',
            'product_description' => 'nullable|string',
            'category_id' => 'required',
            'subcategory_id' => 'nullable',
            'sub_subcategory_id' => 'nullable',
            'quantity' => 'required|integer',
            'tags' => 'nullable|string',
            'normal_price' => 'required|numeric',
            'is_affiliate' => 'boolean',
            'affiliate_price' => 'nullable|numeric',
            'commission_percentage' => 'nullable|numeric',
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpg,jpeg,png|max:2048',
            'variations' => 'nullable|array',
            'variations.*.type' => 'nullable|string',
            'variations.*.value' => 'nullable|string',
            'variations.*.hex_value' => 'nullable|string',
            'variations.*.quantity' => 'nullable|integer',
        ]);
    
         // Use the commission percentage provided by the user
         $commissionPercentage = $validatedData['commission_percentage'] ?? 0;
         $affiliatePrice = $validatedData['is_affiliate'] ? ($validatedData['normal_price'] ?? 0) : null;
         $commissionPrice = $affiliatePrice ? ($affiliatePrice * $commissionPercentage / 100) : null;
    
        // Create product
        $product = Product::create([
            'product_id' => 'P-' . strtoupper(substr(uniqid(), -6)),
            //'shop_id' => $validatedData['shop_id'],
            'product_name' => $validatedData['product_name'],
            'product_description' => $validatedData['product_description'],
            'category_id' => $validatedData['category_id'],
            'subcategory_id' => $validatedData['subcategory_id'],
            'sub_subcategory_id' => $request->input('sub_subcategory_id'),
            'quantity' => $validatedData['quantity'],
            'tags' => $validatedData['tags'],
            'normal_price' => $validatedData['normal_price'],
            'is_affiliate' => $validatedData['is_affiliate'],
            'affiliate_price' => $affiliatePrice,
            'commission_percentage' => $commissionPercentage,
            'commission_price' => $commissionPrice,
        ]);
    
        // Handle product images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $imagePath = $image->storeAs('product_images', $imageName, 'public');
    
                ProductImage::create([
                    'product_id' => $product->product_id,
                    'image_path' => $imagePath,
                ]);
            }
        }
    
        // Handle product variations
        if (isset($validatedData['variations'])) {
            foreach ($validatedData['variations'] as $variation) {
                Variations::create([
                    'product_id' => $product->product_id,
                    'type' => $variation['type'],
                    'value' => $variation['type'] === 'color' ? null : $variation['value'],
                    'hex_value' => $variation['type'] === 'color' ? $variation['hex_value'] : null,
                    'quantity' => $variation['quantity'],
                ]);
            }
        }
    
        return redirect()->route('products_list')->with('success', 'Product added successfully.');
    }



    public function destroy($productId)
    {
        $product = Product::findOrFail($productId);
        $product->delete();
        return redirect()->route('products_list')->with('success', 'Product deleted successfully');
    }


    public function edit($productId)
    {
        $product = Product::with(['category', 'subcategory', 'subSubcategory', 'variations'])->findOrFail($productId);
        $categories = Category::with('subcategories.subSubcategories')->get();
        return view('AdminDashboard.edit_products', compact('product', 'categories'));
    }
    

    
    
    
        public function update(Request $request, $id)
        {
            $request->merge([
                'is_affiliate' => $request->has('is_affiliate') ? true : false,
            ]);
        
            $validatedData = $request->validate([
                'product_name' => 'required|string|max:255',
                'product_description' => 'nullable|string',
                'category_id' => 'required',
                'subcategory_id' => 'nullable',
                'sub_subcategory_id' => 'nullable',
                'quantity' => 'required|integer',
                'tags' => 'nullable|string',
                'normal_price' => 'required|numeric',
                'is_affiliate' => 'boolean',
                'affiliate_price' => 'nullable|numeric',
                'commission_percentage' => 'nullable|numeric',
                'images' => 'nullable|array',
                'images.*' => 'image|mimes:jpg,jpeg,png|max:2048',
                'deleted_images' => 'nullable|array',
                'deleted_images.*' => 'exists:product_images,id',
                'variations' => 'nullable|array',
                'variations.*.id' => 'nullable|integer|exists:variations,id',
                'variations.*.type' => 'nullable|string',
                'variations.*.value' => 'nullable|string',
                'variations.*.hex_value' => 'nullable|string',
                'variations.*.quantity' => 'nullable|integer',
            ]);
        
            $product = Product::findOrFail($id);
        
            $commissionPercentage = $validatedData['is_affiliate'] ? ($validatedData['commission_percentage'] ?? 0) : 0;
            $affiliatePrice = $validatedData['is_affiliate'] ? ($validatedData['affiliate_price'] ?? 0) : null;
            $commissionPrice = $affiliatePrice ? ($affiliatePrice * $commissionPercentage / 100) : null;
        
            $product->update([
                'product_name' => $validatedData['product_name'],
                'product_description' => $validatedData['product_description'],
                'category_id' => $validatedData['category_id'],
                'subcategory_id' => $validatedData['subcategory_id'],
                'sub_subcategory_id' => $validatedData['sub_subcategory_id'],
                'quantity' => $validatedData['quantity'],
                'tags' => $validatedData['tags'],
                'normal_price' => $validatedData['normal_price'],
                'is_affiliate' => $validatedData['is_affiliate'],
                'affiliate_price' => $affiliatePrice,
                'commission_percentage' => $commissionPercentage,
                'commission_price' => $commissionPrice,
            ]);
        
            // Handle product images
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $imageName = time() . '_' . $image->getClientOriginalName();
                    $imagePath = $image->storeAs('product_images', $imageName, 'public');
        
                    ProductImage::create([
                        'product_id' => $product->product_id,
                        'image_path' => $imagePath,
                    ]);
                }
            }
        
            // Handle deleted images
            if ($request->has('deleted_images')) {
                ProductImage::whereIn('id', $validatedData['deleted_images'])->delete();
            }
        
            // Handle product variations
            $variationIds = collect($request->input('variations'))->pluck('id')->filter();
        
            Variations::where('product_id', $product->product_id)
                ->whereNotIn('id', $variationIds)
                ->delete();
        
            foreach ($request->input('variations') as $variationData) {
                if (isset($variationData['id'])) {
                    $variation = Variations::where('id', $variationData['id'])
                        ->where('product_id', $product->product_id)
                        ->first();
        
                    if ($variation) {
                        $variation->update([
                            'type' => $variationData['type'],
                            'value' => $variationData['type'] === 'color' ? null : $variationData['value'],
                            'hex_value' => $variationData['type'] === 'color' ? $variationData['hex_value'] : null,
                            'quantity' => $variationData['quantity']
                        ]);
                    }
                } else {
                    Variations::create([
                        'product_id' => $product->product_id,
                        'type' => $variationData['type'],
                        'value' => $variationData['type'] === 'color' ? null : $variationData['value'],
                        'hex_value' => $variationData['type'] === 'color' ? $variationData['hex_value'] : null,
                        'quantity' => $variationData['quantity']
                    ]);
                }
            }
        
            return redirect()->route('products_list')->with('success', 'Product updated successfully.');
        }

}
