<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function products($id) {
        $categories = Category::all();
        $current_category = Category::findOrFail($id);
        $products = $current_category->products;
        return view('index', compact('current_category', 'categories', 'products'));
    }

    public function new() {
        return view('new.category');
    }

    public function add(Request $request) {
        $data = $request->validate(
            [
                'name' => ['string', 'required', 'unique:categories']
            ]
        );
        $category = new Category();
        $category->name = $data['name'];
        $category->save();
        session()->flash("status", "success");
        session()->flash("title", "Success!");
        session()->flash('message', "The category was created successfully!");
        return redirect()->route('index');
    }
}
