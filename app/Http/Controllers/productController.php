<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;

class productController extends Controller
{
    //
    public function index()
    {
        return view('pages.products.products', ['products' => product::get()]);
    
    }

    public function create()
    {
        return view('pages.products.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // adjust maximum file size as needed
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/upload'), $imageName);
        }

        // Store other form data in the database
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $imageName, // Assuming you have an 'image' column in your products table
        ]);


        return redirect()->route('products.page')->with('success', 'Product added successfully');
    }


    public function edit($id)
    {
        // dd($id);
        $product = Product::where('id', $id)->first();
        return view('pages.products.edit', ['product' => $product]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $product = Product::findOrFail($id);

        if ($request->hasFile('image')) {

            if ($product->image) {
                $oldImagePath = public_path('images/upload/' . $product->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/upload'), $imageName);
            $product->image = $imageName;
        }

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();


        return redirect()->route('products.page', $id)->with('success', 'Product updated successfully');
    }


    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.page', $id)->with('deleted', 'Product deleted successfully');
    }
}
