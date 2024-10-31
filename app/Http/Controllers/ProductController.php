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

    

    public function store(Request $request)
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
            'total_price' => 'required|numeric',
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpg,jpeg,png|max:2048',
            'variations' => 'nullable|array',
            'variations.*.type' => 'required|string',
            'variations.*.value' => 'nullable|string',
            'variations.*.hex_value' => 'nullable|string',
            'variations.*.quantity' => 'required|integer',
        ]);
    
        $product = Product::create([
            'product_id' => 'P-' . strtoupper(substr(uniqid(), -6)),
            'product_name' => $validatedData['product_name'],
            'product_description' => $validatedData['product_description'],
            'category_id' => $validatedData['category_id'],
            'subcategory_id' => $validatedData['subcategory_id'],
            'sub_subcategory_id' => $validatedData['sub_subcategory_id'],
            'quantity' => $validatedData['quantity'],
            'tags' => $validatedData['tags'],
            'normal_price' => $validatedData['normal_price'],
            'is_affiliate' => $validatedData['is_affiliate'],
            'affiliate_price' => $validatedData['affiliate_price'],
            'commission_percentage' => $validatedData['commission_percentage'],
            'total_price' => $validatedData['total_price'],
        ]);
    
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
        $product = Product::with('category', 'subcategory', 'subSubcategory')->findOrFail($productId);
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
            'total_price' => 'required|numeric',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpg,jpeg,png|max:2048',
            'deleted_images' => 'nullable|array',
            'deleted_images.*' => 'exists:product_images,id',
        ]);
    
        $product = Product::findOrFail($id);
    
        $product->product_name = $validatedData['product_name'];
        $product->product_description = $validatedData['product_description'];
        $product->category_id = $validatedData['category_id'];
        $product->subcategory_id = $validatedData['subcategory_id'];
        $product->sub_subcategory_id = $validatedData['sub_subcategory_id'];
        $product->quantity = $validatedData['quantity'];
        $product->tags = $validatedData['tags'];
        $product->normal_price = $validatedData['normal_price'];
        $product->is_affiliate = $validatedData['is_affiliate'];
        $product->affiliate_price = $validatedData['affiliate_price'];
        $product->commission_percentage = $validatedData['commission_percentage'];
        $product->total_price = $validatedData['total_price'];
        $product->save();
    
        // Handle image uploads if any
        if ($request->hasFile('images')) {
            try {
                foreach ($request->file('images') as $image) {
                    $imageName = time() . '_' . $image->getClientOriginalName();
                    $imagePath = $image->storeAs('product_images', $imageName, 'public');
    
                    ProductImage::create([
                        'product_id' => $product->product_id,
                        'image_path' => $imagePath,
                    ]);
                }
            } catch (\Exception $e) {
                return redirect()->route('products_list')->with('error', 'Failed to upload images.');
            }
        }
    
        // Handle deletion of images if any
        if ($request->has('deleted_images')) {
            try {
                ProductImage::whereIn('id', $validatedData['deleted_images'])->delete();
            } catch (\Exception $e) {
                return redirect()->route('products_list')->with('error', 'Failed to delete images.');
            }
        }
    
        return redirect()->route('products_list')->with('success', 'Product updated successfully.');
    }
    
    

}
