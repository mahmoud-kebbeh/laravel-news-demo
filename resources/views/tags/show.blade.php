<x-layout>
	<div class="component">
		<h2>Tag: {{ $tag->name }}</h2>
		
		@if($tag->news->count() > 0)
		<div class="component grid-5 category">
			@foreach($tag->news as $singular_news)
		  	<a class="component tag grid_item" href="{{ route('news.index') }}/{{ $singular_news->id }}">{{ $singular_news->title }}</a>
			@endforeach
		</div>

		@else
		<h4>No news belong to this tag.</h4>

		@endif
	</div>
</x-layout>