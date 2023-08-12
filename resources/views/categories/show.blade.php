<x-layout>
	<div class="component">
		<h2>Category: {{ $category->name }}</h2>
		
		@if($category->news->count() > 0)
		<div class="component grid-5 tag">
			@foreach($category->news as $singular_news)
		  	<a class="component grid_item category" href="{{ route('news.index') }}/{{ $singular_news->id }}">{{ $singular_news->title }}</a>
			@endforeach
		</div>

		@else
		<h4>No news belong to this category.</h4>

		@endif
	</div>
</x-layout>