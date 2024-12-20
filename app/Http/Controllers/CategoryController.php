<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Str;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all()->sortByDesc('id');
        return view('client.categories.index', compact('categories'));
    }
    public function edit($id)
    {
        $category = Category::find($id);
        $categories = Category::all();
        return view('client.categories.edit', compact('category', 'categories'));
    }
    public function update(Request $request, $id)
    {

        $category = Category::find($id);
        if (!$category) {
            return redirect()->back();
        }
        $category->update([
            ...$request->all(),
            'slug' => Str::slug($request->name)
        ]);
        return redirect()->back();
    }
    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->back();
    }
}