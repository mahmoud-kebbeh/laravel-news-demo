<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tag;

use Illuminate\Support\Str;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::latest()->get();

		    return view('tags.index', compact('tags'));
    }

    public function create()
    {
        $tags = Tag::latest()->get();
        
        return view('tags.create', compact('tags'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
		        'name' => 'required|unique:tags|string|max:255',
		    ]);

        $name = $validatedData['name'];

		    $category = Tag::create([
		        'name' => $name,
		        'slug' => Str::slug($name),
		    ]);

		    return redirect('/tags');
    }

    public function show(Tag $tag)
    {
        $tag->load('news');

        return view('tags.show', compact('tag'));
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

		    $results = Tag::where('name', 'LIKE', '%' . $searchTerm . '%')->get();

		    return view('search.results', compact('results', 'searchTerm'));
		}
}
