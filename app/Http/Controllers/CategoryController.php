<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories', [
            'categories' => Category::all()
        ]);
    }

    public function create()
    {}

    public function store(Request $request)
    {}

    public function show(string $id)
    {
        $category = Category::with('services')->find($id);
        
        return view('category', [
            'category' => $category
        ]);
    }

    public function edit(string $id)
    {}

    public function update(Request $request, string $id)
    {}

    public function destroy(string $id)
    {}
}
