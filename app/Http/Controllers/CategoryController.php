<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->get();

		    return view('categories.index', compact('categories'));
    }

    public function create()
    {
        $categories = Category::latest()->get();
        
        return view('categories.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
		        'name' => 'required|unique:categories|string|max:255',
		    ]);

		    $category = Category::create([
		        'name' => $validatedData['name'],
		    ]);

		    return redirect('/categories');
    }

    public function show(Category $category)
    {
        $category->load('news');

        return view('categories.show', compact('category'));
    }

    public function edit(string $id)
    {
        return view('notfound');
    }

    public function update(Request $request, string $id)
    {
        return view('notfound');
    }

    public function destroy(string $id)
    {
        return view('notfound');
    }

    public function search(Request $request)
		{
		    $searchTerm = $request->input('search');

		    $categoriesResults = Category::where('name', 'LIKE', '%' . $searchTerm . '%')->get();

		    return view('search.results', compact('categoriesResults', 'searchTerm'));
		}
}
