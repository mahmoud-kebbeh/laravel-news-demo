<x-layout>
	<div class="component">
		<h2>{{ $news->title }}</h2>

		<div class="component">
			@foreach($news->tags as $tag)
		  	<a href="{{ route('tags.index') }}/{{ $tag->id }}" class="tag">{{ $tag->name }}</a>
			@endforeach
		</div>
		
		<div class="component">
	    <h4>{{ $news->content }}</h4>
		</div>

		<div class="component">
			<h4 class="component">Category:</h4>
	    <a href="{{ route('categories.index') }}/{{ $news->category->id }}" class="category">{{ $news->category->name }}</a>
		</div>
	</div>
</x-layout>