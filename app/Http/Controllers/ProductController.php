<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request) {
        $categories = Category::all();
        $products = Product::all();
        return view('index', compact('categories', 'products',));
    }

    public function new() {
        $categories = Category::all();
        return view('new.product', compact('categories'));
    }

    public function add(Request $request) {
        $data = $request->validate([
            'name' => ['string', 'required'],
            'category' => ['required', 'numeric'],
            'picture' => ['file', 'required', 'image']
        ]);
        $category = Category::findOrFail($data['category']);
        $product = new Product();
        $product->name = $data['name'];
        $file = $request->file('picture')->store('uploads', 'public');
        $product->image = explode("/", $file)[1];
        $category->products()->save($product);
        session()->flash("status", "success");
        session()->flash("title", "Success!");
        session()->flash('message', "The product was created successfully!");
        return redirect()->route('index');
    }
}
