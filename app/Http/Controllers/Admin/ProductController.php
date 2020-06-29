<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data['products'] = Product::orderBy('id', 'desc')->paginate(15);
        return view('admin.product.index', $data);
    }

    public function create()
    {
        return view('admin.product.create');
    }
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        if ($request->description != null) {
            $product->description = $request->description;
        } else {
            $product->description = $request->name;
        }

        $product->price = $request->price;
        if ($request->hasFile('image')) {
            $product->image = $request->file('image')->store('products', 'public');
        }
        $product->save();
        return redirect()->back()->with('mgs', ['Success', 'Product saved Successfully!']);
    }
    public function show(Product $product)
    {
        return view('admin.product.show', compact('product'));
    }
    public function edit(Product $product)
    {
        return view('admin.product.edit', compact('product'));
    }
    public function update(Request $request, Product $product)
    {
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        if ($request->hasFile('image')) {
            $product->image = $request->file('image')->store('products', 'public');
        }
        $product->save();
        return redirect()->back()->with('mgs', ['Success', 'Product Updated Successfully!']);
    }
    public function delete(Product $product)
    {
        $product->delete();
        return redirect()->back()->with('mgs', ['Success', 'Product deleted Successfully!']);
    }
}
