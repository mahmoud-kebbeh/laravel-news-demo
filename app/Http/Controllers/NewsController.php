<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\News;
use App\Models\Category;
use App\Models\Tag;

class NewsController extends Controller
{
    public function index()
    {
    		$news = News::latest()->with('tags')->get();

		    return view('news.index', compact('news'));
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        
        return view('news.create', compact('categories', 'tags'));
    }

    public function store(Request $request)
    {
    		$validatedData = $request->validate([
		        'title' => 'required|string|max:255',
		        'content' => 'required|string',
		        'category' => 'required|exists:categories,id',
		        'tags' => 'required|array',
		    ]);

		    $news = News::create([
		        'title' => $validatedData['title'],
		        'content' => $validatedData['content'],
		        'category_id' => $validatedData['category'],
		        'publish_date' => fake()->dateTimeBetween('-1 month', 'now') ?? now(),
		    ]);

		    if (isset($validatedData['tags'])) {
		        $tagsIds = $validatedData['tags'];
		        $news->tags()->attach($tagsIds);
		    }

		    return redirect('/news');
    }

    public function show(News $news)
    {
    		$news->load(['tags', 'category']);
    		// $news = News::with(['tags', 'category'])->findOrFail($id);

        return view('news.show', compact('news'));
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

		    $results = News::where('title', 'LIKE', '%' . $searchTerm . '%')->get();

		    return view('search.results', compact('results', 'searchTerm'));
		}
}
