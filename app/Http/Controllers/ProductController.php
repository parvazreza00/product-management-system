<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request){
        
        $search = $request->search;
        $products = Product::when($search, function ($query) use ($search) {
            return $query->where('product_id', 'like', "%{$search}%")
                        ->orWhere('description', 'like', "%{$search}%");
        })
        ->orderByRaw('name asc, price asc')
        ->paginate(5);
        return view('index', compact('products'));
    }

    public function productCreate(){
        return view('create');
    }

    public function productStore(Request $request){
        $request->validate([
            'product_id' => 'required|string|unique:products',
            'name' => 'required|string',
           
            'price' => 'required|numeric|regex:/^\d{1,8}(\.\d{1,2})?$/',
            
           
        ], [
            'product_id.required' => 'The product ID is required.',
            'product_id.unique' => 'The product ID must be unique.',
            'name.required' => 'The product name is required.',
            'price.required' => 'The price is required.',
            'price.numeric' => 'The price must be a valid number.',
            'price.regex' => 'The price format is invalid. It should have up to 8 digits before the decimal and up to 2 after.',
            
           
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('product_images', 'public');
        }

        Product::create([
            'product_id' => $request->product_id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'image' => $imagePath,
            'created_at' => now()
        ]);

         return redirect('/products')->with('success', 'Product Created Successfully');

    }

    public function show($id){
        $showProduct = Product::find($id);
        return view('show', compact('showProduct'));
    }

    public function edit($id){
        $editProduct = Product::find($id);
        return view('edit', compact('editProduct'));
    }

    public function update(Request $request, $id)
{
    $product = Product::findOrFail($id);

    $request->validate([
        'product_id' => 'required|string|unique:products,product_id,' . $id,
        'name' => 'required|string',
        'description' => 'nullable|string',
        'price' => 'required|numeric',
        'stock' => 'nullable|integer',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('product_images', 'public');
        $product->image = $imagePath;
    }

    $product->update($request->except(['_token', '_method', 'image']));

    return redirect('/products')->with('success', 'Product updated successfully');
}

public function delete($id){
    Product::findOrFail($id)->delete();
    return redirect('/products')->with('success', 'Product deleted successfully');
}
}
